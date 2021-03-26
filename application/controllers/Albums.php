<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Albums extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_surat_n1_n6");
	}

	public function index()
	{
		$jumlah = $this->model_utama->view('album')->num_rows();
		$config['base_url'] = base_url() . 'albums/index/' . $this->uri->segment(3);
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 10;
		if ($this->uri->segment('4') == '') {
			$dari = 0;
		} else {
			$dari = $this->uri->segment('4');
		}
		$data['title'] = "Albums";
		$data['description'] = description();
		$data['keywords'] = keywords();
		$this->load->model('M_surat_n1_n6');
		$data['heading'] = $this->M_surat_n1_n6->get('heading')->row_array();
		if (is_numeric($dari)) {
			$data['album'] = $this->model_utama->view_where_ordering_limit('album', array('aktif' => 'Y'), 'id_album', 'DESC', $dari, $config['per_page']);
		} else {
			redirect('main');
		}
		$this->pagination->initialize($config);
		$this->template->load(template() . '/template', template() . '/album', $data);
	}

	public function detail()
	{

		$query = $this->model_utama->view_join_one('album', 'users', 'username', array('album_seo' => $this->uri->segment(3)), 'id_album', 'desc', 0, 1);
		if ($query->num_rows() <= 0) {
			redirect('main');
		} else {
			$row = $query->row_array();
			$jumlah = $this->model_utama->view_where('gallery', array('id_album' => $row['id_album']))->num_rows();
			$config['base_url'] = base_url() . 'albums/detail/' . $this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 1;
			if ($this->uri->segment('4') == '') {
				$dari = 0;
			} else {
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Albums $row[jdl_album]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			$this->load->model('M_surat_n1_n6');
			$data['heading'] = $this->M_surat_n1_n6->get('heading')->row_array();
			if (is_numeric($dari)) {
				$data['detailalbum'] = $this->model_utama->view_where_ordering_limit('gallery', array('gallery.id_album' => $row['id_album']), 'id_gallery', 'DESC', $dari, $config['per_page']);
			} else {
				redirect('main');
			}
			$this->pagination->initialize($config);

			$dataa = array('hits_album' => $row['hits_album'] + 1);
			$where = array('id_album' => $row['id_album']);
			$this->model_utama->update('album', $dataa, $where);
			$this->template->load(template() . '/template', template() . '/detailalbum', $data);
		}
	}

	public function frame()
	{

		$query = $this->model_utama->view_join_one('album', 'users', 'username', array('album_seo' => $this->uri->segment(3)), 'id_album', 'desc', 0, 1);
		if ($query->num_rows() <= 0) {
			redirect('main');
		} else {
			$row = $query->row_array();
			$jumlah = $this->model_utama->view_where('gallery', array('id_album' => $row['id_album']))->num_rows();
			$config['base_url'] = base_url() . 'albums/detail/' . $this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 1;
			if ($this->uri->segment('4') == '') {
				$dari = 0;
			} else {
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Albums $row[jdl_album]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			if (is_numeric($dari)) {
				$data['detailalbum'] = $this->model_utama->view_single('gallery', array('gallery.id_album' => $row['id_album']), 'id_gallery', 'ASC');
			} else {
				redirect('main');
			}
			$this->pagination->initialize($config);

			$dataa = array('hits_album' => $row['hits_album'] + 1);
			$where = array('id_album' => $row['id_album']);
			$this->model_utama->update('album', $dataa, $where);
			//$this->template->load(template().'/template',template().'/framealbum',$data);
			$this->load->view(template() . '/framealbum', $data);
		}
	}

	public function socmed($id)
	{
		$where = [
			'id' => $id
		];
		$instagram = $this->input->post('instagram');
		$facebook = $this->input->post('facebook');
		$youtube = $this->input->post('youtube');
		$whatsapp = $this->input->post('whatsapp');
		$embed_ig = $this->input->post('embed_ig');
		$data = [
			'instagram' => $instagram,
			'facebook' => $facebook,
			'youtube' => $youtube,
			'whatsapp' => $whatsapp,
			'embed_ig' => $embed_ig,
		];
		$this->M_surat_n1_n6->update_data($where, $data, 'socmed');
		redirect('administrator/socmed');
	}
	public function galeri_instagram()
	{
		$jumlah = $this->model_utama->view('socmed')->num_rows();
		$config['base_url'] = base_url() . 'albums/galeri_instagram/' . $this->uri->segment(3);
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 10;
		$data = [
			'heading' => $this->M_surat_n1_n6->get('heading')->row_array(),
			'title' => 'Galeri Instagram',
			'description' => description(),
			'keywords' => keywords(),
			'socmed' => $this->M_surat_n1_n6->get('socmed')->row_array(),
		];
		$this->template->load(template() . '/template', template() . '/galeri_instagram', $data);
	}
}

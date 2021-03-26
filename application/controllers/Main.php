<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_surat_n1_n6");
	}
	public function index()
	{
		$data['title'] = title();
		$data['description'] = description();
		$data['keywords'] = keywords();

		$data['agenda'] = $this->model_utama->view_join('agenda', 'users', 'username', 'id_agenda', 'DESC', 0, 4);
		$data['pengumuman'] = $this->model_utama->view_where_ordering_limit('sekilasinfo', "aktif='Y'", 'id_sekilas', 'DESC', 0, 3);
		$data['video1'] = $this->model_utama->view_ordering_limit('video', 'id_video', 'DESC', 0, 1);
		$data['video2'] = $this->model_utama->view_ordering_limit('video', 'id_video', 'DESC', 1, 1);
		$data['terbaru'] = $this->model_utama->view_where_ordering_limit('berita', "status='Y'", 'id_berita', 'DESC', 0, 5);
		$data['heading'] = $this->M_surat_n1_n6->get('heading')->row_array();
		$data['berita1'] = $this->model_utama->view_where_ordering_limit('berita', array('id_kategori' => 62, 'status' => 'Y'), 'id_berita', 'DESC', 0, 5);
		$data['berita2'] = $this->model_utama->view_where_ordering_limit('berita', array('id_kategori' => 61, 'status' => 'Y'), 'id_berita', 'DESC', 0, 5);
		$data['berita3'] = $this->model_utama->view_where_ordering_limit('berita', array('id_kategori' => 63, 'status' => 'Y'), 'id_berita', 'DESC', 0, 5);
		$data['pertanyaan'] = $this->model_utama->view_where_ordering_limit('poling', "status='Pertanyaan'", 'id_poling', 'DESC', 0, 1);
		$data['jawaban'] = $this->model_utama->view_where_ordering_limit('poling', "status='Jawaban'", 'id_poling', 'ASC', 0, 10);



		$this->template->load(template() . '/template', template() . '/content', $data);
	}
	public function heading($id)

	{
		$where = [
			'id' => $id
		];
		$desa_kelurahan = $this->input->post('desa_kelurahan');
		$nama_desa_kelurahan = $this->input->post('nama_desa_kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kabupaten_kota = $this->input->post('kab_kota');
		$nama_kabupaten_kota = $this->input->post('nama_kabupaten_kota');
		$data = [
			'desa_kelurahan' => $desa_kelurahan,
			'nama_desa_kelurahan' => $nama_desa_kelurahan,
			'kecamatan' => $kecamatan,
			'kabupaten_kota' => $kabupaten_kota,
			'nama_kabupaten_kota' => $nama_kabupaten_kota,
		];
		$this->M_surat_n1_n6->update_data($where, $data, 'heading');
		redirect('administrator/headingwebsite');
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
}
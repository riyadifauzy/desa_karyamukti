<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("M_surat_n1_n6");
        // $this->load->model('Usermodel');
    }

function pb_kkbaru_detail($id_kkbaru)
    {

        $data = [
            'title' => 'Detail Lampiran KK Baru',
            'pb_kkbaru' => $this->db->get_where('pb_kkbaru',['id_kkbaru' =>$id_kkbaru])->result_array,
        ];
        $this->template->load('administrator/template', 'administrator/detail/pb_kkbaru_detail', $data);
    }
}
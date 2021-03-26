<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_SK extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
    }
    
    function sk_belummenikah($id_surat_belummenikah)
    {
        $where = array('id_surat_belummenikah' => $id_surat_belummenikah);
        $data['sk_belummenikah'] = $this->M_surat_n1_n6->get_data($where, 'sk_belummenikah')->result();
        $this->load->view('surat/cetak_sk_belummenikah', $data);
    }

    function sk_kelakuanbaik($id_surat_kelakuanbaik)
    {
        $where = array('id_surat_kelakuanbaik' => $id_surat_kelakuanbaik);
        $data['sk_kelakuanbaik'] = $this->M_surat_n1_n6->get_data($where, 'sk_kelakuanbaik')->result();
        $this->load->view('surat/cetak_sk_kelakuanbaik', $data);
    }
    
    function sk_usaha($id_surat_usaha)
    {
        $where = array('id_surat_usaha' => $id_surat_usaha);
        $data['sk_usaha'] = $this->M_surat_n1_n6->get_data($where, 'sk_usaha')->result();
        $this->load->view('surat/cetak_sk_usaha', $data);
    }

    function sk_tidakmampu($id_surat_tidakmampu)
    {
        $where = array('id_surat_tidakmampu' => $id_surat_tidakmampu);
        $data['sk_tidakmampu'] = $this->M_surat_n1_n6->get_data($where, 'sk_tidakmampu')->result();
        $this->load->view('surat/cetak_sk_tidakmampu', $data);
    
    }

    function sk_domisili($id_surat_domisili)
    {
        $where = array('id_surat_domisili' => $id_surat_domisili);
        $data['sk_domisili'] = $this->M_surat_n1_n6->get_data($where, 'sk_domisili')->result();
        $this->load->view('surat/cetak_sk_domisili', $data);
    }

    function sk_serba($id_surat_serba)
    {
        $where = array('id_surat_serba' => $id_surat_serba);
        $data['sk_serba'] = $this->M_surat_n1_n6->get_data($where, 'sk_serba')->result();
        $this->load->view('surat/cetak_sk_serba', $data);
    }
   
    function sk_kelahiran($id_surat_kelahiran)
    {
        $where = array('id_surat_kelahiran' => $id_surat_kelahiran);
        $data['sk_kelahiran'] = $this->M_surat_n1_n6->get_data($where, 'sk_kelahiran')->result();
        $this->load->view('surat/cetak_sk_kelahiran', $data);
    }

    function sk_kematian($id_surat_kematian)
    {
        $where = array('id_surat_kematian' => $id_surat_kematian);
        $data['sk_kematian'] = $this->M_surat_n1_n6->get_data($where, 'sk_kematian')->result();
        $this->load->view('surat/cetak_sk_kematian', $data);
    }

    function sk_pindah($id_surat_pindah)
    {
        $where = array('id_surat_pindah' => $id_surat_pindah);
        $data['sk_pindah'] = $this->M_surat_n1_n6->get_data($where, 'sk_pindah')->result();
        $this->load->view('surat/cetak_sk_pindah', $data);
    }

    
}
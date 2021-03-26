<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("M_surat_n1_n6");
        // $this->load->model('Usermodel');
    }

    function SK_belummenikah()
    {

        $data = [
            'title' => 'Surat Keterangan Belum Menikah',
            'sk_belummenikah' => $this->M_surat_n1_n6->get('sk_belummenikah')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_belummenikah', $data);
    }

    function SK_kelakuanbaik()
    {

        $data = [
            'title' => 'Surat Keterangan Kelakuan Baik',
            'sk_kelakuanbaik' => $this->M_surat_n1_n6->get('sk_kelakuanbaik')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_kelakuanbaik', $data);
    }

    function SK_usaha()
    {

        $data = [
            'title' => 'Surat Keterangan Kelakuan Baik',
            'sk_usaha' => $this->M_surat_n1_n6->get('sk_usaha')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_usaha', $data);
    }

    function SK_tidakmampu()
    {

        $data = [
            'title' => 'Surat Keterangan Tidak Mampu',
            'sk_tidakmampu' => $this->M_surat_n1_n6->get('sk_tidakmampu')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_tidakmampu', $data);
    }

    function SK_domisili()
    {

        $data = [
            'title' => 'Surat Keterangan Domisili',
            'sk_domisili' => $this->M_surat_n1_n6->get('sk_domisili')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_domisili', $data);
    }

    function SK_serba()
    {

        $data = [
            'title' => 'Surat Keterangan Serba Guna',
            'sk_serba' => $this->M_surat_n1_n6->get('sk_serba')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_serba', $data);
    }

    function SK_kelahiran()
    {

        $data = [
            'title' => 'Surat Kelahiran',
            'sk_kelahiran' => $this->M_surat_n1_n6->get('sk_kelahiran')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_kelahiran', $data);
    }

    function SK_kematian()
    {

        $data = [
            'title' => 'Surat Kematian',
            'sk_kematian' => $this->M_surat_n1_n6->get('sk_kematian')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_kematian', $data);
    }

    function SK_pindah()
    {

        $data = [
            'title' => 'Surat pindah',
            'sk_pindah' => $this->M_surat_n1_n6->get('sk_pindah')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_pindah', $data);
    }

    function pb_kkbaru()
    {

        $data = [
            'title' => 'Pembuatan Kartu Keluarga Baru',
            'pb_kkbaru' => $this->M_surat_n1_n6->get('pb_kkbaru')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/pb_kkbaru', $data);
    }

    function pb_kk()
    {

        $data = [
            'title' => 'Pembaruan Kartu Keluarga ',
            'pb_kk' => $this->M_surat_n1_n6->get('pb_kk')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/pb_kk', $data);
    }

    function pb_ktp()
    {

        $data = [
            'title' => 'Pembuatan KTP ',
            'pb_ktp' => $this->M_surat_n1_n6->get('pb_ktp')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/pb_ktp', $data);
    }

    function pb_akta()
    {

        $data = [
            'title' => 'Pembuatan Akta Lahir ',
            'pb_akta' => $this->M_surat_n1_n6->get('pb_akta')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/pb_akta', $data);
    }

    function pb_izin()
    {

        $data = [
            'title' => 'Pembuatan Perizinan ',
            'pb_izin' => $this->M_surat_n1_n6->get('pb_izin')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/pb_izin', $data);
    }

    function pb_migrasi()
    {

        $data = [
            'title' => 'Migrasi',
            'pb_migrasi' => $this->M_surat_n1_n6->get('pb_migrasi')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/pb_migrasi', $data);
    }
  
}
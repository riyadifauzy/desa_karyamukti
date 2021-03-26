<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_warga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_surat_n1_n6");
        $this->load->helper('date');
    }


    public function update_sk_belummenikah_terima($id_surat_belummenikah)
    {
        $where = array(
            'id_surat_belummenikah' => $id_surat_belummenikah
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_belummenikah');
        redirect('Surat/sk_belummenikah');
    }
    public function update_sk_belummenikah_tolak($id_surat_belummenikah)
    {
        $where = array(
            'id_surat_belummenikah' => $id_surat_belummenikah
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_belummenikah');
        redirect('Surat/SK_belummenikah');
    }

    public function update_sk_kelakuanbaik_terima($id_surat_kelakuanbaik)
    {
        $where = array(
            'id_surat_kelakuanbaik' => $id_surat_kelakuanbaik
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_kelakuanbaik');
        redirect('Surat/sk_kelakuanbaik');
    }
    public function update_sk_kelakuanbaik_tolak($id_surat_kelakuanbaik)
    {
        $where = array(
            'id_surat_kelakuanbaik' => $id_surat_kelakuanbaik
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_kelakuanbaik');
        redirect('Surat/SK_kelakuanbaik');
    }

    public function update_sk_usaha_terima($id_surat_usaha)
    {
        $where = array(
            'id_surat_usaha' => $id_surat_usaha
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_usaha');
        redirect('Surat/sk_usaha');
    }
    public function update_sk_usaha_tolak($id_surat_usaha)
    {
        $where = array(
            'id_surat_usaha' => $id_surat_usaha
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_usaha');
        redirect('Surat/SK_usaha');
    }

    public function update_sk_tidakmampu_terima($id_surat_tidakmampu)
    {
        $where = array(
            'id_surat_tidakmampu' => $id_surat_tidakmampu
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_tidakmampu');
        redirect('Surat/sk_tidakmampu');
    }
    public function update_sk_tidakmampu_tolak($id_surat_tidakmampu)
    {
        $where = array(
            'id_surat_tidakmampu' => $id_surat_tidakmampu
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_tidakmampu');
        redirect('Surat/SK_tidakmampu');
    }

    public function update_sk_domisili_terima($id_surat_domisili)
    {
        $where = array(
            'id_surat_domisili' => $id_surat_domisili
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_domisili');
        redirect('Surat/sk_domisili');
    }
    public function update_sk_domisili_tolak($id_surat_domisili)
    {
        $where = array(
            'id_surat_domisili' => $id_surat_domisili
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_domisili');
        redirect('Surat/SK_domisili');
    }

    public function update_sk_serba_terima($id_surat_serba)
    {
        $where = array(
            'id_surat_serba' => $id_surat_serba
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_serba');
        redirect('Surat/sk_serba');
    }
    public function update_sk_serba_tolak($id_surat_serba)
    {
        $where = array(
            'id_surat_serba' => $id_surat_serba
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_serba');
        redirect('Surat/SK_serba');
    }

    public function update_sk_kelahiran_terima($id_surat_kelahiran)
    {
        $where = array(
            'id_surat_kelahiran' => $id_surat_kelahiran
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_kelahiran');
        redirect('Surat/SK_kelahiran');
    }
    public function update_sk_kelahiran_tolak($id_surat_kelahiran)
    {
        $where = array(
            'id_surat_kelahiran' => $id_surat_kelahiran
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_kelahiran');
        redirect('Surat/SK_kelahiran');
    }

    public function update_sk_kematian_terima($id_surat_kematian)
    {
        $where = array(
            'id_surat_kematian' => $id_surat_kematian
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_kematian');
        redirect('Surat/SK_kematian');
    }
    public function update_sk_kematian_tolak($id_surat_kematian)
    {
        $where = array(
            'id_surat_kematian' => $id_surat_kematian
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_kematian');
        redirect('Surat/SK_kematian');
    }

    public function update_sk_pindah_terima($id_surat_pindah)
    {
        $where = array(
            'id_surat_pindah' => $id_surat_pindah
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_pindah');
        redirect('Surat/SK_pindah');
    }
    public function update_sk_pindah_tolak($id_surat_pindah)
    {
        $where = array(
            'id_surat_pindah' => $id_surat_pindah
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_pindah');
        redirect('Surat/SK_pindah');
    }

    public function update_kkbaru_terima($id_kkbaru)
    {
        $where = array(
            'id_kkbaru' => $id_kkbaru);
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_kkbaru');
        redirect('Surat/pb_kkbaru');
    }
    public function update_kkbaru_tolak($id_kkbaru)
    {
        $where = array(
            'id_kkbaru' => $id_kkbaru
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_kkbaru');
        redirect('Surat/pb_kkbaru');
    }
    public function update_kkbaru_detail($id_kkbaru)
    {
        $this->M_surat_n1_n6->get_data($data, 'pb_kkbaru');
        redirect('Lampiran/add_kkbaru_detail');
    }

    public function update_kk_terima($id_pbkk)
    {
        $where = array(
            'id_pbkk' => $id_pbkk);
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_kk');
        redirect('Surat/pb_kk');
    }
    public function update_kk_tolak($id_pbkk)
    {
        $where = array(
            'id_pbkk' => $id_pbkk
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_kk');
        redirect('Surat/pb_kk');
    }

    public function update_ktp_terima($id_pbktp)
    {
        $where = array(
            'id_pbktp' => $id_pbktp);
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_ktp');
        redirect('Surat/pb_ktp');
    }
    public function update_ktp_tolak($id_pbktp)
    {
        $where = array(
            'id_pbktp' => $id_pbktp
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_ktp');
        redirect('Surat/pb_ktp');
    }

    public function update_akta_terima($id_pbakta)
    {
        $where = array(
            'id_pbakta' => $id_pbakta);
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_akta');
        redirect('Surat/pb_akta');
    }
    public function update_akta_tolak($id_pbakta)
    {
        $where = array(
            'id_pbakta' => $id_pbakta
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_akta');
        redirect('Surat/pb_akta');
    }

    public function update_izin_terima($id_pbizin)
    {
        $where = array(
            'id_pbizin' => $id_pbizin);
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_izin');
        redirect('Surat/pb_izin');
    }
    public function update_izin_tolak($id_pbizin)
    {
        $where = array(
            'id_pbizin' => $id_pbizin
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_izin');
        redirect('Surat/pb_izin');
    }

    public function update_migrasi_terima($id_pbmigrasi)
    {
        $where = array(
            'id_pbmigrasi' => $id_pbmigrasi);
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_migrasi');
        redirect('Surat/pb_migrasi');
    }
    public function update_migrasi_tolak($id_pbmigrasi)
    {
        $where = array(
            'id_pbmigrasi' => $id_pbmigrasi
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'pb_migrasi');
        redirect('Surat/pb_migrasi');
    }
    public function aktivasi_akun($no_nik)
    {
        $where = array(
            'no_nik' => $no_nik
        );
        $data = array(
            'is_active' => 1,
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'user');
        redirect('administrator/aktivasi_akun');
    }
    public function tolak_akun($no_nik)
    {
        $where = array(
            'no_nik' => $no_nik
        );
        $data = array(
            'is_active' => 0,
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'user');
        redirect('administrator/aktivasi_akun');
    }
    public function hapus_akun($no_nik)
    {
        $where = array(
            'no_nik' => $no_nik
        );
        $this->M_surat_n1_n6->hapus_data($where, 'user');
        redirect('administrator/aktivasi_akun');
    }

}
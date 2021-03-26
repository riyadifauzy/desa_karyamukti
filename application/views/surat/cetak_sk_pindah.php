<?php
function getRomawi($bln)
{
    switch ($bln) {
        case 1:
            return "I";
            break;
        case 2:
            return "II";
            break;
        case 3:
            return "III";
            break;
        case 4:
            return "IV";
            break;
        case 5:
            return "V";
            break;
        case 6:
            return "VI";
            break;
        case 7:
            return "VII";
            break;
        case 8:
            return "VIII";
            break;
        case 9:
            return "IX";
            break;
        case 10:
            return "X";
            break;
        case 11:
            return "XI";
            break;
        case 11:
            return "XII";
            break;
    }
}

$this->load->library('pdf');
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetTitle('Cetak - Surat Keterangan Domisili');
$pdf->SetSubject('Surat Keterangan Domisili');
$pdf->SetMargins(15, 18, 15, 18);

//Kop surat

$pdf->SetFont('Times', 'B', 10);
$pdf->setY(10);
$pdf->setX(15);
$pdf->Cell(0, 6, 'PEMERINTAH PROVINSI JAWA BARAT', 0, 1, 'L');

$pdf->SetFont('Times', 'B', 10);
$pdf->setY(15);
$pdf->setX(15);
$pdf->Cell(0, 6, 'PEMERINTAH KABUPATEN GARUT', 0, 1, 'L');

$pdf->SetFont('Times', 'B', 10);
$pdf->setY(20);
$pdf->setX(15);
$pdf->Cell(0, 6, 'KECAMATAN', 0, 1, 'L');

$pdf->SetFont('Times', 'B', 10);
$pdf->setY(20);
$pdf->setX(50);
$pdf->Cell(0, 6, ': ', 0, 1, 'L');

$pdf->SetFont('Times', '', 10);
$pdf->setY(20);
$pdf->setX(60);
$pdf->Cell(0, 6, 'CIBATU ', 0, 1, 'L');
$pdf->SetFont('Times', '', 10);

$pdf->SetFont('Times', 'B', 10);
$pdf->setY(25);
$pdf->setX(15);
$pdf->Cell(0, 6, 'DESA/KELURAHAN', 0, 1, 'L');

$pdf->SetFont('Times', 'B', 10);
$pdf->setY(25);
$pdf->setX(50);
$pdf->Cell(0, 6, ': ', 0, 1, 'L');

$pdf->SetFont('Times', '', 10);
$pdf->setY(25);
$pdf->setX(60);
$pdf->Cell(0, 6, 'KARYAMUKTI', 0, 1, 'L');


// Awalan surat
$pdf->AddFont('Calbold', '', 'calbold.php');
$pdf->SetFont('Calbold', '', 14);
$pdf->setY(40);
$pdf->setX(22);
$pdf->Cell(0, 6, 'SURAT KETERANGAN PINDAH WNI', 0, 1, 'C');

$pdf->AddFont('Calreg', '', 'calreg.php');
$pdf->SetFont('Calreg', '', 11);
$pdf->setY(45);
$pdf->setX(22);
$pdf->Cell(0, 6, 'Antar Desa/Kelurahan Dalam Satu Kecamatan', 0, 1, 'C');

$pdf->SetFont('Calreg', '', 11);
$pdf->setY(50);
$pdf->setX(22);
$pdf->Cell(0, 6, 'Nomor  : 475/xxxx - xxx/xxxx', 0, 1, 'C');


// // Isi Tabel
foreach ($sk_pindah as $surat) {
    $pdf->SetFont('Calbold', '', 14);
    $pdf->setY(60);
    $pdf->setX(15);
    $pdf->Cell(0, 6, 'DAERAH ASAL', 0, 0, 'L');
    
    $pdf->setY(66);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '1. No. KK', 0, 0, 'L');
    
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(66);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(66);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6, $surat->no_kk, 0, 1, 'L');
    
    $pdf->setY(71);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '2. Nama Kepala Keluarga', 0, 0, 'L');
    
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(71);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(71);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6, $surat->nama_kk, 0, 1, 'L');
    
    $pdf->setY(76);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '3. Alamat', 0, 0, 'L');
    
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(76);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(76);
    $pdf->setX(70);
    $pdf->SetFont('Calbold', '', 11);
    $pdf->Cell(0, 6, $surat->alamat, 0, 1, 'L');
    
    $pdf->setY(82);
    $pdf->setX(70);
    $pdf->SetFont('Calbold', '', 11);
    $pdf->Cell(0, 6,'RT. ' . $surat->rt, 0, 1, 'L');
   
    $pdf->setY(82);
    $pdf->setX(85);
    $pdf->SetFont('Calbold', '', 11);
    $pdf->Cell(0, 6,'RW. ' . $surat->rw, 0, 1, 'L');
    
    $pdf->setY(88);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'a.Desa/Kelurahan', 0, 1, 'L');
    
    $pdf->setY(88);
    $pdf->setX(105);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,': ' . $surat->desa, 0, 1, 'L');
    
    $pdf->setY(88);
    $pdf->setX(140);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'b.Kecamatan', 0, 1, 'L');
    
    $pdf->setY(88);
    $pdf->setX(165);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,': ' . $surat->kecamatan, 0, 1, 'L');
    
    $pdf->setY(94);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'c.Kabupaten', 0, 1, 'L');
    
    $pdf->setY(94);
    $pdf->setX(105);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,': ' . $surat->kab_kota, 0, 1, 'L');
    
    $pdf->setY(94);
    $pdf->setX(140);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'d.Provinsi', 0, 1, 'L');
    
    $pdf->setY(94);
    $pdf->setX(165);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,': ' . $surat->provinsi, 0, 1, 'L');
    
    $pdf->setY(100);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'Kode Pos : ' . $surat->pos, 0, 1, 'L');


    $pdf->SetFont('Calbold', '', 14);
    $pdf->setY(110);
    $pdf->setX(15);
    $pdf->Cell(0, 6, 'DAERAH KEPINDAHAN', 0, 0, 'L');
    
    $pdf->setY(116);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '1. Alasan Pindah', 0, 0, 'L');
    
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(116);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(116);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(30, 6, $surat->alasan_pindah, 1, 1, 'L');
    
    $pdf->setY(116);
    $pdf->setX(105);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'1. Pekerjaan', 0, 1, 'L');
    
    $pdf->setY(116);
    $pdf->setX(132);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'3. Keamanan', 0, 1, 'L');
    
    $pdf->setY(116);
    $pdf->setX(158);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'5. Perumahan', 0, 1, 'L');
    
    $pdf->setY(121);
    $pdf->setX(105);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'2. Pendidikan', 0, 1, 'L');
    
    $pdf->setY(121);
    $pdf->setX(132);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'4. Kesehatan', 0, 1, 'L');
    
    $pdf->setY(121);
    $pdf->setX(158);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'6. Keluarga', 0, 1, 'L');

    $pdf->setY(126);
    $pdf->setX(105);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'7. Lainnya', 0, 1, 'L');

    $pdf->setY(126);
    $pdf->setX(132);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'......................', 0, 1, 'L');

    $pdf->setY(131);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '2. Alamat Tujuan', 0, 0, 'L');
    
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(131);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(131);
    $pdf->setX(70);
    $pdf->SetFont('Calbold', '', 11);
    $pdf->Cell(0, 6, $surat->alamat_tujuan, 0, 1, 'L');
    
    $pdf->setY(136);
    $pdf->setX(70);
    $pdf->SetFont('Calbold', '', 11);
    $pdf->Cell(0, 6,'RT. ' . $surat->rt_tujuan, 0, 1, 'L');
   
    $pdf->setY(136);
    $pdf->setX(85);
    $pdf->SetFont('Calbold', '', 11);
    $pdf->Cell(0, 6,'RW. ' . $surat->rw_tujuan, 0, 1, 'L');
    
    $pdf->setY(141);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'a.Desa/Kelurahan', 0, 1, 'L');
    
    $pdf->setY(141);
    $pdf->setX(105);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,': ' . $surat->desa_tujuan, 0, 1, 'L');
    
    $pdf->setY(141);
    $pdf->setX(140);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'b.Kecamatan', 0, 1, 'L');
    
    $pdf->setY(141);
    $pdf->setX(165);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,': ' . $surat->kecamatan_tujuan, 0, 1, 'L');
    
    $pdf->setY(146);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'c.Kabupaten', 0, 1, 'L');
    
    $pdf->setY(146);
    $pdf->setX(105);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,': ' . $surat->kab_kota_tujuan, 0, 1, 'L');
    
    $pdf->setY(146);
    $pdf->setX(140);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'d.Provinsi', 0, 1, 'L');
    
    $pdf->setY(146);
    $pdf->setX(165);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,': ' . $surat->provinsi_tujuan, 0, 1, 'L');
    
    $pdf->setY(151);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'Kode Pos : ' . $surat->pos_tujuan, 0, 1, 'L');

    $pdf->setY(158);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '3. Jenis Kepindahan', 0, 0, 'L');
    
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(158);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(158);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(50, 6, $surat->jenis_pindah, 1, 1, 'L');
    
    $pdf->setY(157);
    $pdf->setX(120);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'1. Kepala Keluarga', 0, 1, 'L');
    
    $pdf->setY(157);
    $pdf->setX(155);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'2. Kepala & Seluruh Anggota', 0, 1, 'L');
    
    $pdf->setY(162);
    $pdf->setX(120);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'3. Kepala & Sebagian ', 0, 1, 'L');
    
    $pdf->setY(162);
    $pdf->setX(155);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'4. Anggota Keluarga', 0, 1, 'L');
    
    $pdf->setY(168);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '4. Status KK bagi yang ', 0, 0, 'L');
   
    $pdf->setY(173);
    $pdf->setX(23);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, ' tidak pindah', 0, 0, 'L');
    
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(168);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(168);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(50, 6, $surat->status_kk_tpindah, 1, 1, 'L');

    $pdf->setY(168);
    $pdf->setX(120);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'1. Tetap', 0, 1, 'L');
    
    $pdf->setY(168);
    $pdf->setX(155);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'2. KK Baru', 0, 1, 'L');
    
    $pdf->setY(178);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '5. Status KK bagi yang pindah', 0, 0, 'L');
   
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(178);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(178);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(50, 6, $surat->status_kk_pindah, 1, 1, 'L');

    $pdf->setY(178);
    $pdf->setX(120);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'1. Numpang KK', 0, 1, 'L');
    
    $pdf->setY(178);
    $pdf->setX(155);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6,'2. Membuat KK Baru', 0, 1, 'L');

    $pdf->setY(184);
    $pdf->setX(20);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell('0', 6, '6. Keluarga yang pindah', 0, 0, 'L');
   
    $pdf->SetFont('Calreg', '', 11);
    $pdf->setY(184);
    $pdf->setX(66);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
   
    $pdf->setY(184);
    $pdf->setX(70);
    $pdf->SetFont('Calreg', '', 11);
    $pdf->Cell(0, 6, $surat->kel_pindah, 0, 1, 'L');

    
    //titimangsa
    $pdf->SetFont('Times', '', 11);
    $pdf->ln();
    $pdf->setY(220);
    $pdf->setX(138);
    $pdf->Cell(20, 5, 'Garut, ' . tgl_indo($surat->tgl_ajukan_surat), 0, 0);

    $pdf->setY(227);
    $pdf->setX(139);
    $pdf->Cell(20, 5, "Dikeluarkan oleh :", 0, 0);
    
    $pdf->setY(232);
    $pdf->setX(128);
    $pdf->Cell(20, 5, "a.n Kepala Dinas Kependudukan", 0, 0);
    
    $pdf->setY(237);
    $pdf->setX(137);
    $pdf->Cell(20, 5, "dan Pencatatan Sipil", 0, 0);
    
    $pdf->setY(242);
    $pdf->setX(130);
    $pdf->Cell(20, 5, "Kepala Desa KARYAMUKTI", 0, 0);

    $pdf->SetFont('Times', 'BU', 11);
    $pdf->setY(262);
    $pdf->setX(130);
    $pdf->Cell(20, 5, "_________________________", 0, 0);
    
    $pdf->setY(242);
    $pdf->setX(40);
    $pdf->Cell(20, 5, "Pemohon,", 0, 0);

    $pdf->SetFont('Times', 'B', 11);
    $pdf->setY(262);
    $pdf->setX(35);
    $pdf->Cell(20, 5,$surat->nama, 0, 0);

    }

$pdf->Output();
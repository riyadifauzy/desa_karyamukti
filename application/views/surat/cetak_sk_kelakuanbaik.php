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
        case 12:
            return "XII";
            break;
    }
}

$this->load->library('pdf');
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetTitle('Cetak - Surat Keterangan Kelakuan Baik');
$pdf->SetSubject('Surat Keterangan Kelakuan Baik');
$pdf->SetMargins(15, 18, 15, 18);

//Kop surat
$pdf->Image('asset/logo.png', 10, 8, 25, 25);
$pdf->SetFont('Times', 'B', 14);
$pdf->setY(10);
$pdf->setX(40);
$pdf->Cell(0, 6, 'PEMERINTAH KABUPATEN GARUT', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 14);
$pdf->setY(17);
$pdf->setX(40);
$pdf->Cell(0, 6, 'KECAMATAN CIBATU', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 24);
$pdf->setY(24);
$pdf->setX(40);
$pdf->Cell(0, 6, 'DESA KARYAMUKTI', 0, 1, 'C');
$pdf->SetFont('Times', '', 14);
$pdf->setY(31);
$pdf->setX(40);
$pdf->Cell(0, 6, 'Jln. Cibatu-Bandrek KM. 03 TELP. 087 827 404 441 - Cibatu 44185', 0, 3, 'C');
$pdf->SetLineWidth(1);
$pdf->Line(10, 38, 200, 38);
$pdf->ln(10);

//Awalan surat
$pdf->AddFont('Calbold', '', 'calbold.php');
$pdf->SetFont('Calbold', 'U', 14);
$pdf->setY(40);
$pdf->setX(22);
$pdf->Cell(0, 6, 'SURAT PENGANTAR CATATAN KEPOLISIAN', 0, 1, 'C');
$pdf->AddFont('Calreg', '', 'calreg.php');
$pdf->SetFont('Calreg', '', 12);
$pdf->setY(45);
$pdf->setX(22);
$pdf->Cell(0, 6, 'Nomor  : xxx/xxxx - xxx/xxxx', 0, 1, 'C');
$pdf->SetFont('Calreg', '', 12);
$pdf->setY(55);
$pdf->setX(30);
$pdf->Cell(0, 6, 'Yang  bertanda  tangan  dibawah  ini  Kepala  Desa  KARYAMUKTI   Kecamatan   CIBATU', 0, 1, 'L');
$pdf->setY(63);
$pdf->setX(9);
$pdf->SetFont('Calreg', '', 12);
$pdf->Cell('0', 6, 'Kabupaten GARUT, menerangkan dengan sebernarnya bahwa :', 0, 1, 'L');
$pdf->ln(8);

// // Isi Tabel
foreach ($sk_kelakuanbaik as $surat) {
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(73);
    $pdf->setX(30);
    $pdf->Cell(0, 6, 'Nama', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(73);
    $pdf->setX(80);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(73);
    $pdf->setX(84);
    $pdf->SetFont('Calbold', '', 12);
    $pdf->Cell(250, 6, $surat->nama, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(81);
    $pdf->setX(30);
    $pdf->Cell(0, 6, 'Nomor Induk Kependudukan', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(81);
    $pdf->setX(80);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(81);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->no_nik, 0, 1, 'L');

    $pdf->setY(89);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Nomor Kartu Keluarga', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(89);
    $pdf->setX(80);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(89);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->no_kk, 0, 1, 'L');
    
    $pdf->setY(97);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Tempat, Tanggal Lahir', 0, 0, 'L');
    $pdf->setY(97);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(97);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->tempat_lahir . ', ' . $surat->tanggal_lahir, 0, 1, 'L');

    $pdf->setY(105);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Jenis Kelamin', 0, 0, 'L');
    $pdf->setY(105);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(105);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->jenis_kelamin, 0, 1, 'L');
    
    $pdf->setY(113);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Agama', 0, 0, 'L');
    $pdf->setY(113);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(113);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->agama, 0, 1, 'L');
    
    $pdf->setY(121);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Pendidikan', 0, 0, 'L');
    $pdf->setY(121);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(121);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->pendidikan, 0, 1, 'L');
    
    $pdf->setY(129);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Pekerjaan', 0, 0, 'L');
    $pdf->setY(129);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(129);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->pekerjaan, 0, 1, 'L');
    
    $pdf->setY(137);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Status Perkawinan', 0, 0, 'L');
    $pdf->setY(137);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(137);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->status_perkawinan, 0, 1, 'L');
    
    $pdf->setY(145);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Nama Orang Tua', 0, 0, 'L');
    $pdf->setY(145);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(145);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->nama_ortu, 0, 1, 'L');

    $pdf->setY(153);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Alamat', 0, 0, 'L');
    $pdf->setY(153);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ' :', 0, 0, 'L');
    $pdf->setY(153);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
   
    $pdf->setY(153);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->alamat , 0, 1, 'L');
    
    $pdf->setY(153);
    $pdf->setX(140);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6,'RT ' . $surat->RT, 0, 1, 'L');
    
    $pdf->setY(153);
    $pdf->setX(150);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6,'RW ' . $surat->RW, 0, 1, 'L');
    
    $pdf->setY(161);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(247, 6, 'Desa ' . $surat->desa , 0, 1, 'L');
    $pdf->ln(10);
    
    $pdf->setY(161);
    $pdf->setX(140);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(247, 6, 'Kecamatan ' . $surat->kecamatan, 0, 1, 'L');
    $pdf->ln(10);
    
    $pdf->setY(169);
    $pdf->setX(84);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(247, 6, 'Kabupaten ' . $surat->kab_kota , 0, 1, 'L');
    $pdf->ln(10);
    
    $pdf->setY(169);
    $pdf->setX(140);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(247, 6, 'Provinsi ' . $surat->provinsi, 0, 1, 'L');
    $pdf->ln(10);

    //penutup
    $pdf->setY(176);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Berdasarkan keterangan RT/RW setempat dan sepengetahuan kami selama jadi warga Desa', 0, 1, 'L');
    $pdf->setY(182);
    $pdf->setX(9);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'KARYAMUKTI yang bersangkutan :', 0, 1, 'L');
    // $pdf->setY(188);
    // $pdf->setX(9);
    // $pdf->SetFont('Calreg', '', 12);
    // $pdf->Cell(0, 6, 'dsads.', 0, 1, 'L');

    $pdf->setY(189);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, '1. Mempunyai sikap dan perilaku yang baik', 0, 0, 'L');
    // $pdf->setY(188);
    // $pdf->SetX(166);
    // $pdf->SetFont('Calbold', '', 12);
    // $pdf->Cell(0, 6, $surat->keperluan , 0, 1, 'L');
    $pdf->setY(196);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, '2. Tidak pernah terlibat dalam kegiatan yang menentang Pancasila dan UUD 1945', 0, 1, 'L');

    $pdf->setY(204);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, '3. Tidak pernah melakukan tindakan yang melanggar hukum baik pidana maupun perdata', 0, 1, 'L');
    $pdf->setY(212);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, '4. TIdak pernah terlibat narkoba', 0, 1, 'L');
    $pdf->ln(30);
    
    $pdf->setY(220);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Surat Keterangan ini dipergunakan untuk : ' , 0, 1, 'L');
    $pdf->setY(220);
    $pdf->setX(105);
    $pdf->SetFont('Calbold', '', 12);
    $pdf->Cell(0, 6,$surat->keperluan , 0, 1, 'L');
    $pdf->setY(228);
    $pdf->setX(9);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Demikian keterangan ini,untuk dipergunakan sebagaimana mestinya.', 0, 1, 'L');
    $pdf->ln(30);

    //titimangsa
    $pdf->SetFont('Times', '', 12);
    $pdf->ln();
    $pdf->setY(238);
    $pdf->setX(125);
    $pdf->Cell(20, 5, 'Garut, ' . tgl_indo($surat->tgl_ajukan_surat), 0, 0);

    $pdf->setY(243);
    $pdf->setX(125);
    $pdf->Cell(20, 5, "Kepala Desa KARYAMUKTI", 0, 0);

    $pdf->SetFont('Times', 'BU', 12);
    $pdf->setY(266);
    $pdf->setX(125);
    $pdf->Cell(20, 5, "WAKWAKW, S.KP.", 0, 0);

    $pdf->SetFont('Times', '', 12);
    $pdf->setY(271);
    $pdf->setX(125);
    $pdf->Cell(20, 5, 'NIP. 6969696969', 0, 0);

    //CAMAT
    $pdf->SetFont('Times', '', 11);
    $pdf->setY(243);
    $pdf->setX(40);
    $pdf->Cell(20, 5, "Mengetahui :", 0, 0);
    
    $pdf->SetFont('Times', '', 11);
    $pdf->setY(248);
    $pdf->setX(30);
    $pdf->Cell(20, 5, "Reg.No :............................. ", 0, 0);
    
    $pdf->SetFont('Times', '', 11);
    $pdf->setY(253);
    $pdf->setX(40);
    $pdf->Cell(20, 5, "CAMAT CIBATU ", 0, 0);
   
    $pdf->SetFont('Times', '', 11);
    $pdf->setY(271);
    $pdf->setX(30);
    $pdf->Cell(20, 5, "NIP : ", 0, 0);
}

$pdf->Output();
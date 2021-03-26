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
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetTitle('Cetak - Surat Kematian');
$pdf->SetSubject('Surat Kematian');
$pdf->SetMargins(15, 18, 15, 18);

//Kop surat
$pdf->SetFont('Times', 'I', 11);
$pdf->setY(19);
$pdf->setX(80);
$pdf->Cell(0, 6, 'Untuk Keluarga', 0, 1, '');


//Awalan surat
$pdf->setX(0);
$pdf->setY(25);
$pdf->Cell(92, 164,'', 1, 1, '');

$pdf->AddFont('Calbold', '', 'calbold.php');
$pdf->SetFont('Calbold', '', 17);
$pdf->setY(27);
$pdf->setX(37);
$pdf->Cell(0, 6, 'SURAT KEMATIAN', 0, 1, '');
$pdf->AddFont('Calreg', '', 'calreg.php');
$pdf->SetFont('Calreg', '', 12);
$pdf->setY(31);
$pdf->setX(39);
$pdf->Cell(0, 6, 'Nomor  : 474.3/xxx/Desa', 0, 1, '');
$pdf->SetFont('Calreg', '', 12);
$pdf->setY(41);
$pdf->setX(30);
$pdf->Cell(0, 6, 'Yang      bertandatangan    dibawah        ini,', 0, 1, 'L');
$pdf->setY(46);
$pdf->setX(18);
$pdf->SetFont('Calreg', '', 12);
$pdf->Cell('0', 6, 'menerangkan bahwa pada :', 0, 1, 'L');
$pdf->ln(8);

// // Isi Tabel
foreach ($sk_kematian as $surat) {
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(52);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Hari', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(52);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(52);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->hari_wafat, 0, 1, 'L');
      
    $pdf->setY(57);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Tanggal', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(57);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(57);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->tanggal_wafat, 0, 1, 'L');
    
    $pdf->setY(62);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Pukul', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(62);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(62);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->waktu_wafat, 0, 1, 'L');
    
    $pdf->setY(68);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Tempat', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(68);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(68);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->tempat_wafat, 0, 1, 'L');
    
    $pdf->setY(75);
    $pdf->setX(30);
    $pdf->SetFont('Calbold', '', 12);
    $pdf->Cell(250, 6, 'Telah Meninggal Dunia yang bernama :', 0, 1, 'L');
    
    $pdf->setY(82);
    $pdf->setX(55);
    $pdf->SetFont('Calbold', '', 14);
    $pdf->Cell(250, 6,$surat->nama_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(89);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'NIK', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(89);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(89);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->no_nik_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(94);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Nomor KK', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(94);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(94);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->no_kk_wafat, 0, 1, 'L');
   
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(98);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Jenis Kel', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(98);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(98);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->jenis_kelamin_wafat, 0, 1, 'L');
   
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(103);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Tgl Lahir', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(103);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(103);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->tgl_lahir_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(108);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Agama', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(108);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(108);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->agama_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(113);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Alamat', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(113);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(113);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->alamat_wafat, 0, 1, 'L');
    
    $pdf->setY(118);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, 'RT : ' . $surat->rt_wafat, 0, 1, 'L');
    
    $pdf->setY(118);
    $pdf->setX(60);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, 'RW : ' . $surat->rw_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(123);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Desa/Kel', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(123);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(123);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->desa_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(128);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Kecamatan', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(128);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(128);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->kecamatan_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(133);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Kabupaten', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(133);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(133);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->kab_kota_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(138);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Provinsi', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(138);
    $pdf->setX(37);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(138);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->provinsi_wafat, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(145);
    $pdf->setX(30);
    $pdf->Cell(0, 6, 'Surat  keterangan  ini  dibuat   atas ', 0, 1, 'L');
    $pdf->setY(150);
    $pdf->setX(18);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'dasar yang sebernarnya.', 0, 1, 'L');


    //titimangsa
    $pdf->SetFont('Times', '', 12);
    $pdf->ln();
    $pdf->setY(161);
    $pdf->setX(43);
    $pdf->Cell(20, 5, 'Garut, ' . tgl_indo($surat->tgl_ajukan_surat), 0, 0);

    $pdf->setY(165);
    $pdf->setX(35);
    $pdf->Cell(20, 5, "Kepala Desa KARYAMUKTI", 0, 0);

    $pdf->SetFont('Times', '', 12);
    $pdf->setY(180);
    $pdf->setX(35);
    $pdf->Cell(20, 5, "________________________", 0, 0);

    }

    $pdf->Output();
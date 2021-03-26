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
// $pdf = new FPDF('P','mm',array(95,205));
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetTitle('Cetak - Surat Kelahiran');
$pdf->SetSubject('Surat Kelahiran');
$pdf->SetMargins(15, 18, 15, 18);

//Kop surat
$pdf->SetFont('Times', 'B', 14);
$pdf->setY(10);
$pdf->setX(20);
$pdf->Cell(0, 0, 'PEMERINTAH KABUPATEN GARUT', 0, 1, '');
$pdf->SetFont('Times', 'B', 14);
$pdf->setY(15);
$pdf->setX(35);
$pdf->Cell(0, 6, 'KECAMATAN CIBATU', 0, 1, '');
$pdf->SetFont('Times', 'B', 24);

//Awalan surat
$pdf->setX(0);
$pdf->setY(25);
$pdf->Cell(100, 164,'', 1, 1, '');

$pdf->AddFont('Calbold', '', 'calbold.php');
$pdf->SetFont('Calbold', 'U', 14);
$pdf->setY(27);
$pdf->setX(45);
$pdf->Cell(0, 6, 'SURAT KELAHIRAN', 0, 1, '');
$pdf->AddFont('Calreg', '', 'calreg.php');
$pdf->SetFont('Calreg', '', 12);
$pdf->setY(32);
$pdf->setX(42);
$pdf->Cell(0, 6, 'Nomor  : 474.1/xxx/Desa', 0, 1, '');
$pdf->SetFont('Calbold', '', 12);
$pdf->setY(39);
$pdf->setX(41);
$pdf->Cell(48, 6, 'Untuk Yang Bersangkutan', 1, 1, 'L');
$pdf->SetFont('Calreg', '', 12);
$pdf->setY(46);
$pdf->setX(30);
$pdf->Cell(0, 6, 'Yang   bertandatangan    dibawah    ini,', 0, 1, 'L');
$pdf->setY(51);
$pdf->setX(18);
$pdf->SetFont('Calreg', '', 12);
$pdf->Cell('0', 6, 'Menerangkan bahwa pada :', 0, 1, 'L');
$pdf->ln(8);

// // Isi Tabel
foreach ($sk_kelahiran as $surat) {
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(58);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Hari', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(58);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(58);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->hari_lahir . ',', 0, 1, 'L');
    $pdf->setY(58);
    $pdf->setX(56);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, 'Pukul ' . $surat->waktu_lahir, 0, 1, 'L');
    
    $pdf->setY(62);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Tanggal', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(62);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(62);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->tanggal_lahir_anak, 0, 1, 'L');
    
    $pdf->setY(66);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Di', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(66);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(66);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->tempat_lahir_anak, 0, 1, 'L');
    
    $pdf->setY(74);
    $pdf->setX(18);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Telah lahir seorang anak :', 0, 1, 'L');
    $pdf->setY(74);
    $pdf->setX(65);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, $surat->jenis_kelamin_anak, 0, 1, 'L');
    
    $pdf->setY(80);
    $pdf->setX(18);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6,'Bernama :', 0, 1, 'L');
    $pdf->setY(84);
    $pdf->setX(18);
    $pdf->SetFont('Calbold', '', 12);
    $pdf->Cell('0',6,$surat->nama_anak, 0, 1, 'L');
    $pdf->setY(88);
    $pdf->setX(18);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6,'Dengan berat ' . $surat->berat_anak . ' Kg Panjang ' . $surat->panjang_anak . ' Cm' , 0, 1, 'L');
    $pdf->setY(92);
    $pdf->setX(18);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6,'Anak ke - ' . $surat->anak_ke, 0, 1, 'L');
    $pdf->setY(96);
    $pdf->setX(18);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6,'Dari seorang ibu bernama :', 0, 1, 'L');
    $pdf->setY(100);
    $pdf->setX(18);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6,$surat->nama_ibu, 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(104);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Umur', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(104);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(104);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->umur_ibu . ' Tahun', 0, 1, 'L');
    
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(108);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Agama', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(108);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(108);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->agama, 0, 1, 'L');
  
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(112);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Istri dari', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(112);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(112);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->nama_ayah, 0, 1, 'L');
  
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(120);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Umur', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(120);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(120);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->umur_ayah, 0, 1, 'L');
  
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(124);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Agama', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(124);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(124);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->agama, 0, 1, 'L');
  
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(128);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'Alamat', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(128);
    $pdf->setX(35);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(128);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(250, 6, $surat->alamat . ' RT ' . $surat->rt . ' RW ' . $surat->rw, 0, 1, 'L');
    $pdf->setY(132);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(247, 6, 'Kel. ' . $surat->desa . ' Kec. ' . $surat->kecamatan , 0, 1, 'L');
    
    $pdf->setY(136);
    $pdf->setX(40);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(247, 6, 'Kab. ' . $surat->kab_kota, 0, 1, 'L');
    
    $pdf->setY(144);
    $pdf->setX(30);
    $pdf->Cell(0, 6, 'Surat keterangan ini dibuat atas dasar yang', 0, 1, 'L'); 
    $pdf->setY(148);
    $pdf->setX(18);
    $pdf->Cell(0, 6, 'sebenarnya.', 0, 1, 'L');
    
    //titimangsa
    $pdf->SetFont('Times', '', 12);
    $pdf->ln();
    $pdf->setY(152);
    $pdf->setX(70);
    $pdf->Cell(20, 5, 'Garut, ' . tgl_indo($surat->tgl_ajukan_surat), 0, 0);

    $pdf->setY(156);
    $pdf->setX(55);
    $pdf->Cell(20, 5, "a.n Kepala Desa KARYAMUKTI", 0, 0);
    
    $pdf->setY(160);
    $pdf->setX(72);
    $pdf->Cell(20, 5, "Sekretaris Desa", 0, 0);

    $pdf->SetFont('Times', 'B', 12);
    $pdf->setY(180);
    $pdf->setX(62);
    $pdf->Cell(20, 5, "MAMAT RAHMAT. S.Pd", 0, 0);

    }

$pdf->Output();
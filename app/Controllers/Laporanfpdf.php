<?php

namespace App\Controllers;
use App\ThirdParty\FPDF\fpdf;

class Laporanfpdf extends BaseController {
    function __construct(){
        //parent::__construct();
        //$this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
	function index()
	{
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR PEGAWAI AYONGODING.COM',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(90,6,'Nama Pegawai',1,0,'C');
        $pdf->Cell(120,6,'Alamat',1,0,'C');
        $pdf->Cell(40,6,'Telp',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $no=0;
        for($i=0;$i<5;$i++){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(90,6,'nama',1,0);
            $pdf->Cell(120,6,'alamat',1,0);
            $pdf->Cell(40,6,'telp',1,1);
        }
		$this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output();
	}
}
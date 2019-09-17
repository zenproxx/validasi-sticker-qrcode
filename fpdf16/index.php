<?php 
require "pdf.php";
$db =  new PDO(mysql:host=localhost dbname=qrvalidasi','root','');

class myPDF extends FPDF{
	function header(){
		$this->Image('image/logo.png',10,6,L');
		$this->SetFont('Arial','B','14');
		$this->Cell(276,5,'PT.PERKEBUNAN NUSANTRA IV',0,0,C');	
		$this->ln();
		$this->SetFont('Arial','B','20');
		$this->Cell(276,40,'NO IDENTIFIKASI ANGKUTAN TBS',0,0'C');
		$this->ln(40);
	}
	function headerTable(){
		$this->Image('image/logo_qrcode.png',10,6,L');
		$this->setfont('Arial','B',12)
		$this->Cell(20,10,'Inisial Nama Kebun',1,0,'C');
		$this->Cell(20,10,'No Urut Angkutan',1,0,'C');
		$this->Cell(60,10,'Afdeling',1,0,'C');
		$this->Cell(40,10,'Masa Berlaku',1,0,'C');
		$this->Cell(40,10,'No Polisi',1,0,'C');
		$this->Cell(20,10,'No Distrik',1,0,'C');
		$this->ln();
	}
	funtion viewTable($db){
		$this->setfont('Arial','',12);
		$stnt = $db->query('select * from data_mahasiswa');
		while($data = $stmt->fetch(PDO::FECTH_OBJ)){
		
	$this->setfont('Arial','B',12)
		$this->Cell(20,10,$data->npm,1,0,'L');
		$this->Cell(20,10,$data->nama_mhs,1,0,'L');
		$this->Cell(60,10,$data->prodi,1,0,'L');
		$this->Cell(40,10,$data->tgl_lulus,1,0,'L');
		$this->Cell(40,10,$data->no_ijazah,1,0,'L');
		$this->Cell(20,10,$data->ipk,1,0,'L');
		$this->ln();
		}
	}		
}
$pdf = new mypdf();
$pdf->AliasNBPages();
$pdf->addPage('L','A4',0);
$pdf->headerTable
$pdf->viewTable($db)
$pdf->output();

}
		
	?>
<?php
require('fpdf181/fpdf.php');


    class PDF extends FPDF{
    	function Header(){

    		$this->SetFont('Arial','B',15);
    		$this->Cell(30);
    		$this->Cell(120,10,' Reportes de pedidos ',0,0,'C');
    		$this->Ln(20);

    	}
    	function Footer(){
    		$this->SetY(-15);
    		$this->SetFont('Arial','I', 8);
    		$this->Cell(0,10, 'pagina nro:'.$this->PageNo().'/{nb}',0,0,'C' );
    	}
    }

	$pdf=new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(200,200,200);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,6,'Tienda',1,0,'R',1);
	$pdf->Cell(50,6,'Producto',1,0,'C',1);
	$pdf->Cell(50,6,'fk tienda',1,1,'L',1);

	$pdf->SetFont('Arial','',10);

	
		$pdf->Cell(50,6,'$row[""]',1,0,'C',1);
		$pdf->Cell(50,6,'$row["ewq"]',1,1,'C',1);
		$pdf->Cell(50,6,'$row["uio"]',1,1,'C',1);

	$pdf->output();


?>
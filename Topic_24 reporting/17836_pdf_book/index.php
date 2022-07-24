<?php
$con=mysqli_connect('localhost','root',"",'dummy_data');
$result=mysqli_query($con,"SELECT * FROM book");
$result1=mysqli_query($con,"SELECT * FROM book");
require_once 'fpdf/fpdf.php';
class useHF extends FPDF{
	function Header(){
	$this->aliasnbpages('{nb}');
	$this->SetDrawColor(123,12,21);
	}
	function Footer(){
		$this->setY(-15);
		$this ->setFont('Arial',"",10);
		$this->cell(140,10,'Page No. '.$this->pageno()." Out of {nb}",0,0);
		$this->cell(19,10,'Writer:Zammer Ali ','',1,'C');
	}
}
if($result->num_rows){



	$pdf = new useHF();

	$pdf->AddPage("P","A4");
   
    $pdf->setfont('Arial','B',33);
    $pdf->Ln(10);
    $pdf->cell(190,12,'Phython Book','',1,'C');
	
    $pdf->Ln(10);
    $pdf->Image("001.jpg",10,60,190,150,);
	$pdf->setfont('Arial','B',28);
   
    $pdf->cell(190,12,'Writer:Zammer Ali ','',1,'C');


	$pdf ->setFont('Arial',"",30);
	$pdf ->addpage();
	$pdf->Cell(190,12,"Index",1,1,"C");	
	$pdf ->Ln(10);
	$pdf ->setFont('Arial',"",20);
	
	$links=[];

	while($data=mysqli_fetch_assoc($result)){
		$pdf->AddLink();
		extract($links);
		$l=$data['ch_no'];
		settype($l,"integer");
		$pdf->Cell(30,15,$data['ch_no']." ".$data['ch_name'],0,1,'',false,$l);
	}

	$pdf ->setFont('times',"",18);
		while($data1=mysqli_fetch_assoc($result1)){
			$pdf->AddPage();
			$l=$data1['ch_no'];
			settype($l,"integer");
			$pdf->SetLink($l);
			$pdf->Cell(190,12,"Chapter NO:".$data1['ch_no']." ".$data1['ch_name'],1,1,"C");	
			$pdf->MultiCell(190,10,$data1['chapter_des'],1);
		}
	$pdf->SetLink(10);

	

	
	$pdf->output();

}else{
	echo "book no available";
}



?>
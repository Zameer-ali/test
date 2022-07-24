<?php

require_once 'fpdf/fpdf.php';
$fpdf = new FPDF();
    $fpdf->addpage('A4');
    $fpdf->setfont('Arial','B', 20);
	$fpdf->Image('images/IMG_20190803_140919_380-1.jpg',0,0,80,80);
	$fpdf->setXY(100,0);
    
	$fpdf->cell(50,20,'Name:',0,0,"L");
	$fpdf->cell(100,20,'Zameer Ali Tunio',0,1,"L");

	$fpdf->setXY(100,20);
	$fpdf->cell(50,20,'Phone:',0,0,"L");
	$fpdf->cell(100,20,'03087980557',0,2,"L");

	$fpdf->setXY(100,40);
	$fpdf->cell(50,20,'Email:',0,0,"L");
	$fpdf->cell(100,20,'zameeralitunio@gmail.com',0,2,"L");

	$fpdf->setXY(100,60);
	$fpdf->cell(50,20,'Address:',0,0,"L");
	$fpdf->cell(100,20,'P/O and District Jamshoro',0,1,"L");

    $fpdf->ln(10);
	$fpdf->cell(20,10,'Summary:',0,1,"L");
    $fpdf->setfont('Arial','', 20);
    $fpdf->write(10,'"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires."');

    $fpdf->ln(20);
    $fpdf->setfont('Arial','b', 20);
	$fpdf->cell(20,10,'Education:',0,3,"L");
	$fpdf->setXY(50,20);
    $fpdf->setfont('Arial','', 20);
    $fpdf->cell(50,20,'University:',0,0,"L");
	$fpdf->cell(100,20,'Univeristy of Sindh',0,0,"L");
	$fpdf->cell(100,20,'CGP: 3.7',0,1,"L");

	$fpdf->setXY(50,30);
    $fpdf->cell(50,20,'Intermediate:',0,0,"L");
	$fpdf->cell(100,20,'Govt: Degree College N/F',0,0,"L");
	$fpdf->cell(100,20,'DIVION: "A"',0,1,"L");
	
    $fpdf->setXY(50,40);
    $fpdf->cell(50,20,'Matriculation:',0,0,"L");
	$fpdf->cell(100,20,'Govt Boys High Scholl N/F',0,0,"L");
	$fpdf->cell(100,20,'DIVION: "A"',0,1,"L");
   
    $fpdf->ln(20);
    $fpdf->setfont('Arial','b', 20);
	$fpdf->cell(20,10,'Certifications:',0,3,"L");
	$fpdf->setXY(50,90);
    $fpdf->setfont('Arial','', 20);
    $fpdf->cell(70,20,'PHP_Basic:',0,0,"L");
	$fpdf->cell(80,20,'Hidaya Trust',0,0,"L");
	$fpdf->cell(80,20,'31/05/2022',0,1,"L");

	$fpdf->setXY(50,100);
    $fpdf->cell(70,20,'Web Development:',0,0,"L");
	$fpdf->cell(80,20,'Coursera',0,0,"L");
	$fpdf->cell(80,20,'3/01/2022',0,1,"L");
	
    $fpdf->setXY(50,110);
$fpdf->cell(70,20,'Front End:',0,0,"L");
	$fpdf->cell(80,20,'Ednotec',0,0,"L");
	$fpdf->cell(80,20,'3/01/2022',0,1,"L");
    $fpdf->setXY(50,120);
$fpdf->cell(70,20,'Mobile Developmetn:',0,0,"L");
	$fpdf->cell(80,20,'FutureLearn',0,0,"L");
	$fpdf->cell(80,20,'3/01/2022',0,1,"L");


    $fpdf->ln(30);
    $fpdf->setfont('Arial','b', 20);
	$fpdf->cell(20,10,'Skills:',0,3,"L");
    $fpdf->setfont('Arial','', 20);
	$fpdf->setXY(50,170);
    $fpdf->cell(70,20,'PHP:',0,0,"L");
	$fpdf->cell(80,20,'Good',0,0,"L");
	
    $fpdf->setXY(50,20);
    $fpdf->cell(70,20,'React.Js:',0,0,"L");
	$fpdf->cell(80,20,'Average',0,0,"L");
    
    $fpdf->setXY(50,30);
    $fpdf->cell(70,20,'Laravel:',0,0,"L");
	$fpdf->cell(80,20,'Basic',0,0,"L");
    
    $fpdf->setXY(50,40);
    $fpdf->cell(70,20,'React Native:',0,0,"L");
	$fpdf->cell(80,20,'Intermediate',0,0,"L");
  
    $fpdf->setXY(50,50);
    $fpdf->cell(70,20,'MySQL:',0,0,"L");
	$fpdf->cell(80,20,'Good',0,0,"L");
	
    $fpdf->ln(30);
    $fpdf->setfont('Arial','b', 20);
	$fpdf->cell(20,10,'Hobbies:',0,3,"L");
    $fpdf->setfont('Arial','', 20);
	$fpdf->setXY(50,90);
    $fpdf->cell(70,20,'Programming',0,0,"L");
	$fpdf->setXY(50,100);
    $fpdf->cell(70,20,'Networking',0,0,"L");
	$fpdf->setXY(50,110);
    $fpdf->cell(70,20,'Learn New Technologies',0,0,"L");
	$fpdf->setXY(50,120);
    $fpdf->cell(70,20,'Movies',0,0,"L");
   
    $fpdf->ln(30);
    $fpdf->setfont('Arial','b', 20);
	$fpdf->cell(20,10,'Languages:',0,3,"L");
    $fpdf->setfont('Arial','', 20);
	$fpdf->setXY(50,155);
    $fpdf->cell(70,20,'English',0,0,"L");
	$fpdf->setXY(50,165);
    $fpdf->cell(70,20,'Sindhi',0,0,"L");
	
	
	$fpdf->output();


?>
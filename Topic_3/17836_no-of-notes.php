
<?php

	$total_amount = 7688;

	$five_thousands = 5000;
	$one_thousands = 1000;
	$five_hundred = 500;
	$one_hundred = 100;
	$fifty = 50;	
	$twenty = 20;
	$ten = 10;
	$five = 5;
	$two = 2;
	$one = 1;
	

//	Number of Five thousands
	$no_of_notes = $total_amount / $five_thousands;	
	$reminder = $total_amount % $five_thousands;
	$no_of_notes = (integer) $no_of_notes;	
	echo "Number of 5000 Rupees is ".$no_of_notes;
	echo "<br>";

//	Number of thousands

	$no_of_notes = $reminder / $one_thousands;	
	$reminder = $reminder % $one_thousands;
	$no_of_notes = (integer) $no_of_notes;		
	echo "Number of 1000 Rupees is ".$no_of_notes;
	echo "<br>";


//	Number of Five Hundred

	$no_of_notes = $reminder / $five_hundred;	
	$reminder = $reminder % $five_hundred;
	$no_of_notes = (integer) $no_of_notes;		
	echo "Number of 500 Rupees is ".$no_of_notes;
	echo "<br>";


//	Number of One Hundred (100)	

	$no_of_notes = $reminder / $one_hundred;	
	$reminder = $reminder % $one_hundred;
	$no_of_notes = (integer) $no_of_notes;		
	echo "Number of 100 Rupees is ".$no_of_notes;
	echo "<br>";


//	Number of Fifty (50)

	$no_of_notes = $reminder / $fifty;	
	$reminder = $reminder % $fifty;
	$no_of_notes = (integer) $no_of_notes;	
	echo "Number of 50 Rupees is ".$no_of_notes;
	echo "<br>";


//	Number of Twenty (20)

	$no_of_notes = $reminder / $twenty;	
	$reminder = $reminder % $twenty;
	$no_of_notes = (integer) $no_of_notes;		
	echo "Number of 20 Rupees is ".$no_of_notes;
	echo "<br>";


//	Number of Ten (10)

	$no_of_notes = $reminder / $ten;	
	$reminder = $reminder % $ten;
	$no_of_notes = (integer) $no_of_notes;		
	echo "Number of 10 Rupees is ".$no_of_notes;
	echo "<br>";

	
//	Number of Five (5)

	$no_of_notes = $reminder / $five;	
	$reminder = $reminder % $five;
	$no_of_notes = (integer) $no_of_notes;		
	echo "Number of 5 Rupees is ".$no_of_notes;
	echo "<br>";


//	Number of Two (2)

	$no_of_notes = $reminder / $two;	
	$reminder = $reminder % $two;
	$no_of_notes = (integer) $no_of_notes;
	echo "Number of 2 Rupees in ".$no_of_notes;
	echo "<br>";


//	Number of One (1)

	$no_of_notes = $reminder / $one;	
	$reminder = $reminder % $one;
	$no_of_notes = (integer) $no_of_notes;		
	echo "Number of 1 Rupees is ".$no_of_notes;
	echo "<br>";

?>
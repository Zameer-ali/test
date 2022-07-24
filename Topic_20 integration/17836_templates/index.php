<?php
 $connection =mysqli_connect('localhost','root',"",'job_portal');
 $query="SELECT * FROM candidate";
 $result=mysqli_query($connection,$query);
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
Template 2024 Vertiwood
http://www.tooplate.com/view/2024-vertiwood
-->
<title>Verti Wood Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

 <!-- Slider </head> -->
 <script src="sliderengine/jquery.js"></script>
 <script src="sliderengine/amazingslider.js"></script>
 <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
 <script src="sliderengine/initslider-1.js"></script>
 <!-- Slider End -->

 <!-- Data Tables -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <!-- Data Tables end -->

 <!-- Editor -->
 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
 <!-- Editor end -->
 <!-- Calender---->
 <link rel="stylesheet" href="./calender/calender.less">
    <script src="./calender/calender.js"></script>
</head>
<body>
	
<div id="slider">
    <div id="tooplate_wrapper">
    	
        <div id="tooplate_sidebar">
        	
            <div id="header">
            	<h1><a href="#">Vertiwood Template</a></h1>
            </div>

            <div id="menu">
                <ul class="navigation">
                	<li><a href="#home" class="selected">Home</a></li>
                    <li><a href="#about">Data Tables</a></li>
                    <li><a href="#services">Editor</a></li>
                    <li><a href="#gallery">Calender</a></li>
                    <li><a href="#contact" class="last">Contact</a></li>
                </ul>
            </div>
			
		</div> <!-- end of sidebar -->  
    
        <div id="content">
       	  	<div class="scroll">
        	  <div class="scrollContainer">
                <div class="panel" id="home">
				
                	<!-- Insert to your webpage where you want to display the slider -->
                        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 56px;">
                            <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                                <ul class="amazingslider-slides" style="display:none;">
                                    <li><img src="images/image_01.jpg" alt="image_01"  title="image_01" />
                                    </li>
                                    <li><img src="images/image_02.jpg" alt="image_02"  title="image_02" />
                                    </li>
                                    <li><img src="images/image_03.jpg" alt="image_03"  title="image_03" />
                                    </li>
                                    <li><img src="images/image_04.jpg" alt="image_04"  title="image_04" />
                                    </li>
                                    <li><img src="images/image_05.jpg" alt="image_05"  title="image_05" />
                                    </li>
                                    <li><img src="images/image_06.jpg" alt="image_06"  title="image_06" />
                                    </li>
                                    <li><img src="images/image_07.jpg" alt="image_07"  title="image_07" />
                                    </li>
                                    <li><img src="images/image_08.jpg" alt="image_08"  title="image_08" />
                                    </li>
                                </ul>
                                <ul class="amazingslider-thumbnails" style="display:none;">
                                    <li><img src="images/image_01-tn.jpg" alt="image_01" title="image_01" /></li>
                                    <li><img src="images/image_02-tn.jpg" alt="image_02" title="image_02" /></li>
                                    <li><img src="images/image_03-tn.jpg" alt="image_03" title="image_03" /></li>
                                    <li><img src="images/image_04-tn.jpg" alt="image_04" title="image_04" /></li>
                                    <li><img src="images/image_05-tn.jpg" alt="image_05" title="image_05" /></li>
                                    <li><img src="images/image_06-tn.jpg" alt="image_06" title="image_06" /></li>
                                    <li><img src="images/image_07-tn.jpg" alt="image_07" title="image_07" /></li>
                                    <li><img src="images/image_08-tn.jpg" alt="image_08" title="image_08" /></li>
                                </ul>
                            <div class="amazingslider-engine"><a href="http://amazingslider.com" title="jQuery Slideshow">jQuery Slideshow</a></div>
                            </div>
                        </div>
                        <!-- End of body section HTML codes -->

                    
                    <div class="cleaner h20"></div> 
					
               		<h3>Our Services</h3>
                    <img src="images/tooplate_image_02.jpg" alt="Image 02" class="image_wrapper image_fr" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nunc quam, varius ac hendrerit a, <a href="#">volutpat feugiat</a> metus. Donec ligula odio, ultricies at egestas vel, laoreet a magna. Mauris mattis lorem id mi vestibulum non euismod velit aliquam. Vestibulum ultricies viverra odio ac elementum. Donec id orci libero.</p>
            
                </div> <!-- end of home -->
				
        	    <div class="panel" id="about" style="overflow-y:auto; height:500px">
                	<table id="table_id" class="display" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Candidate ID</th>
                                <th>Candidate Name</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            $count=1;
                            while($data=mysqli_fetch_assoc($result)) { ?>

                                <tr>
                                    <td><?=$count++?></td>
                                    <td><?=$data['condidate_id']?></td>
                                    <td><?=$data['name']?></td>
                                    <td><?=$data['gender']?></td>
                                </tr>                             
                           <?php } ?>
                        </tbody>
                    </table> 
      	      	</div> <!-- end of about us -->
				
        	    <div class="panel" id="services">
                <h3>What You See is What You Get</h3>
                <form method="post">
                <textarea id="mytextarea">Hello, World!</textarea>
                </form>
      	      	</div> <!-- end of services -->
				
        	  	<div class="panel" id="gallery">
                  <div class="calendar-wrapper">
                    <button id="btnPrev" type="button">Prev</button>
                        <button id="btnNext" type="button">Next</button>
                    <div id="divCal"></div>
                    </div>
                            
      	      	</div> <!-- end of gallery -->
				
        	    <div class="panel" id="contact">
                    <h2>Contact Information</h2>
                    <h5>Company Name</h5>
                    224-448 Suspendisse velit nisi,<br />
                    Duis consequat tempus, 10880<br />
                    Cras sit amet ipsum sit
                    <div class="cleaner h30"></div>
                    <div id="contact_form">
                      	<form method="post" name="contact" action="#">
					  
							<label for="author2">Name:</label><input type="text" id="author2" name="author" class="required input_field" />
							<div class="cleaner h10"></div>
							
							<label for="email">Email:</label><input type="text" id="email" name="email" class="validate-email required input_field" />
							<div class="cleaner h10"></div>
							
							<label for="text">Message:</label><textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
							<div class="cleaner h10"></div>
							
							<input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Send" />
							<input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset" />
						
                    	</form>
						
                  	</div>
        	  	</div>
      	  	</div> <!-- end of scroll -->
		</div>
		
        <div class="cleaner"></div>
	</div>
    </div> <!-- end of content -->
	
    <div id="footer">
        
	</div>

</div>
</body>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</html>
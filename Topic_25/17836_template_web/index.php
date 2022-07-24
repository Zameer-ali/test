<?php

$connection = mysqli_connect("localhost","root","","users");
if(mysqli_error($connection))
{
  echo mysqli_error($connection);
}
$result= mysqli_query($connection,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NAVTEC</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- Header -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="70px"> NAVTEC</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-5 active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="#our_courses">Our Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="#about_us">About Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link fs-5" href="#our_team">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="#success_students">Success Students</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="login.php" style="text-decoration:none;">
        <i class='fas fa-user-alt' ></i> Login&nbsp;
        </a>
         |
        <a href="register.php" style="text-decoration:none;"> 
        <i class='fas fa-user-plus'></i> Register
        </a>
      </span>
      
    </div>
  </div>
</nav>
<!-- End of Header -->

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/s1.jpg" height="600px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/s2.jpg" height="600px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/s3.jpg" height="600px" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end of carousel -->

<!-- Our Courses -->
<div class="container mt-5 mb-5" id="our_courses">
	<center>
	<h2 style="color:green">OUR COURSES</h2>
	<hr style="width:90px; height:5px;color:green" class="mb-3">
	<br>
		<div class="row mt-5">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="card shadow-lg border-2 border-success " style="width: 18rem;" >
				<img src="images/c2.jpg" class="card-img-top" alt="..." height="200">
				<div class="card-body">
					<h5 class="p-2 text-center rounded" style="background-color:green; color:white">Web Development</h5>
					<p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
				</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="card shadow-lg border-2 border-success" style="width: 18rem;">
				<img src="images/ca.png" class="card-img-top" alt="..." height="200">
				<div class="card-body ">
					<h5 class="p-2 text-center rounded" style="background-color:green; color:white">App Development</h5>
					<p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
				</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="card shadow-lg border-2 border-success" style="width: 18rem;">
				<img src="images/cg.jpg" class="card-img-top" alt="..." height="200">
				<div class="card-body">
					<h5 class="p-2 text-center rounded" style="background-color:green; color:white">Grapic design</h5>
					<p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
				</div>
				</div>
			</div>
		</div>
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card shadow-lg border-2 border-success" style="width: 18rem;" >
			  <img src="images/ss.png" class="card-img-top" alt="..." height="200">
			  <div class="card-body">
			  	<h5 class="p-2 text-center rounded" style="background-color:green; color:white">Social Media</h5>
			    <p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
			  </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card shadow-lg border-2 border-success" style="width: 18rem;">
			  <img src="images/ce.jpg" class="card-img-top" alt="..."height="200">
			  <div class="card-body ">
			  	<h5 class="p-2 text-center rounded" style="background-color:green; color:white">Electrician</h5>
			    <p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
			  </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card shadow-lg border-2 border-success" style="width: 18rem;">
			  <img src="images/cd.jpg" class="card-img-top" alt="..." height="200">
			  <div class="card-body">
			  	<h5 class="p-2 text-center rounded" style="background-color:green; color:white">Data Science</h5>
			    <p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
			  </div>
			</div>
		</div>
	</div>
	</center>
</div>
<!--End of Our Courses -->

<!-- About us Area -->
<div class="container mt-5 mb-5" id="about_us">
	<center>
		<h2 style="color:green;">OUR TEAM</h2>
		<hr style="width:90px; height:5px;color:green;" class="mb-3">
		<br>
	<div class="row">
		<div class="col-lg-12">
			  <div class="card-body">
			  	<center><img src="images/abt.jpg" height="400px" width="900px"></center>
			    <h5 class="card-title text-center p-2">TELL US MORE..!</h5>
			    <p class="card-text text-center p-2">Established in 2005, National Vocational and Technical Training Commission (NAVTTC) is the apex body for technical education and vocational training in the country mandated to provide for regulations, coordination, and policy direction for vocational and technical training and is thus involved in the policy making, strategy formulation, regulation, and revamping of the country’s entire Technical & Vocational Education and Training (TVET) system. NAVTTC is an autonomous public sector body created through the NAVTTC Act-2011 that is presently working under the Ministry of Federal Education and Professional Training. NAVTTC was established as an attached entity of the Prime Minister’s Secretariat (Public) to promote and regulate technical and vocational training in the country. It facilitates, regulates, and provides policy direction for skill development in Pakistan.</p>
			  </div>
			</div>
	    </div>
	</div>
	</center>
</div>
<!-- End of About us Area -->

<!-- Our Team Area -->

<div class="container mb-5 mt-5" id="our_team">
	<center>
	<h2 style="color:green">OUR TEAM</h2>
	<hr style="width:90px; height:5px;color:green" class="mb-3">
	<br>
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card shadow-lg border-2 border-success p-4 " style="width: 20rem;" >
			  <img src="images/p1.jpg" class="card-img-top " alt="..." height="300" width="300" style="border-radius: 50%;">
			  <div class="card-body">
			  	<h5 class="p-2 text-center rounded">Miss Sania Meer</h5>
			  </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card shadow-lg border-2 border-success p-4 " style="width: 20rem;" >
			  <img src="images/p2.jpg" class="card-img-top " alt="..." height="300" width="300" style="border-radius: 50%;">
			  <div class="card-body">
			  	<h5 class="p-2 text-center rounded">Miss Raniya karim</h5>
			  </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card shadow-lg border-2 border-success p-4 " style="width: 20rem;" >
			  <img src="images/p3.jpg" class="card-img-top " alt="..." height="300" width="300" style="border-radius: 50%;">
			  <div class="card-body">
			  	<h5 class="p-2 text-center rounded">Mr Rana Latif</h5>
			  </div>
			</div>
		</div>
	</div>

</div>
<!-- end of  Our Team Area -->
<!-- Success students Area -->
<div class=" mb-5 mt-5" id="success_students">
	<center>
		<h2 style="color:green;">OUR SUCCESS STUDENTS</h2>
		<hr style="width:90px; height:5px;color:green;" class="mb-3">
		<br>
	<div class="row m-0">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			
			<table class="table table-success table-striped">
				<thead>
				<tr>
					<th>Sno</th>
					<th>Name</th>
					<th>Email</th>
					<th>CNIC</th>
					<th>Contact Number</th> 
				</tr>
				</thead>
				<tbody>
				<?php
					if ($result->num_rows > 0) 
					{
					$i=1;
					while ($data = mysqli_fetch_assoc($result)) 
					{ ?>
						
						<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $data['first_name']." ".$data['last_name']?></td>
						<td><?php echo $data['email']?></td>
						<td><?php echo $data['cnic']?></td>
						<td><?php echo $data['phone_no']?></td>
						</tr>
					<?php
					$i++;
					}
					}
				?>
				</tbody>
			</table>
			

		</div>
		<div class="col-lg-1"></div>
	</div>
	</center>
</div>
<!-- end of Success students Area -->

<!-- Footer Area -->
<div class="container-fluid">
	<div class="row" style="background-color: #e3f2fd;">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3">
			<h6 class="fw-bold text-center">NAVTEC</h6>
			<center>
				<hr class="">
			<img src="images/logo.png" width="150px" height="150px">
		</center>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 ">
			<h6>Quick Links</h6>
			<hr>
			<li>About Us</li>
			<li>Contact Us</li>
			<li>Who We Are</li>
			<li>How We Work</li>
			<li>FAQ</li>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 ">
			<h6>HOW WE WORK</h6>
			<hr>
			<p class="p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 text-white p-2 text-center" style="background-color: green;">
			<i class="fa fa-copyright text-white"></i> Copy Right NAVTEC 2022
		</div>
	</div>
</div>
<!-- end of Footer Area -->

<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>
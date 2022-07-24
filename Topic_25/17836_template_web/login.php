<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NAVTEC</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5 mb-5">
  <h3 style="color:green;">LOGIN HERE</h3>
  <hr>
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 col-xs-12 col-md-4 col-sm-12 p-3 shadow-lg border border-primary" >
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="staticEmail" placeholder="email@example.com">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
          </div>
        </div>
        <div style="float: right;">
          <button type="button" class="btn btn-success">Login</button>
          <button type="button" class="btn btn-primary" onclick="window.location.href='register.php'">Register</button>

        </div>
    </div>
    <div class="col-lg-2"></div>

  </div>
</div>


<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>
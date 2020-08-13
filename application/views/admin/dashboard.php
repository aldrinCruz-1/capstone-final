<!DOCTYPE html>
<html style="height: 100%;">
<head>
	<title>Attendance</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ================= -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 150px;
  position: fixed;
  z-index: 1;
  top: 45px;
  left: 0;
  background-color: #007BFF;
  overflow-x: hidden;
  padding-top: 10px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #BFDEFF;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#empcol {
	font-size: 15px;
	margin-left: 20px;
}
</style>
</head>
<body style="height: 100%;">
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark" style="height: 40px;">
	  <a class="navbar-brand" href="#">Logo</a>
	  <ul class="navbar-nav">
	    <li class="nav-item">
	    	<a class="nav-link" href="#">Home</a>
	    </li>
	    <li class="nav-item">
			<button class="btn btn-success dropdown-toggle" data-toggle="dropdown" style="position: absolute; right: 5px;">
				<?php  
					echo $_SESSION['admin'];
				?>	
			</button>
			<div class="dropdown-menu dropdown-menu-right">
			    <a class="dropdown-item" href="#">Some_func</a>
			    <a class="dropdown-item" href="#">Some_func</a>
			    <div class="dropdown-divider"></div>
			    <a class="dropdown-item" href="<?php echo site_url('admin/dashboard/logout');?>">Logout</a>
			</div>
		  </li>
	  </ul>
	</nav>

	<div class="sidenav">
	  <a href="#">Menu</a>
	  <a href="#" data-toggle="collapse" data-target="#emp">Employees</a>
	  <div id="emp" class="collapse">
		<a id="empcol" href="#">+ Add</a>
	  	<a id="empcol" href="#">* Update</a>
	  </div>
	  <a href="#">Settings</a>
	  <a href="#">Logs</a>
	</div>
	
	<div class="main">
	  <h2>Dashboard  (Home)</h2>
	  <p>This is the dashboard</p>
	</div>

	   
</body>
</html>
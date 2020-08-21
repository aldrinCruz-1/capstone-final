
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 150px;
  position: fixed;
  z-index: 1;
  top: 55px;
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

<div class="sidenav">
	  <a href="#">Menu</a>
	  <a href="<?php echo site_url('admin/employee/index')?>" >Employees</a>
	  <a href="#">Settings</a>
	  <a href="#">Logs</a>
	</div>
	<br>
	<div class="main shadow p-3 mb-5 bg-white rounded " style="width: 1100px; border: 1px solid lightgray;border-top: 4px solid skyblue;">
		<hr>
	  <h2>Dashboard </h2>
	  <p>This is the dashboard</p>
	</div>


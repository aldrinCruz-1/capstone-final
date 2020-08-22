<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 65px;
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
    <a id="tsheets" href="#" >Timesheets</a>
	  <a id="emp" href="<?php echo site_url('admin/employee')?>" >Employees</a>
    <a id="repo" href="#">Reports</a>
	  <a id="setts" href="<?php echo site_url('admin/settings')?>">Settings</a>
	  
    
	</div>
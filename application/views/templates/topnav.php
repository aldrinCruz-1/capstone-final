
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top" style="height: 60px;">
	  Company name/Logo
	  <ul class="navbar-nav">
	    <li class="nav-item">
	    	<a class="nav-link" href="<?php echo base_url('admin/dashboard');  ?>">Dashboard</a>
	    </li>
	    <li class="nav-item">
			<button class="btn btn-success dropdown-toggle" id="btnlogin" data-toggle="dropdown" style="position: absolute; right: 5px;">
				<?php  
					echo $_SESSION['admin'];
				?>	
			</button>
			<div class="dropdown-menu dropdown-menu-right">

			    <a class="dropdown-item" href="<?php echo site_url('admin/dashboard/view_admin_acc'); ?>">Acount</a>
			    <div class="dropdown-divider"></div>
			    <a class="dropdown-item" href="<?php echo site_url('admin/dashboard/logout');?>">Logout</a>
			</div>
		  </li>
	  </ul>
	</nav>

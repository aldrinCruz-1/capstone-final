
	<nav class="navbar shadow navbar-expand-sm bg-light navbar-light fixed-top" style="height: 60px; font-size: large;">
	  Company name/Logo
	  <ul class="navbar-nav">
	    <li class="nav-item">
	    	<a class="nav-link" href="<?php echo base_url('admin/dashboard');  ?>">Dashboard</a>
	    </li>
	    <li class="nav-item">
			<button class="btn btn-primary dropdown-toggle" id="btnlogin" data-toggle="dropdown" style="position: absolute; right: 5px;">
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

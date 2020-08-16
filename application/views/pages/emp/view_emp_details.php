<div class="container w-75">
	<ul class="breadcrumb" style="background: none; font-size: small;">
	    <li class="breadcrumb-item "><a href="<?php echo site_url('pages/employee/get_emp'); ?>">View</a></li>
	    <li class="breadcrumb-item active"><?php echo $details->emp_fname. ' '. $details->emp_lname ?></li>
	    <li></li>
    </ul>
	<div class="row shadow p-3 mb-5 bg-white rounded">
		<div class="col-sm-6">
  			<h3><?php echo $details->emp_fname. ' '. $details->emp_mname.' '.$details->emp_lname?></h3>
  			<hr>
  		</div>
  		<div class="col-sm-12">
  			<hr>
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li class="nav-item">
		      <a class="nav-link active" data-toggle="tab" href="#home">Basic Details</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" data-toggle="tab" href="#menu1">New Password</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" data-toggle="tab" href="#menu2">Contact Info</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" data-toggle="tab" href="#menu3">Others</a>
		    </li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div id="home" class="container tab-pane active"><br>
		      <h3>Basic Details Goes Here</h3>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		    </div>
		    <div id="menu1" class="container tab-pane fade"><br>
		      <div>
		      	<p><input class="form-control w-50" type="password" name="pswd" placeholder="Enter new password..."></p>
		      </div>
		      
		      <div>
		      	<p><input class="form-control w-50" type="password" name="pswd" placeholder="Enter confirm password..."></p>
		      </div>
		      <div>
		      	<p><input type="submit" name="btn_submit" class="btn btn-primary"></p>
		      </div>
		    </div>
		    <div id="menu2" class="container tab-pane fade"><br>
		      <div>
		      	<p>
		      	Email: <input class="form-control w-50" type="type" name="pswd" value="<?php echo $details->emp_email ;?>" ></p>
		      </div>
		      <div>
		      	<p>
		      	Phone: <input class="form-control w-50" type="type" name="pswd" value="<?php echo $details->emp_phone ;?>" ></p>
		      </div>
		      <div>
		      	<p>
		      	Address: <input class="form-control w-50" type="type" name="pswd" value="<?php echo $details->emp_address ;?>" ></p>
		      </div>
		    </div>
		    <div id="menu3" class="container tab-pane fade"><br>
		      <div>
		      	<p>
		      	Email: <input class="form-control w-50" type="type" name="pswd" value="<?php echo $details->emp_email ;?>" ></p>
		      </div>
		      <div>
		      	<p>
		      	Phone: <input class="form-control w-50" type="type" name="pswd" value="<?php echo $details->emp_phone ;?>" ></p>
		      </div>
		      <div>
		      	<p>
		      	Address: <input class="form-control w-50" type="type" name="pswd" value="<?php echo $details->emp_address ;?>" ></p>
		      </div>
		    </div>
		  </div>
  		</div>
	</div>
</div>
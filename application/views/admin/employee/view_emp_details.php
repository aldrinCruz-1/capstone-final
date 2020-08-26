<style>
/* Set a style for all buttons */
.cancelbtn:hover {
  opacity:1;
  text-decoration: none;
} 
.deletebtn:hover {
  opacity:1;
  text-decoration: none;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
  font-size: x-large;
}

/* Add a color to the cancel button */
.cancelbtn {
  height: 50px;
}

/* Add a color to the delete button */
.deletebtn {
  height: 50px;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-body {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
  border-radius: 5px;

}

/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>
<br><br><br><br>
<div class="container w-75">
	<div class="row shadow p-3 mb-5 bg-white rounded" style="border-top: 4px solid #8F8F8F;">
		<div class="col-sm-6">
  			<h3><?php echo $details->emp_fname. ' '. $details->emp_mname.' '.$details->emp_lname?></h3>
  			
  		</div>
  		<div class="col-sm-6">
  			<?php
  				if ($details->emp_status == 1) {
  				
  			?>
  			<a class="btn btn-danger" onclick="document.getElementById('id01').style.display='block'"  style="float: right;"> Deactivate</a>
  			<?php
  				}
  				else
  				{
  					?>
  					<a class="btn btn-success" href="<?php echo site_url('admin/employee/index/activate_emp/'.$details->emp_id)?>" style="float: right;"> Activate</a>
  					<?php
  				}
  			?>

  		</div>
  		<!--Modal-->
  		<div id="id01" class="modal">
  			<br><br><br>
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
		    <div class="modal-body">
		      <h1>Deactivate Account</h1>
		      <p>Are you sure you want to deactivate this account?</p>
		      <div class="clearfix">
		        <a id="cl" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn-secondary">Cancel</a>
		        <a id="del" type="button" href="<?php echo site_url('admin/employee/index/deactivate_emp/'.$details->emp_id)?>" class="deletebtn btn-danger">Deactivate</a>
		      </div>
		    </div>
		  
		</div>
		<!--End of Modal-->
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
		      	<p><input class="form-control w-50" type="password" id="password" name="password" placeholder="New password..."></p>
		      </div>
		      
		      <div>
		      	<p><input class="form-control w-50" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password..." ></p>
		      	<span id='message'></span>
		      </div>
		      <div>
		      	<p><input type="submit" id="submitpass" name="btn_submit" class="btn btn-primary" disabled="true"></p>
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
		      	Address: <textarea class="form-control w-50" type="type" name="pswd" ><?php echo $details->emp_address ;?></textarea></p>
		      </div>
		      <div>
		      	<p><input type="submit" id="btncontact" name="btn_submit" class="btn btn-primary" ></p>
		      </div>
		    </div>
		    <div id="menu3" class="container tab-pane fade"><br>
		      <div>
		      	<p>
		      		Other information goes here!
		      		</p> 
		      </div>
		      <div>
		      	<p>
		      	Some details goes here!</p>
		      </div>
		      <div>
		      	<p>
		      		Details<br> Informations <br>
		      	</p>
		      </div>
		    </div>
		  </div>
  		</div>
	</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script type="text/javascript">
	$('#password, #confirm_password').on('keyup', function () 
   {
    if ($('#password').val() == $('#confirm_password').val()) 
    {
        $('#message').html('Password matched').css('color', 'green');
  		$('#submitpass').prop('disabled', false);
  	}
    else
    {
    	
        $('#message').html('Not Match').css('color', 'red');
        $('#submitpass').prop('disabled', true);
    }
       
  });
</script>
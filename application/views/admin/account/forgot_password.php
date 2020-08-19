<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	<a class="navbar-brand" href="#">Company name</a>
	  
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#mymodal" style="position: absolute; right: 5px;">Login</a>
</nav>
<div class="container mt-3 ">
	<div class="shadow p-3 mb-5 bg-white rounded w-50" style="border-top: 4px solid skyblue; margin-left: 300px;">

		<h2>Forgot password</h2>
		<hr>
		<form method="post" action="<?= site_url('admin/login/resetlink');?>">	

			Please enter the email address you use to your account and click send.
			<div style="padding-left: 50px">
			<br><br>
				<input class="form-control" type="email" id="email" name="email" placeholder="Email..." required="required" style="width: 400px;">
			</div>

			<?php 
  				if ($this->session->flashdata('email_sent')) {
  			
  		 	?>
		  		<div class="alert alert-success col-sm-12" role="alert" id="myalert" style="width: 100%; text-align: center;">
			  		<?php  
			  			echo $this->session->flashdata('email_sent');
			  		?>
		  		</div>
		  		<a href="<?php echo site_url('admin/login') ?>">Continue to login..</a>
  			<?php  
  				}
  				else
  				{
  					?>
	  				<div class="alert alert-danger col-sm-12" role="alert" id="myalert" style="width: 100%; text-align: center;">
				  		<?php  
				  			echo $this->session->flashdata('notemail_sent');
				  		?>
			  		</div>
  					<?php  
  				}
  		 	?>
			<br>
			<div style="text-align: center">
				<input class="btn btn-primary" type="submit" name="submit" value="SEND EMAIL">
			</div>
		</form>
	</div>
	
</div>
<script>
    setTimeout(function() {
        $('#myalert').fadeOut('slow');
    }, 5000);
</script>
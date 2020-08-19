<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	<a class="navbar-brand" href="#">Company name</a>
	  
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#mymodal" style="position: absolute; right: 5px;">Login</a>
</nav>
<div class="container mt-3 ">
	<div class="shadow p-3 mb-5 bg-white rounded w-50" style="border-top: 4px solid skyblue; margin-left: 300px;">

		<h2>Reset password</h2>
		<hr>
		<form method="post" action="<?= site_url('admin/login/resetlink');?>">	
			
			<div style="padding-left: 50px">
			<br><br>
				<input class="form-control" type="email" id="email" name="email" placeholder="New password..." required="required" style="width: 400px;">
			</div>
			<div style="padding-left: 50px">
			<br><br>
				<input class="form-control" type="email" id="email" name="email" placeholder="Confirm password..." required="required" style="width: 400px;">
			</div>

			<br>
			<div style="text-align: center">
				<input class="btn btn-primary" type="submit" name="submit" value="SEND RESET LINK">
			</div>
		</form>
	</div>
	
</div>
<script>
    setTimeout(function() {
        $('#myalert').fadeOut('slow');
    }, 5000);
</script>
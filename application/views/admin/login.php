
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	<a class="navbar-brand" href="#">Logo</a>
	  
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#mymodal" style="position: absolute; right: 5px;">Login</a>
</nav>
<!-- Modal -->
<form method="POST" action="<?php echo site_url('admin/login/verify')?>">
<div class="modal fade" id="mymodal">
	<div class="modal-dialog">
		<div class="modal-content">
<!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Admin Login</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
<!-- Modal Body -->
	    <div class="modal-body">
			
		<div class="form-group">
			<div class="form-group">			
				<!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
				<input id="username" type="text" class="form-control" name="username" placeholder="Email">
			</div>
			<div class="form-group">	
				<!--<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>-->
				<input id="password" type="password" class="form-control" name="password" placeholder="Password">
			</div>

		</div>
		</div>
<!-- Modal footer -->
		<div class="modal-footer">
			<a href="#">Forgot password</a>
			<div class="form-group text-center">
				<input type="submit" name="submit" value="Login" class="btn btn-primary">
			</div>
		</div>
		</div>
	</div>
</div>
</form>
<br>
<div class="container">
  <div class="shadow p-3 mb-5 bg-white rounded">
		<div id="clock" class="d-flex justify-content-center" >
			<table>
			  <tr>
				  <td id="Hour" style="color:black;font-size:50px;"></td>
				  <td id="Minut" style="color:black;font-size:50px;"></td>
				  <td id="Second" style="color:black;font-size:50px;"></td>
			  <tr>
			</table> 
		</div>
		<hr>
	<div class="d-flex p2 justify-content-center"  style="margin: 20px; display: inline-block;">

		<div class="form-group" style="padding: 30px; padding-left: 0;">
			<img src="<?php echo asset_url().'img/emp.jpg'?>" class="rounded-circle" alt="employee img">
		</div>
		<div class="form-group" style="padding: 30px;">
			<br>
			<br>
			<h5>Employee name: </h5>
				<h4>Juan Dela Cruz</h4>
			<h5>Time in: 00:00:00</h5>
			<h5>Time Out: 00:00:00</h5>
		</div>
		
	</div>
  </div>
</div>

<script>
    function timedMsg()
	  {
	    var t=setInterval("change_time();",1000);
	  }
	function change_time()
	 {
	   var d = new Date();
	   var curr_hour = d.getHours();
	   var curr_min = d.getMinutes();
	   var curr_sec = d.getSeconds();
	   if(curr_hour > 12)
	    {
	      curr_hour = curr_hour - 12;
	   	  document.getElementById('Hour').innerHTML =curr_hour+':';
	      document.getElementById('Minut').innerHTML=curr_min+':';
	      document.getElementById('Second').innerHTML=curr_sec + ' PM';
	    }
	    else
	    {
	      document.getElementById('Hour').innerHTML =curr_hour+':';
	      document.getElementById('Minut').innerHTML=curr_min+':';
	      document.getElementById('Second').innerHTML=curr_sec + ' AM';
	    }

	 }
	timedMsg();   
</script>

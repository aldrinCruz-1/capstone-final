

<div class="container mt-3">
	<ul class="breadcrumb" style="background: none; font-size: small;">
	    <li class="breadcrumb-item"><a href="<?php echo site_url('admin/employee/index'); ?>">View</a></li>
	    <li class="breadcrumb-item active">Create</li>
    </ul>

  	<div class="row shadow p-1 mb-5 bg-white rounded" style=" border: 1px solid lightgray; border-top: 4px solid skyblue;">
	
	<form id="regForm" method="POST" action="<?php echo site_url('admin/employee/index/create_emp')?>">
	<h1>Register:</h1>
	<p>Please enter all the needed information. All field under labels with asterisk(<b style="color: red;">*</b>) are <b style="color: red;">required fields</b>. </p>
	<hr>

	<!-- One "tab" for each step in the form: -->
	<div class="tab"><h4>Name:<b style="color: red;">*</b></h4>
	  <p><input name="fname" placeholder="First name..." oninput="this.className = ''"></p>
	  <p><input name="mname" placeholder="Middle name..." oninput="this.className = ''"></p>
	  <p><input name="lname" placeholder="Last name..." oninput="this.className = ''"></p>
	  <h4>Sex:<b style="color: red;">*</b></h4>
	  <p><select name="sex" class="form-control" style="font-size: 17px;border: 1px solid #aaaaaa;padding: 9px;width: 100%;">
	    <option>Male</option>
	    <option>Female</option>
	   
	  </select>
	  </p>
	</div>

	<div class="tab"><h4>Contact Info: <b style="color: red;">*</b></h4>
	  <p><input name="email" placeholder="E-mail..." oninput="this.className = ''"></p>
	  <p><input name="phone" placeholder="Phone..." oninput="this.className = ''"></p>
	  <h4>Address Info:<b style="color: red;">*</b></h4>
	  <p><input name="address" placeholder="Address..." oninput="this.className = ''"></p>
	</div>

	<div class="tab"><h4>Schedule: <b style="color: red;">*</b></h4>
	  Time in:
	  <p><input name="timein"  type="time" placeholder="dd" oninput="this.className = ''"></p>
	  Time out:
	  <p><input name="timeout" type="time" placeholder="mm" oninput="this.className = ''"></p>
	  
	</div>

	<div class="tab"><h4>Password:<b style="color: red;">*</b></h4>
	  <p><input name="password" id="password" type="password" placeholder="Password..." oninput="this.className = ''"></p>
	  <p><input name="confirm_password" id="confirm_password" type="password" placeholder="Confirm Password..." oninput="this.className = ''"></p>
	  <span id='message'></span>
	</div>

	<div style="overflow:auto;">
	  <div style="float:right;">
	    <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	    <button class="btn btn-primary" type="button" id="nextBtn"  onclick="nextPrev(1)">Next</button>
	  </div>
	</div>

	<!-- Circles which indicates the steps of the form: -->
	<div style="text-align:center;margin-top:40px;">
	  <span class="step"></span>
	  <span class="step"></span>
	  <span class="step"></span>
	  <span class="step"></span>
	</div>

	</form>
</div>
</div>

<script type="text/javascript">
	$('#password, #confirm_password').on('keyup', function () 
   {
    if ($('#password').val() == $('#confirm_password').val()) 
    {
        $('#message').html('Password matched').css('color', 'green');
  		$('#nextBtn').prop('disabled', false);
  	}
    else
    {
    	
        $('#message').html('Not Match').css('color', 'red');
        $('#nextBtn').prop('disabled', true);
    }
       
  });
</script>
<script src="<?php echo asset_url().'js/script.js'?>"></script>
	<!-- ================= -->
<link rel="stylesheet" href="<?php echo asset_url().'css/styles.css'?>">
	<!-- ================= -->
<div class="container mt-3">
	<ul class="breadcrumb" style="background: none; font-size: small;">
	    <li class="breadcrumb-item"><a href="<?php echo site_url('admin/employee/index'); ?>">View</a></li>
	    <li class="breadcrumb-item active">Create</li>
    </ul>

  	<div class="row shadow p-1 mb-5 bg-white rounded" style=" border: 1px solid lightgray; border-top: 4px solid skyblue;">
	
	<form id="regForm" method="POST" action="<?php echo site_url('admin/employee/index/create_emp')?>">
	<h1>Register:</h1>
	<hr>

	<!-- One "tab" for each step in the form: -->
	<div class="tab"><h4>Name:</h4>
	  <p><input name="fname" placeholder="First name..." oninput="this.className = ''"></p>
	  <p><input name="mname" placeholder="Middle name..." oninput="this.className = ''"></p>
	  <p><input name="lname" placeholder="Last name..." oninput="this.className = ''"></p>
	  Sex:
	  <p><select name="sex" class="form-control" style="font-size: 17px;border: 1px solid #aaaaaa;padding: 9px;width: 100%;">
	    <option>Male</option>
	    <option>Female</option>
	   
	  </select>
	  </p>
	</div>

	<div class="tab"><h4>Contact Info:</h4>
	  <p><input name="email" placeholder="E-mail..." oninput="this.className = ''"></p>
	  <p><input name="phone" placeholder="Phone..." oninput="this.className = ''"></p>
	  Address Info:
	  <p><input name="address" placeholder="Address..." oninput="this.className = ''"></p>
	</div>

	<div class="tab"><h4>Schedule:</h4>
	  Time in:
	  <p><input name="timein"  type="time" placeholder="dd" oninput="this.className = ''"></p>
	  Time out:
	  <p><input name="timeout" type="time" placeholder="mm" oninput="this.className = ''"></p>
	  
	</div>

	<div class="tab"><h4>Password:</h4>
	  <p><input name="pass" type="password" placeholder="Password..." oninput="this.className = ''"></p>
	  <p><input type="password" placeholder="Confirm Password..." oninput="this.className = ''"></p>
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

<script src="<?php echo asset_url().'js/script.js'?>"></script>
	<!-- ================= -->
<link rel="stylesheet" href="<?php echo asset_url().'css/styles.css'?>">
	<!-- ================= -->
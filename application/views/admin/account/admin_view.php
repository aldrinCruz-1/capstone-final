<div class="container mt-3">
  <div class="row shadow p-3 mb-5 bg-white rounded " style="width: 1100px; border: 1px solid lightgray;border-top: 4px solid skyblue;">
	  <div class="col-sm-6">
	    <h1><?php echo $details->firstname . ' ' .$details->lastname ;  ?></h1>
	    <?php echo $details->email;?>
	  </div>
	  <div class="col-sm-6" style="text-align: right;">
	    <a href="" class="btn btn-danger" >Delete</a>
	  </div>
	  <div class="col-sm-12">
	  	<hr>
	  </div>
  </div>	
</div>
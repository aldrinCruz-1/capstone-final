
<div class="container mt-3">
	<ul class="breadcrumb" style="background: none; font-size: small;">
	    <li class="breadcrumb-item active">View</li>
    </ul>

  	<div class="row shadow p-3 mb-5 bg-white rounded" style=" border: 1px solid lightgray;border-top: 4px solid skyblue;">

  		<div class="col-sm-6">
  			<h1>Employee list</h1>
  			<hr>
  		</div>
  		<?php 
  			if ($this->session->flashdata('success')) {
  			
  		 ?>
	  		<div class="alert alert-success col-sm-6" role="alert" id="myalert" style="width: 100%; text-align: center;">
		  		<?php  
		  			echo $this->session->flashdata('success');
		  		?>
	  		</div>
  		<?php  
  			}
  		
  			else if ($this->session->flashdata('deactivate')) {
  			
  		 ?>
	  		<div class="alert alert-success col-sm-6" role="alert" id="myalert" style="width: 100%; text-align: center;">
		  		<?php  
		  			echo $this->session->flashdata('deactivate');
		  		?>
	  		</div>
  		<?php  
  			}
  			else if ($this->session->flashdata('activate')) {
  				?>
  				<div class="alert alert-success col-sm-6" role="alert" id="myalert" style="width: 100%; text-align: center;">
		  		<?php  
		  			echo $this->session->flashdata('activate');
		  		?>
	  		</div>
  				<?php
  			}
  		?>
  		<div class="col-sm-12"></div>
  		<div class="col-sm-6">
  			<input class="form-control" id="search" type="text" placeholder="Search.." style="width: 500px;">
  			
  		</div>
  		<div class="col-sm-6" style="text-align: right;">
  			<a href="<?php echo base_url('admin/employee/index/open_create');?>"> <button class="btn btn-success">+ Add new</button>	</a>
  			
  		</div>
  		
  		
		<div class="col-sm-12"style="padding-top: 20px;">
			<table class="table table-hover table-striped" >
			    <thead>
			      <tr>
			        <th>Name</th>
			        <th style="text-align: center;">Schedule time-in</th>
			        <th style="text-align: center;">Schedule time-out</th>
			        <th style="text-align: center;">Status</th>
			        <th style="text-align: center;">Action</th>
			      </tr>
			    </thead>
			    <tbody id="myTable">

			     <?php  
			     	foreach ($arr->result() as $row) 
			     	{
			     	?>
			     	
			     	<tr>		
			     	  <td><?php echo $row->emp_lname . ', '.$row->emp_fname;?></td>
			     	  <td style="text-align: center;"><?php echo $row->emp_in;?></td>
			     	  <td style="text-align: center;"><?php echo $row->emp_out;?></td>
			     	  <td style="text-align: center;"><?php 
			     		if ($row->emp_status == 1) {echo "Active";}
			     		else{echo "Inactive";}?></td>
			     		<td style="text-align: center;">
			     			<a class="btn btn-primary" href="<?php echo site_url('admin/employee/index/view_emp_details/'.$row->emp_id)?>">View</a>
			     		</td>
			     	</tr>
			     	
			     <?php
			     	}
			     ?>
			    </tbody>
			</table>
			<?php  
				echo $this->pagination->create_links();
			?>
		</div>
	</div>
</div>
.
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


    setTimeout(function() {
        $('#myalert').fadeOut('slow');
    }, 5000);
</script>
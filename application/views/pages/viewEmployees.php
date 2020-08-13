<div class="container mt-3">
  	<div class="row shadow p-3 mb-5 bg-white rounded">
  		<div class="col-sm-6">
  			<input class="form-control" id="search" type="text" placeholder="Search name.." style="width: 500px;">
  		</div>
  		<div class="col-sm-6" style="text-align: right;">
  			<button class="btn btn-success">Create</button>	
  		</div>
		<div class="col-sm-12"style="padding-top: 50px;">
			<table class="table table-hover" >
			    <thead>
			      <tr>
			        <th>Firstname</th>
			        <th>Lastname</th>
			        <th>Time in sched</th>
			        <th>Time out sched</th>
			      </tr>
			    </thead>
			    <tbody id="myTable">
			     <?php  
			     	foreach ($arr->result() as $row) 
			     	{
			     		?>
			     		<tr>
			     			<td><?php echo $row->emp_fname;?></td>
			     			<td><?php echo $row->emp_lname;?></td>
			     			<td><?php echo $row->emp_in;?></td>
			     			<td><?php echo $row->emp_out;?></td>
			     		</tr>
			     <?php
			     	}
			     ?>
			    </tbody>
			</table>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
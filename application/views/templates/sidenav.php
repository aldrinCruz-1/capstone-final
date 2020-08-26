<style>
.sidenav {
  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 60px;
  left: 0;
  background-color: #424B63;
  overflow-x: hidden;
  padding-top: 10px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #BFDEFF;
  display: block;
}

.sidenav .active a {
  color: #f1f1f1;
  border-left:  5px solid #0069D9;
}
.sidenav a:hover
{
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#empcol {
	font-size: 15px;
	margin-left: 20px;
}
</style>

<div class="sidenav">
  <ul class="navbar-nav">

    <li class="nav-item"><a id="tsheets" href="<?php echo site_url('admin/timesheet')?>" >Timesheets</a></li>
	  <li class="nav-item"><a id="emp" href="<?php echo site_url('admin/employee')?>" >Employees</a></li>
    <li class="nav-item"><a id="repo" href="<?php echo site_url('admin/reports')?>">Reports</a></li>
	  <li class="nav-item"><a id="setts" href="<?php echo site_url('admin/settings')?>">Settings</a></li>

	 </ul>
    
	</div>

<script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".sidenav a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
                //for making parent of submenu active
               $(this).closest("li").parent().parent().addClass("active");
            }
        });
    });        
</script>
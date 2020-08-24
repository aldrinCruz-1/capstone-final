<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="Aldrin Cruz">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ================= -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- ================= -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- ================= -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- ================= -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- ================= -->
	<style type="text/css">
		.loader-wrapper{
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
			background-color: #242f3f;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.lds-ripple {
		  display: inline-block;
		  position: relative;
		  width: 80px;
		  height: 80px;
		}
		.lds-ripple div {
		  position: absolute;
		  border: 4px solid #fff;
		  opacity: 1;
		  border-radius: 50%;
		  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
		}
		.lds-ripple div:nth-child(2) {
		  animation-delay: -0.5s;
		}
		@keyframes lds-ripple {
		  0% {
		    top: 36px;
		    left: 36px;
		    width: 0;
		    height: 0;
		    opacity: 1;
		  }
		  100% {
		    top: 0px;
		    left: 0px;
		    width: 72px;
		    height: 72px;
		    opacity: 0;
		  }
		}

	</style>
</head>
<body style="height: 100%;">
	<div class="loader-wrapper">
	  <div class="lds-ripple"><div></div><div></div></div>
	</div>
	<script type="text/javascript">
		$(window).on("load",function(){
			$(".loader-wrapper").fadeOut("slow");
		});
	</script>
	
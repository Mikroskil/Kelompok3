<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>INA FLASH</title>
    <link href="css/bootstrap.css" rel="stylesheet">
   	<link href="css/global.css" rel="stylesheet">
	<link rel="stylesheet" href="plugins/flexslider.css" type="text/css" media="screen" />
	
	
	<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/global.js"></script>
<script defer src="plugins/jquery.flexslider-min.js"></script>
<script src="plugins/jquery.easing.js"></script>
<script src="plugins/jquery.mousewheel.js"></script> 
    
</head>

<body>
<?php include "header.php"; ?>

<div class="container theme-showcase" id='isi' style="position:relative" >
<?php include "content.php"; ?>
</div>

<?php include "footer.php"; ?>


	 
	 <script>

$(document).ready(function()
{
	$('.flexslider').flexslider({
		animation	: "slide",
		controlNav	: false,
		start		: function(slider){
		$('body').removeClass('loading');
		}
		});
		});
</script>
</body>
</html>

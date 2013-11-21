<?php
include 'konfigurasi/koneksi.php';
include 'cek-login.php';

$query_set = mysql_query("SELECT * FROM setting") or die (mysql_error()); 
$disp = mysql_fetch_array($query_set);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title><?php echo $disp['title'];?></title>
    <meta name="keywords" content="<?php echo $disp['keyword']?>" />
    <meta name="description" content="<?php echo $disp['deskripsi']?>" />

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" href="./css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />

</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href=".">PKTI</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="user.php">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

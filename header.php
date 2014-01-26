
<?php

include 'konfigurasi/koneksi.php';
include 'konfigurasi/class_paging.php';

$query_set = mysql_query("SELECT * FROM setting") or die (mysql_error()); 
$disp = mysql_fetch_array($query_set);

?>
<!--<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">-->

<div class="navbar navbar-inverse" role="navigation" id='head'>
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><b>INDONESIA FLASH TOUR</b></a>
			<ul class="nav nav-pills pull-right ul-menu-atas" style="margin-top:2px">
				<li style="margin-right:50px;">
					<form>
						<div id="body-search" >
							<div id="search-btn" style="float:right;">
								<button type="submit"></button>
							</div>
							<div id="search-input" style="float:right;">
								<input id="Search" name="Search" type="text" placeholder="Cari Data" class="input-medium search-query">
							</div>
							<div style="clear:both"></div>
						</div>
					</form>
				</li>
				<?php if ($_SESSION==null) { ?>
				
				<li style="margin-right:30px;" id='s-login' >
					<a href="index.php?module=login" class='menu-lg' id="l-login" >
						<span ><div class='menu-lg-icon' style="background-image:url(images/icon/locked.png);"></div></span>
						<span class="menu-lg-lbl">Login</span>
						<div style="clear:both"></div>
					</a>
				</li>
				 <li style="margin-left:30px; margin-right:15px;" id='s-Register'>
					<a href="index.php?module=register" class='menu-lg' id="l-register"  >
						<span ><div class='menu-lg-icon' style="background-image:url(images/icon/rege.png);"></div></span>
						<span class="menu-lg-lbl">Register</span>
						<div style="clear:both"></div>
					</a>
				</li> 
				<?php
				}
				else
				{
				?>
				
				<li id='s-User' >
					<a href="#" class='menu-lg' class="dropdown-toggle" style="padding:5px 10px 5px 10px" data-toggle="dropdown">
					<span ><div class='menu-lg-icon' style="background-image:url(images/icon/male3.png);"></div></span>
					<span class="menu-lg-lbl">&nbsp;<?php echo $_SESSION['nama']; ?></span>
					<div style="clear:both"></div>
					</a>
					<ul class="dropdown-menu">
						<li><a href="index.php?module=Profil" id='Profil'>Profil</a></li>
						<li><a href="index.php?module=t_wisata">Tambah Wisata</a></li>
						<li><a href="#" id='logOut'>Log Out</a></li>
					</ul>
				</li>
				<?php } ?>
			</ul>
        </div>
    </div>
	
	<div class="menu-bawah"  >
		<div class="container" >
			<div class="navbar-collapse ">
				<ul class="nav navbar-nav ul-menu">
					<li id="l-home">
						<a href="index.php?module=home"  >
							<label class="logo-menu" style="background-image:url(images/icon/home.png);"></label>
							<div>Home</div>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<label class="logo-menu" style=" background-image:url(images/icon/files.png);"></label>
							<div>Kategori </div>
						</a>
						<ul class="dropdown-menu">
							<?php 
								$select="select * from kategori order by id_kat asc";
								$query=mysql_query($select);
								while($row=mysql_fetch_array($query))
								{
								?>
								<li>
									<a href="index.php?module=k_t&nilai=<?php echo $row["id_kat"] ?>">
										<span><?php echo $row['nama_kat']; ?></span>
									</a>
								</li>
							<?php	}
							?>
						</ul>
					</li>
					<li id="l-about" >
						<a href="index.php?module=about" >
							<label class="logo-menu" style="background-image:url(images/icon/about.png);"></label>
							<div>About Us</div>
						</a>
					</li>
					<li id="l-contact">
						<a href="index.php?module=contact" >
							<label class="logo-menu" style="background-image:url(images/icon/cont.png);"></label>
							<div>Contact US</div>
						</a>
					</li>		
				</ul>
			</div>
		</div>
	</div>

</div>

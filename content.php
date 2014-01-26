<?php

if (empty($_GET['module']))
{
	$_GET['module']='home';
  include "view/home.php";
}
else
{
if ($_GET['module']=='home')
{	
  include "view/home.php";
}
if ($_GET['module']=='about')
{
 include "view/about.php";
}
if ($_GET['module']=='contact')
{
 include "view/contact.php";
}
if ($_GET['module']=='login')
{
 include "view/login.php";
}
if ($_GET['module']=='register')
{
 include "view/register.php";
}
if ($_GET['module']=='Profil')
{
 include "view/Profil.php";
}
if ($_GET['module']=='t_wisata')
{
 include "view/tambah_wisata.php";
}
if ($_GET['module']=='add_wisata')
{
 include "view/add_wisata.php";
}
if ($_GET['module']=='edit-d')
{
 include "view/edit_wisata.php";
}
if ($_GET['module']=='detail_berita')
{
 include "view/detail_berita.php";
}
if ($_GET['module']=='K_daerah')
{
 include "view/kategori_daerah.php";
}
if ($_GET['module']=='k_t')
{
 include "view/kategori_t.php";
}
}
?>

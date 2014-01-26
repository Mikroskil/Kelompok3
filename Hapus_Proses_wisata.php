<?php
session_start();
include "../konfigurasi/koneksi.php";
include "../konfigurasi/library.php";
$id=$_REQUEST['id'];

mysql_query ("delete from berita where id_berita='$id' and user_id='$_SESSION[username]'");
header('location:../index.php?module=t_wisata');
?>

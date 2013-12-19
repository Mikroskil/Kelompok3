<?php
session_start();
include "konfigurasi/koneksi.php";
include "konfigurasi/library.php";

mysql_query ("delete from berita where id_berita='$id' and user_id='$_SESSION[username]'");
header('location:tambah_wisata.php');
?>

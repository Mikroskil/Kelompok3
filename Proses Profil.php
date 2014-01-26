<?php
session_start();
include '../konfigurasi/koneksi.php';
$id=$_SESSION['id_user'];


$lokasi_file = $_FILES['fupload']['tmp_name'];
$tipe_file      = $_FILES['fupload']['type'];
$nama_file = $_FILES['fupload']['name'];

$acak           = rand(1,99);
$nama_file_unik = $acak.$nama_file;

$nama= $_POST['nama'];
$email= $_POST['email'];
$alamat= $_POST['alamat'];
$telp= $_POST['telp'];
$id=$_SESSION['id_user'];

if(!empty($lokasi_file)){
$file_extension = strtolower(substr(strrchr($nama_file,"."),1));

  switch($file_extension){
    case "gif": $ctype="image/gif"; break;
    case "png": $ctype="image/png"; break;
    case "jpeg":
    case "jpg": $ctype="image/jpg"; break;
    default: $ctype="application/proses";
  }

  if ($file_extension=='php'){
   echo 0;
  }
	else
	{
	move_uploaded_file($lokasi_file,"../Foto/$nama_file_unik");
	mysql_query("update users set nama='$nama',email='$email',telp='$telp',alamat='$alamat',foto_akun='$nama_file_unik' where id_user='$id' ");
	}
}
//Apabila tidak ada Gambar yang diUpload
else{
	mysql_query("update users set nama='$nama',email='$email',telp='$telp',alamat='$alamat' where id_user='$id' ");
}
header("location:../index.php?module=Profil");

?>

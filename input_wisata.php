<?php
session_start();
include "konfigurasi/koneksi.php";
include "konfigurasi/library.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$tipe_file      = $_FILES['fupload']['type'];
$nama_file = $_FILES['fupload']['name'];
$acak           = rand(1,99);
$nama_file_unik = $acak.$nama_file;
$judul= $_POST['judul'];
$isi= $_POST['isi_berita'];
$kategori = $_POST['kategori'];
$daerah = $_POST['daerah'];


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
   echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PHP');
        window.location=('add_wisata.php')</script>";
  }
	
	move_uploaded_file($lokasi_file,"gambar/$nama_file_unik");
	mysql_query("insert into berita (user_id,judul,isi,id_kat,daerah,gambar,tanggal)
		values('$_SESSION[username]', '$judul', '$isi', '$kategori', '$daerah', '$nama_file_unik', '$tgl_sekarang') ");

}
//Apabila tidak ada Gambar yang diUpload
else{
	mysql_query("insert into berita (user_id,judul,isi,id_kat,daerah,tanggal)
		values('$_SESSION[username]','$judul', '$isi', '$kategori', '$daerah','$tgl_sekarang')");
}

header('location:tambah_wisata.php');
?>

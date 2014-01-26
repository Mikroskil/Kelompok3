<?php
include '../konfigurasi/koneksi.php';
$username=$_REQUEST['username'];
$nama=$_REQUEST['nama'];
$password=$_REQUEST['pass'];
$email=$_REQUEST['email'];
$telp=$_REQUEST['telp'];
$alamat=$_REQUEST['alamat'];
$pertanyaan=$_REQUEST['pertanyaan'];
$Jawab=$_REQUEST['Jawab'];
$confirm=$_REQUEST['confirm'];

if($username!="" && $password!="")
{
	
	$query=mysql_query("select * from users where username='$username' ");
	$row=mysql_fetch_array($query);
	
	if ($row['username']==$username)
	{
	echo 3;		
	}
	
	else if($password==$confirm)
	 {
		$password=md5($_REQUEST['pass']);
		$qry=mysql_query("insert into users(username,password,nama,email,telp,alamat,foto_akun,pertanyaan,jawaban) values ('$username','$password','$nama','$email','$telp','$alamat','akunDefault.jpg','$pertanyaan','$Jawab')",$link) or die (mysql_error());
		
	echo 0;		
	}
	else
		{
		 
		echo 1;
		/*<script language="javascript">
		alert("Isi Confirm Password anda sesuai dengan Password anda")
		window.location = "index.php";
		
		</script>
		*/
	 }
}
else
{
echo 2;
/*
<script language="javascript">
window.location = "index.php";
alert("Silahkan isi data anda dengan benar")
</script>
*/
	 }	 ?>

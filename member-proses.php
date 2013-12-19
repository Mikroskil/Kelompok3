<?php
include 'konfigurasi/koneksi.php';
$username=$_REQUEST['username'];
$nama=$_REQUEST['nama'];
$password=$_REQUEST['pass'];
$email=$_REQUEST['email'];
$confirm=$_REQUEST['confirm'];

if($username!="" && $password!="")
{
	if($password==$confirm)
	 {
	  $password=md5($_REQUEST['pass']);
		$qry=mysql_query("insert into users(username,password,nama,email) values ('$username','$password','$nama','$email')",$link) or die (mysql_error());
		
		 ?>
		
		 <script language="javascript">
		<!--
				alert('Terima kasih sudah mendaftar, silahkan login untuk masuk ke dashboard anda')
				window.location = "index.php";
				
		--></script>
		<?php
		}
	else
		{
		?>
		<script language="javascript">
		alert("Isi Confirm Password anda sesuai dengan Password anda")
		window.location = "index.php";
		
		</script>
		<?php
	 }
}
else
{
?>
<script language="javascript">
window.location = "index.php";
alert("Silahkan isi data anda dengan benar")
</script>
<?php
	 }	 ?>

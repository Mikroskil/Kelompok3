<?php
include 'konfigurasi/koneksi.php';
$username=$_REQUEST['username'];
$email=$_REQUEST['email'];
$pertanyaan=$_REQUEST['pertanyaan'];
$Jawab=$_REQUEST['Jawab'];


if ($username!=''&& $email!='')
{
$sql= "SELECT * FROM users Where username='$username' AND email='$email' and pertanyaan='$pertanyaan' ";
$result = mysql_query($sql)or die(mysql_error());
$hasil=mysql_fetch_array($result);
$ketemu=mysql_num_rows($result);

if ($ketemu == 1) 
{
?>
<form method="post" action="new-pass.php" id="form">
<table width="418" border="0">
  <tr>
    <td>Password</td>
	<td>
	<input type="password" name="pass" id="password"/>
	<input type="hidden" name="username" value="<?php echo $username; ?>"/>
	<input type="hidden" name="email" value="<?php echo $email; ?>" />
	<input type="hidden" name="pertanyaan" value="<?php echo $pertanyaan ?>" />
	</td>
    
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><input type="password" name="confirm"  id="confirm_password"/></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="submit" value="Kirim"></td>
  
  </tr>
</table>
</form>

<?php
}
else
{
?>
<script type="text/javascript">
<!--
alert("Data Yang Anda Masukan Salah")
		window.location = "forgotpass.php";
		
//-->
</script>

<?php
}

}

?>

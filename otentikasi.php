<?php
session_start();
include'../konfigurasi/koneksi.php';

function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = $_POST['username'];
$password = $_POST['password'];
$pass1 = md5($password);

$pass=$pass1;

$username = anti_injection($username);
$pass = anti_injection($pass);


if (!ctype_alnum($username) OR !ctype_alnum($pass)){
  echo 0;
}

else {
$q = mysql_query("select * from users where username='$username' and password='$pass'");
$ketemu = mysql_num_rows($q);
$r = mysql_fetch_array($q);


if ($ketemu == 1) {
	session_start();
	$_SESSION['id_user']=$r['id_user'];
	$_SESSION['username'] = $r['username'];
	$_SESSION['nama'] = $r['nama'];
	
	/*header('location:user.php');*/
} else {
	echo 2;
}
}

?>

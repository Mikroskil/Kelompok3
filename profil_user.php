<script> $(document).ready(function(){ hilang();});</script>
<?php 
$id=$_SESSION['id_user'];
?>

<style>
.p-data
{
margin-top:20px;
font-size:18px;
}

.p-left
{
float:left;
}

.p-lbl
{
width:100px;
}

.p-isi
{
padding-left:5px;
}
	</style>
<div class="row" style="height:440px;">
	<h2 style="text-align:center;border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">Profil</h2>
	<?php 
		
		$query=mysql_query("select * from users where id_user='$id'");
		while($row=mysql_fetch_array($query))
		{
	?>
	
	<form enctype="multipart/form-data" method="post" name="upload" action="view/proses_Profil.php" id="frmprofil" >
	<div class=" col-xs-6 col-md-4" >
		<div class="b-f-profil" style="">
			<img id="view-fakun" src="foto/<?php echo $row['foto_akun']; ?>" width="300px" height="250px" />
			<div id='e-foto'>
				<div style="position:absolute; right:0px;">
					<span>
						<label style="position:relative; top:-15px; color:#fff">Ganti Foto</label>
					</span>
					<label style="height:32px;  width:32px; background-image:url(images/icon/pen.png);"></label>
				</div>
				<input style="height:33px; width:100%; opacity:0;" type="file" name="fupload"  onchange="bacaGambarRm(this); "   />
			</div>
		</div>
		
	</div>
	
	<div class="col-md-4 ">
		<div id='view-p' >
			<div class='p-data' style=" margin-top:10px;">
				<div class='p-lbl p-left'>Nama</div>
				<div class='p-left'>:</div>
				<div class='p-isi p-left '><?php echo $row['nama']; ?></div>
				<div style="clear:both"></div>
			</div>
			<div class='p-data'>
				<div class='p-lbl p-left'>Email</div>
				<div class='p-left'>:</div>
				<div class='p-isi p-left '><?php echo $row['email']; ?></div>
				<div style="clear:both"></div>
			</div>
			<div class='p-data'>
				<div class='p-lbl p-left'>Alamat</div>
				<div class='p-left'>:</div>
				<div class='p-isi p-left '><?php echo $row['alamat']; ?></div>
				<div style="clear:both"></div>
			</div>
			<div class='p-data'>
				<div class='p-lbl p-left'>Hp/telp</div>
				<div class='p-left'>:</div>
				<div class='p-isi p-left '><?php echo $row['telp']; ?></div>
				<div style="clear:both"></div>
			</div>
			<div style="margin-top:10px; text-align:center">
				<button class="button-c" style="padding:10px 20px 10px 20px;" id='tedit-p' >Edit</button>
			</div>
		</div>
		<div id='Edit-p' >
			
				
				<div style="text-align:center; color:RED;" id='hasilpr'></div>
				<div style=" margin:0px auto; width:400px; ">
					<div class="data-login" style="margin-top:0px;" >
						<label class="login-icon" style="background-image:url(images/icon/male.png);"></label>
						<input class="input-l" type="text" name="nama" required id="nama" value="<?php echo $row['nama']; ?>"/>
					</div>
					<div class="data-login" >
						<label class="login-icon" style="background-image:url(images/icon/mail.png);"></label>
						<input class="input-l" type="email" name="email" required id="email" value="<?php echo $row['email']; ?>" />
					</div>
					<div class="data-login"  >
						<label class="login-icon" style="background-image:url(images/icon/location.png);"></label>
						<input class="input-l" type="text" name="alamat" required id="alamat" value="<?php echo $row['alamat']; ?>"/>
					</div>
					<div class="data-login"  >
						<label class="login-icon" style="background-image:url(images/icon/cont.png);"></label>
						<input class="input-l" type="text" name="telp" required id="telp" value="<?php echo $row['telp']; ?>"/>
					</div>
					<div style="text-align:center; margin-top:10px;" >
						<button class="button-c" style="padding:10px 20px 10px 20px;" type="submit" name="submit" value="Edit" >Edit</button>
						<a href="" class="button-c" style="padding:10px 20px 10px 20px;" id="t-cancel-p" >Cancel</a>
					</div>
				</div>	
			
		</div>
		</form>
		<?php  } ?>	
	</div>
	
</div>
	<script>


$('#Edit-p').hide();
$('#e-foto').hide();
$('#tedit-p').click(function()
{
$('#Edit-p').fadeIn('slow');
$('#e-foto').fadeIn('slow');
$('#view-p').hide();
return false;
});

$('#t-cancel-p').click(function()
{

$('#view-p').fadeIn('slow');
$('#Edit-p').hide();
$('#e-foto').hide();
return false;
});



function bacaGambarRm(input)
{
  if (input.files && input.files[0])
  {
	var reader = new FileReader();
	reader.onload = function (e)
	{
		$('#view-fakun').attr('src', e.target.result);	
	}
    var t=reader.readAsDataURL(input.files[0]);
  }
}
	
	
</script>



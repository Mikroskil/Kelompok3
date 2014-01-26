<script> $(document).ready(function(){ hilang();});</script>
<?php 
$id=$_REQUEST['id'];
$id_user=$_SESSION['username'];
?>
<script src="tinymcpuk/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script src="tinymcpuk/jscripts/tiny_mce/tiny_lokomedia.js" type="text/javascript"></script>
<div class="row" >
<h2 style="text-align:center;border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">Edit Data</h2>
<form action="view/edit_Proses_wisata.php" method="post" enctype="multipart/form-data">
		<div style="text-align:center; color:RED;" id='hasilre'></div>
		<div style=" margin:0px auto; width:600px; ">
		
		<?php
			$sql=mysql_query("select * from berita where user_id='$id_user' and id_berita='$id'  ");
			while ($h=mysql_fetch_array($sql))
			{
		?>
			<input name="id_berita" type="hidden" value="<?php echo $id;?>"  />
			<div class="data-login" style="margin-top:0px; width:600px;" >
				<label style="color:#000;">
					<label style="width:100px; padding-left:5px;">Judul</label>
					<span>:</span>
				</label>
				<input  style="width:450px; margin-top:-.5%; height:40px; " name="judul" id="judul" value="<?php echo $h['judul'];?>" required="required"/>
			</div>
			<div class="data-login" style=" width:600px;" >
				<label style="color:#000;">
					<label style="width:100px; padding-left:5px;">Kategori</label>
					<span>:</span>
				</label>
				<select NAME="kategori" style="height:35px; width:450px; text-align:center; border:none; border-left:1px solid RGBA(0,0,0,.5)">
					<?php 
						$sql1=mysql_query("SELECT * FROM kategori where id_kat='$h[id_kat]'");
						$ket=mysql_fetch_array($sql1);	
					?>		
						<option value='<?php echo $ket['id_kat']; ?>' selected ><?php echo $ket['nama_kat']; ?></option>
					<?php ?>
					<?php
						$perintah=("SELECT * FROM kategori order by nama_kat");
                	    $hasil=mysql_query($perintah);
                    	while($r=mysql_fetch_array($hasil))
                     {
					?>
                      <OPTION VALUE="<?php echo $r['id_kat']; ?>"><?php echo $r['nama_kat']; ?></option>                
					<?php } ?>
				</select>
			</div>
			<div class="data-login" style=" width:600px;" >
				<label style="color:#000;">
					<label style="width:100px; padding-left:5px;">Daerah</label>
					<span>:</span>
				</label>
				<input  style="width:450px; margin-top:-.5%; height:40px; " name="daerah" type="text" id="daerah" value="<?php echo $h['daerah'];?>"  required="required" size="70"/>
			</div>
			<div class="data-login" style=" width:600px; height:250px;" >
				<label style="color:#000;">
					<label style="width:100px; padding-left:5px;">Isi Data</label>
					<span>:</span>
				</label>
				<div style="padding-left:10px;">
				<textarea name="isi_berita" id="loko"><?php echo $h['isi']?></textarea>
				</div>
			</div>
			<div class="data-login" style=" width:600px;" >
				<label style="color:#000; float:left;">
					<label style="width:100px; padding-left:5px;">Gambar</label>
					<span>:</span>
				</label>
				<div style="float:left;  width:450px; height:40px; position:relative; overflow:hidden;">
					<div style="padding-left:5px;" id="a-hasil-g"></div>
					<input style="position:absolute; width:450px; top:0px; height:40px; opacity:0" onchange="bacaGambarRm(this);"   name="fupload" type="file" size="50" />
				</div>
				<div style="clear:both"></div>
			</div>
			<div style="text-align:center; margin-top:10px;" >
				<button class="button-c" style="padding:10px 20px 10px 20px;" type="submit" name="submit" value="Kirim" >Edit Data</button>
				<a href="index.php?module=t_wisata" class="button-c" style="padding:10px 20px 10px 20px;" id="t-cancel-p" >Batal</a>
			</div>
		<?php } ?>	
		</div>	
	</form>

</div>
<script>

function bacaGambarRm(input)
{
  if (input.files && input.files[0])
  {
	$('#a-hasil-g').html(input.files[0].name);
	
  }
}
</script>

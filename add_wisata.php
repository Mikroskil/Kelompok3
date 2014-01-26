<script> $(document).ready(function(){ hilang();});</script>
<?php 
$id=$_SESSION['username'];
?>
<script src="tinymcpuk/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script src="tinymcpuk/jscripts/tiny_mce/tiny_lokomedia.js" type="text/javascript"></script>
<div class="row" >
<h2 style="text-align:center;border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">Tambah Data</h2>
<form action="view/input_wisata.php" method="post" enctype="multipart/form-data">
		<div style="text-align:center; color:RED;" id='hasilre'></div>
		<div style=" margin:0px auto; width:600px; ">
			<div class="data-login" style="margin-top:0px; width:600px;" >
				<label style="color:#000;">
					<label style="width:100px; padding-left:5px;">Judul</label>
					<span>:</span>
				</label>
				<input  style="width:450px; margin-top:-.5%; height:40px; "  name="judul" type="text" id="judul"  required="required"/>
			</div>
			<div class="data-login" style=" width:600px;" >
				<label style="color:#000;">
					<label style="width:100px; padding-left:5px;">Kategori</label>
					<span>:</span>
				</label>
				<select NAME="kategori" style="height:35px; width:450px; text-align:center; border:none; border-left:1px solid RGBA(0,0,0,.5)">
						<option value='0' selected >- Pilih Kategori -</option>
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
				<input  style="width:450px; margin-top:-.5%; height:40px; " name='daerah'  id="daerah" size="70"  required="required"/>
			</div>
			<div class="data-login" style=" width:600px; height:250px;" >
				<label style="color:#000;">
					<label style="width:100px; padding-left:5px;">Isi Data</label>
					<span>:</span>
				</label>
				<div style="padding-left:10px;">
				<textarea name="isi_berita" id="loko"></textarea>
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
				<button class="button-c" style="padding:10px 20px 10px 20px;" type="submit" name="submit" value="Kirim" >Simpan</button>
				<a href="index.php?module=t_wisata" class="button-c" style="padding:10px 20px 10px 20px;" id="t-cancel-p" >Batal</a>
			</div>
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

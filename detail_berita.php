<script> $(document).ready(function(){ hilang();});</script>
<?php 
$id=$_REQUEST['id'];

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
<div class="row" >
<?php  
$query=mysql_query("select * from berita where id_berita='$id'");
while($r=mysql_fetch_array($query))
{
$counter=$r['counter'];
 ?>
<h2 style="text-align:center;border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;"><?php echo $r['judul'];  ?></h2>
	<div class=" col-xs-6 col-md-4" >
		<div class="b-f-profil" style="">
			<img id="view-fakun" src="gambar/<?php echo $r['gambar']; ?>" width="300px" height="250px" />
		</div>
	</div>
	<div class="col-md-4 ">
		<div class='p-data' style=" margin-top:10px;">
			<div class='p-lbl p-left'>tanggal</div>
			<div class='p-left'>:</div>
			<div class='p-isi p-left '><?php echo $r['tanggal']; ?></div>
			<div style="clear:both"></div>
		</div>
		<?php
		$query=mysql_query("select * from users where username='$r[user_id]'");
		$t=mysql_fetch_array($query)
		?>
		<div class='p-data' style=" margin-top:10px;">
			<div class='p-lbl p-left'>Penulis</div>
			<div class='p-left'>:</div>
			<div class='p-isi p-left '><?php echo $t['nama']; ?></div>
			<div style="clear:both"></div>
		</div>
		<div class='p-data' style=" margin-top:10px;">
			<div class='p-lbl p-left'>Dibaca</div>
			<div class='p-left'>:</div>
			<div class='p-isi p-left '><?php echo $counter; ?> kali</div>
			<div style="clear:both"></div>
		</div>
		<?php
		$q=mysql_query("select * from kategori where id_kat='$r[id_kat]'");
		$c=mysql_fetch_array($q)
		?>
		<div class='p-data' style=" margin-top:10px;">
			<div class='p-lbl p-left'>Ketegori</div>
			<div class='p-left'>:</div>
			<div class='p-isi p-left '><?php echo $c['nama_kat']; ?></div>
			<div style="clear:both"></div>
		</div>
		<div class='p-data' style=" margin-top:10px;">
			<div class='p-lbl p-left'>Daerah</div>
			<div class='p-left'>:</div>
			<div class='p-isi p-left '><?php echo $r['daerah']; ?></div>
			<div style="clear:both"></div>
		</div>
		<div class='p-data' style=" margin-top:10px;">
			<div class='p-lbl p-left'>Diskripsi</div>
			<div class='p-left'>:</div>
			<div class='p-isi p-left ' style="width:500px; height:200px; padding:5px; overflow-x:hidden;"><?php echo $r['isi']; ?></div>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
} mysql_query("update berita set counter=$counter+1 where id_berita='$id'");
?>
</div>


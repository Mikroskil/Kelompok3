<script> $(document).ready(function(){ hilang();});</script>
<?php 
$id=$_SESSION['username'];
?>
<style>
.t-header
{
 background:#222; color:#fff;
 -moz-box-shadow:  0px 3px 4px #222;
  -webkit-box-shadow: 0px 3px 4px #222;
  box-shadow: 0px 3px 4px #222;
}
.t-wisata tr
{
text-align:center;
}
.t-wisata td
{
padding:10px;
}
.t-wisata th
{
text-align:center;
}
.t-aksi
{
width:100px;
}
.t-foto
{
border-radius:4px;

-webkit-box-shadow: hsla(255, 0%, 50%, 1) 0.6em 0.8em 0.8em;
-moz-box-shadow: hsla(255, 0%, 50%, 1) 0.6em 0.8em 0.8em;
box-shadow: hsla(255, 0%, 50%, 1) 0.6em 0.8em 0.8em;
}
</style>
<div class="row" >
<h2 style="text-align:center;border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">View Data </h2>
<div style="padding-left:200px; margin-bottom:10px;">
	<a class="button-c" style="padding:5px 10px 5px 10px;" style="" href="index.php?module=add_wisata">Tambah</a>
</div>
<div style="; width:800px; margin:0 auto;  height:400px;">
<table style="width:100%;" class="t-wisata">

<tr class="t-header" >
<th>No</th>
<th>Nama Wisata</th>
<th>Foto Wisata</th>
<th colspan="2" >Aksi</th>
</tr>

<?php 

 $p = new Paging;
	$batas  = 3;
	$posisi = $p->cariPosisi($batas);
	$no = $posisi+1;
 $sql = mysql_query("SELECT * from berita where user_id='$id' ORDER BY id_berita DESC LIMIT $posisi,$batas ");
$line=1;
 while($r = mysql_fetch_array($sql))
{
if($line == 1)
{
	$bgcolor='#aaa';
	$color='#fff';
	$line=0;
}
else
{
$bgcolor = '#eee';
$color='#000';
$line=1;
}

?>
<tr bgcolor="<?php echo $bgcolor?>" style="color:<?php echo $color?>;">
<td style="display:none"><input type="hidden" value="<?php echo $r['id_berita'];?>" name="id_berita" /></td>
<td><?php echo $no; ?></td>
<td><?php echo $r['judul'];?></td>
<td><img class="t-foto" src="gambar/<?php echo $r['gambar'] ;?>" width="200" height="100"  /></td>

<td class="t-aksi">
	<div style="width:60px; float:right;">
		<a class="button-c" style="padding:5px 10px 5px 10px;" href="index.php?module=edit-d&id=<?php echo $r['id_berita']; ?>" >Edit</a>
	</div>
	<div style="clear:both"></div>
</td>
<td class="t-aksi">
	<div style="width:60px;">
		<a class="button-c" style="padding:5px 10px 5px 10px;" href="view/hapus_Proses_wisata.php?id=<?php echo $r['id_berita']; ?>" onClick="return confirm('Anda yakin?');">Hapus</a>
	</div>
</td>
</tr>
<?php $no++;  }?>
</table>
</div>
<?php 

$jmldata = mysql_num_rows(mysql_query("SELECT * from berita where user_id='$id' ORDER BY id_berita DESC"));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
?>

<div id="paging" style="text-align:center"><?php echo $linkHalaman; ?></div>
</div>

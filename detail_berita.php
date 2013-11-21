<?php 
include 'header.php';

 $id=$_GET['id'];
 $select_kat="select * from kategori order by id_kat";
 $kat=mysql_query($select_kat);

 $select="select * from berita where id_berita=".mysql_real_escape_string($id)."";
 $query=mysql_query($select);
 while($row=mysql_fetch_array($query))
 {
 $counter=$row['counter'];
 //$tgl = tgl_indo($row['tanggal']);

 
  $data .='<h3><font color="#0033FF" style="font-weight:bold; ">'.$row['judul'].'</font></h3>
  			<p><small>Tanggal Posting: <b>'.$tgl.'</b>. Penulis: <b>'.$row['user_id'].'</b>. Dibaca: <b>'.$counter.'</b> kali</small></p>
			<p><small>Kategori: <b><a href="kategori.php?id='.mysql_real_escape_string($kat["id_kat"]).'">Pantai</a></b> | Daerah : <b><a href="#">Medan</a></b> </small></p>
			<img src="gambar/'.$row['gambar'].'" class="foto-wisata" vspace="5" hspace="5" align="left">
			<p>'.$row['isi'].'</p>';
 }

?>
<!-- end header -->

	<div class="container">
		<div class="row">
			<div class="span3">
				<?php
				include 'sidebar.php';
				?>
				
            </div>

			<div class="span9">
				<div class="hero-unit">
               		<?php 
						echo $data; 
						mysql_query("update berita set counter=$counter+1 where id_berita='$_GET[id]'"); //untuk menghitung berapa kali artikel dibaca
					?>
				</div>
			</div>
		</div>
	</div>
	
	<hr />

	<?php
include 'footer.php';
?>
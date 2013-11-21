<?php
include 'header.php';
?>

<!-- bagian isi -->
	<div class="container">
		<div class="row">
			<div class="span3">
				<?php
				include 'sidebar.php';
				?>
			</div>

			<div class="span9">
				<div class="hero-unit">
                	<!-- start slide -->
                    <h2 align="center">Indonesia Flash Tour</h2>
					<img src="img/foto1.jpg" class="foto">
                    <p>Penjelasan Gambar</p>
				</div>

				<ul class="thumbnails">
                <?php
                	$tampil = "select * from berita order by id_berita DESC limit 0,10";
                  	$hasil  = mysql_query($tampil);
                  	$no = $posisi+1;
                  	while($row=mysql_fetch_array($hasil)){
						
				//$judul = preg_replace("/\s/","-",$row['judul']);
    			//$url_link = "berita".$row['id_berita']."-".$judul.".html";
						echo '<li class="span3">';
						echo '<div class="thumbnail">';
						echo'<img src="gambar/'."$row[gambar]".'" class="foto-wisata"> ';
						echo '<div class="caption">';
						echo '<h4><a href="detail_berita.php?id='."$row[id_berita]".'"> ' .$row['judul'].' </a></h4>';
						echo '<p> '.substr("$row[isi]",0,50).' </p>';
						echo '<a class="btn btn-primary" style="margin-left:160px" href="detail_berita.php?id='."$row[id_berita]".'">Detail...</a>';
						echo '</div> </div> </li>';
						
				 }
				 ?>
				</ul>

				<div class="pagination">
					<ul>
						<li class"disabled"><span>Prev</span></li>
						<li class"disabled"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>

			</div>
		</div>
        <!-- akhir isi -->
	</div>
	
	<hr />

	<br>
<?php
include 'footer.php';
?>
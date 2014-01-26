<script> $(document).ready(function(){ hilang(); $('#l-home').addClass('active').css("opacity","1");});</script>

	<div class="row">
	<?php include "slider.php"; ?>
		<div class="col-xs-12 col-md-8 ">
			<div>
			<h4 style="border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">Pemandangan Yang Dapat Anda Nikmati</h4>
				<ul class="D-home" >
				<?php
				 $p = new Paging;
						$batas  = 4;
						$posisi = $p->cariPosisi($batas);
						
                  	$hasil  = mysql_query("select * from berita order by id_berita DESC LIMIT $posisi,$batas");
                  	while($row=mysql_fetch_array($hasil)){
				?>
					<li>
						<div class="grid-home">
							<div class='gambar-home'>
								<img src="gambar/<?php echo $row['gambar'];?>" width='100%' height='150px' />
							</div>
							<div class="judul-home"><?php echo $row['judul'];?></div>
							<div class="keterangan-home">
								<?php echo substr("$row[isi]",0,50);?>
							</div>
							<div style="position:absolute; bottom:10px;right:5px;">
								<a href="index.php?module=detail_berita&id=<?php echo $row['id_berita']; ?>" class="button-c" style="padding:10px;" >Detail...</a>
							</div>
						</div>
					</li>
				<?php   } ?>
				<li style="clear:both"></li>
				</ul>
				<div style="clear:both"></div>
			</div>
			
			<?php 
			/*ikut dari class_paging*/
			$jmldata = mysql_num_rows(mysql_query("select * from berita order by id_berita ASC"));
			$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
			$linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
			
			?>
			<div id="paging" style="text-align:center"><?php echo $linkHalaman; ?></div>
			
			
		</div>

		<div class="col-md-4  ">
			<div class='daftar-list' >
				<div style="border-radius:10px; background:#fff; padding:20px;">
				<h5 style="border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">Posting Terbaru</h5>
				<ul class="list-posting">
					<?php
                        $select = mysql_query("select * from berita order by id_berita ASC");
						while($r=mysql_fetch_array($select))
                        {
					?>
						<li>
							<a href="index.php?module=detail_berita&id=<?php echo $r['id_berita']; ?>"><?php echo $r['judul'] ?></a>
						</li>
                    <?php   
						}
					?>
				</ul>
				<h5 style="border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">Daerah Wisata</h5>
				<ul class="list-daerah" >
					<?php
                        $select = mysql_query("select DISTINCT daerah from berita order by daerah DESC");
						while($r=mysql_fetch_array($select))
                        { ?>
						
						<li><a href="index.php?module=K_daerah&nilai=<?php echo $r['daerah']; ?>"><?php echo $r['daerah']; ?></a></li>
                       
					<?php	}
					?>
				</ul>
				</div>
			</div>
		</div>
	</div>


			

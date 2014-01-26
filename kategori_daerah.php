<script> $(document).ready(function(){ hilang();});</script>
<?php 
$nilai=$_REQUEST['nilai'];
?>
<div class="row" >
<h2 style="text-align:center;border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;"><?php echo $nilai; ?></h2>
<ul class="D-home" >
				<?php
				
                  	$hasil  = mysql_query("select * from berita where daerah='$nilai' order by id_berita DESC");
					
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
				<?php  } ?>
				<li style="clear:both"></li>
				</ul>
</div>

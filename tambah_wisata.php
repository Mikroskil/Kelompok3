<?php
include 'header.php';
?>

<!-- bagian isi -->
	<div class="container">
		<div class="row">
			<div class="span3">
				<!-- awal sidebar user -->
                <?php include 'sidebar_user.php';?>
                <!-- akhir sidebar -->
			</div>

			<div class="span9">
				<div class="tambahbrt">
                	</div>
                	
                	<hr />
          		<div class="hero-unit">
                	<!-- start slide -->
                    <form action="edit_Proses_Wisata.php" method="post" enctype="multipart/form-data">
		    <table border="1" width="100%">
		    
		    <?php
						$sql=mysql_query("select * from berita where user_id='$username' and id_berita='$id' ");
						while ($h=mysql_fetch_array($sql))
						{
						
					?>
					
					<tr>
					<td><input name="id_berita" type="hidden" value="<?php echo $id;?>"  /></td>
					</tr>
                    <tr>
                    	<th>Judul</th>
		    
		    <td><input name="judul" type="text" id="judul" value="<?php echo $h['judul'];?>" required="required"  /></td>
                    </tr>
                    <tr>
                    	<th>Kategori</th>
                        	<td>
    	                        <SELECT NAME="kategori" WIDTH=250 > 
	                                        <?php
											$sql1=mysql_query("select * from kategori where id_kat='$h[id_kat]'");
											while($ket=mysql_fetch_array($sql1)) 
											{
        	                                echo "<option value=0 selected>$ket[nama_kat]</option>";
											}
             	                            $perintah=("SELECT * FROM kategori where id_kat!='$h[id_kat]' order by nama_kat");
                	                        $hasil=mysql_query($perintah);
                    	                    while($r=mysql_fetch_array($hasil))
                        	                {
                            	            echo("<OPTION VALUE=$r[id_kat]>$r[nama_kat]</option>");
                                	        }
                                    	    echo "</option>";
                                        	?>
                             </SELECT>
                        </td>
                    </tr>
                    <tr>
                    	<th>Gambar</th>
                        <td><input name="fupload" type="file" size="50" /></td>
                    </tr>
                    <tr>
                        	<td colspan="2"><input type="submit" value="Edit" class="btn btn-success"> <input class="btn btn-success" type="button" onClick="self.history.back()" value="Batal"></td>
                          
                        </tr>
						<?php } ?>
                    </table>
                    </form>
				</div>
               

			</div>
		</div>
	</div>
	
	<hr />

	<br>
<?php
include 'footer.php';
?>

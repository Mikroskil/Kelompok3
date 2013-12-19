<?php
include 'menu_user.php';
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
                    <form action="input_wisata.php" method="post" enctype="multipart/form-data">
                    <table border="0" width="100%">
                    <tr>
                    	<th>Judul</th>
                        <td><input name="judul" type="text" id="judul"  required="required"  /></td>
                    </tr>
                    <tr>
                    	<th>Kategori</th>
                        	<td>
    	                        <SELECT NAME="kategori" WIDTH=250 > 
	                                        <?php
        	                                echo "<option value=0 selected>- Pilih Kategori -</option>";
             	                            $perintah=("SELECT * FROM kategori order by nama_kat");
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
                    	<th>Daerah</th>
                        <td><input name="daerah" type="text" id="daerah"  required="required" size="70" /></td>
                    </tr>
                    <tr>
                    	<th>Isi</th>
                        <td><textarea name="isi_berita" id="loko"></textarea></td>
                    </tr>
                    <tr>
                    	<th>Gambar</th>
                        <td><input name="fupload" type="file" size="50" /></td>
                    </tr>
                    <tr>
                        	<td colspan="2"><input type="submit" value="Simpan" class="btn btn-success"> <input class="btn btn-success" type="button" onClick="self.history.back()" value="Batal"></td>
                          
                        </tr>
                    </table>
                    </form>
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

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
				<div class="hero-unit">
                	<!-- start slide -->
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <table border="1" width="100%">
                    <tr>
                    	<th>No</th>
                        <th>Nama Wisata</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                    </tr>
                    <tr>
                   		<td>1</td>
                    	<td>Danau Toba</td>
                        <td>Deskripsi mengenai danau toba</td>
                        <td align="center"><img src="img/foto1.jpg" class="img-wisata" /></td>
                    </tr>
                    </table>
				</div>
               
               <!-- Pagination-->
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
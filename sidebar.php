<div class="well">
                                
					<form class="form login-form" method="post" action="otentikasi.php">
						<h2>Login</h2>
						<div>
                        <p><small>
                        <?php 
								//kode php ini kita gunakan untuk menampilkan pesan eror
								if (!empty($_GET['error'])) {
									if ($_GET['error'] == 1) {
										echo '<font color=red>Username dan Password belum diisi!</font>';
									} else if ($_GET['error'] == 2) {
										echo '<font color=red>Username belum diisi!</font>';
									} else if ($_GET['error'] == 3) {
										echo '<font color=red>Password belum diisi!</font>';
									} else if ($_GET['error'] == 4) {
										echo '<font color=red>Username dan Password tidak terdaftar!</font>';
									}
									
								}
								?>
                                </small></p>
							<label>Username</label>
							<input placeholder="Username" name="username" type="text" />

							<label>Password</label>
							<input placeholder="Password" name="password" type="password" />

							<label class="checkbox inline">
								<input type="checkbox" id="RememberMe" value="option1"> Remember me
							</label>

							<br /><br />

							<button type="submit" class="btn btn-success" style="margin-left:160px">Login</button>
						</div>
						<br />
						<a href="#">register</a>&nbsp;&#124;&nbsp;<a href="#">forgot password?</a>
					</form>
				</div>

				<div class="well">
                <div class="pos">
					<ul class="nav nav-list">
						<li class="nav-header">Posting Terbaru</li>
						<?php
                        $select = mysql_query("select * from berita order by id_berita DESC limit 0,10");
						
						while($r=mysql_fetch_array($select))
                                {
								
                                echo '<li><a href="detail_berita.php?id='."$r[id_berita]".'"> ' .$r['judul'].' </a></li>';
                                
								}
						?>
						

						<li class="nav-header">Daerah wisata</li>
						<li>
							<a href="#">Medan</a>
						</li>
						<li>
							<a href="#">Berastagi</a>
						</li>
						<li>
							<a href="#">Jakarta</a>
						</li>
					</ul>
                    </div>
				</div>
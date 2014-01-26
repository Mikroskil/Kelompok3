<script> $(document).ready(function(){ hilang();});</script>
<div class="row" >
<h2 style="text-align:center;border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">Register</h2>
	<form method="post" action="view/member-proses.php" id="frmregis" >
		<div style="text-align:center; color:RED;" id='hasilre'></div>
		<div style=" margin:0px auto; width:400px; ">
			<div class="data-login" style="margin-top:0px;" >
				<label class="login-icon" style="background-image:url(images/icon/male.png);"></label>
				<input class="input-l" placeholder="Username" type="text" name="username" required id="username"/>
			</div>
			<div class="data-login" >
				<label class="login-icon" style="background-image:url(images/icon/male.png);"></label>
				<input class="input-l" placeholder="Nama" type="text" name="nama" required id="Nama" />
			</div>
			<div class="data-login" >
				<label class="login-icon" style="background-image:url(images/icon/mail.png);"></label>
				<input class="input-l" placeholder="Email" type="email" name="email" required id="email" />
			</div>
			<div class="data-login" >
				<label class="login-icon" style="background-image:url(images/icon/cont.png);"></label>
				<input class="input-l" placeholder="Hp/Telepon" type="tel" name="telp" required id="telp" />
			</div>
			
			<div class="data-login">
				<label class="login-icon" style="background-image:url(images/icon/locked2.png);"></label>
				<input class="input-l" placeholder="Password" type="password" name="pass" id="password" />
			</div>
			<div class="data-login">
				<label class="login-icon" style="background-image:url(images/icon/locked2.png);"></label>
				<input class="input-l" placeholder="Confirm Password" type="password" name="confirm" id="confirm_password" />
			</div>
			<div class="data-login">
				<label class="login-icon" style="background-image:url(images/icon/views.png);"></label>
				<select name="pertanyaan" class="select-l">
					<option value='Siapa Nama Depan Ibu Anda ?'>Siapa Nama Depan Ibu Anda ?</option>
					<option value='Apa Cita-Cita Anda ?'>Apa Cita-Cita Anda ?</option>
					<option value='Tim Sepak Bola Favorit Anda ?'>Tim Sepak Bola Favorit Anda ?</option>
				</select>
			</div>
			<div class="data-login" style="margin-bottom:20px;">
				<label class="login-icon" style="background-image:url(images/icon/pen.png);"></label>
				<input class="input-l" placeholder="Jawaban Anda" type="text" name="Jawab" required id="Jawaban" />
			</div>
			<div style="text-align:center" >
				<button class="button-c" style="padding:10px 20px 10px 20px;" type="submit" name="submit" value="Kirim" >Simpan</button>
			</div>
		</div>	
	</form>
</div>

<script>
jQuery(function($){  
      $("#frmregis").submit(function() {
       
		var post_data = $(this).serialize();  
		var form_action = $(this).attr("action");  
		var form_method = $(this).attr("method");  
		$.ajax({  
            type :form_method,  
			url :form_action,  
            data :post_data,		
			success: function(aksi)
			{
				if (aksi=='1')
				{
				$('#hasilre').html("Isi Confirm Password anda sesuai dengan Password anda");
				}
				else if (aksi=='2')
				{
				$('#hasilre').html("Silahkan isi data anda dengan benar");
				}
				else if (aksi=='0')
				{
				alert('Terima kasih sudah mendaftar, silahkan login untuk masuk ke dashboard anda');
				 window.location = "index.php?module=login";
				}
				else if (aksi=='3')
				{
				$('#hasilre').html("Maaf UserName Telah Di Gunakan");
				}				
			} 
			});  
			return false;
	});
    });  

</script>

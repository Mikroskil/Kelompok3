<script> $(document).ready(function(){ hilang();});</script>
<style>
.forget-pass
{
color:rgba(0,0,0,.7);
}
.forget-pass:hover
{
text-decoration:none;
color:rgba(0,0,0,1);
}
</style>
<div class="row" style="height:440px;">
<h2 style="text-align:center;border-bottom:1px solid rgba(0,0,0,.1);padding-bottom:10px;">Login</h2>
	
	<form method="post" action="view/otentikasi.php" id="frmlogin"  >
		<div style=" margin:0px auto; width:400px; ">
			<div style="text-align:center; color:RED;" id='hasil'></div>
			<div class="data-login" style="margin-top:20px;" >
				<label class="login-icon" style="background-image:url(images/icon/male.png);"></label>
				<input class="input-l" placeholder="Username" name="username" type="text" />
			</div>
			<div class="data-login" style="margin-top:10px;">
				<label class="login-icon" style="background-image:url(images/icon/unlocked.png);"></label>
				<input class="input-l" placeholder="Password" name="password" type="password" />
			</div>
			<div>
				<label class="checkbox inline">
				<input type="checkbox" id="RememberMe" value="option1">
				<label>Remember me</label>
				
				<div style="clear:both"></div>
			</div>
			<div style="text-align:center">
				<button type="submit" class="button-c" style="padding:10px 20px 10px 20px;" >Login</button>
			</div>
		</div>	
	</form>
</div>

<script>
jQuery(function($){  
      $("#frmlogin").submit(function() {
       
		var post_data = $(this).serialize();  
		var form_action = $(this).attr("action");  
		var form_method = $(this).attr("method");  
		$.ajax({  
            type :form_method,  
			url :form_action,  
            data :post_data,		
			success: function(aksi)
			{
				if (aksi=='0')
				{
				$('#hasil').html("Maaf data masih ada yang kosong");
				}
				else if (aksi=='2')
				{
				$('#hasil').html("Username dan Password tidak terdaftar!");
				}
				else
				{
				 window.location = "index.php?module=home";
				}				
			} 
			});  
			return false;
	});
    });  

</script>

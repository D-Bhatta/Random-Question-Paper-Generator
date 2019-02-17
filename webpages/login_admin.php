<?php include("header.php"); ?>
<body class="container">
	<div class="login">
		<div class="block1">
		<form name="frmloginadmin" action="login_verify_console.php" method="post">
				<img src="../images/admin.png" id="admin">
				<br/>
				<div class="form_input">
					<input type="text" name="name" placeholder="Username">
					<br/>
					<input type="password" name="password" placeholder="Password">
					<br/>
					<button type="submit" value="Login" class="btn-login">Login</button>
					<br/>
					<a href="forget.html">forgot your password?</a>
					<br/>
					
					<div class="social_media">
						<br/>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google"></a>
						<a href="#" class="fa fa-github"></a>
					</div>
				</div>

			</form>
			
		</div>
	</div>
	<?php include("footer.php"); ?>
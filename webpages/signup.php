<?php include("header.php"); ?>
<body class="container">
	<div class="login">
		<div class="block1">
			<form name="frmsignup" action="signup_verify.php" method="post">
				<img src="../images/signup.png" id="user">
				<div class="form_input">
					<input type="text" name="name" placeholder="Name">
					<input type="text" name="email" placeholder="Email">
					<br/>
					<input type="password" name="password" placeholder="Password">
					<br/>
					<br/>

					<input type="submit" value="Submit" class="btn btn-primary">
					<br/>
					
			</form>
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>
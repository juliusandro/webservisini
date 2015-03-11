<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login Admin</title>
	  <link rel="stylesheet" href="css/login.css">
</head>
<body>



<section class="container">
	<div class="login">

		<h1>Selamat datang Admin</h1>
		
		<form method="post" action="check_login.php">

			<p><input type="text" name="username" id="username" value="" placeholder="Username"></p>
	
			<p><input type="password" name="password" id="password" value="" placeholder="Password"></p>
	
			<p><img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /></p>
	
			<P><input type="text" name="captcha_code" size="10" maxlength="6" /></p>
	
			<p class="remember_me">
			<label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
			</label>
			</p>
		
			<p class="submit"><input type="submit" name="commit" value="Login"></p>
	
		</form>


</div>
</section>
</body>
</html>

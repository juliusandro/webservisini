<?php
session_start();
$myid=session_id();
if( $myid!="admin") {
header("location:check_login.php"); }
?>

<!Doctype html>
<html>
<head>
<title>administrasi</title>
<link href="Style_admin.css" rel="stylesheet">
<head>
<body>
<header>SERVISINI.COM</header>

<div id='header_index_admin'>
	<ul id='menu'>
		<li><a> Informasi Servis Motor</a></li>
		<li><a> Review Servis Motor</a></li>
		<li><a> Rekomendasi</a></li>
	</ul>
</div>

<div id='sign_out'>
	<p>Howdy admin , <a href='Sign_out.php'>keluar</a></p>
</div>

</body>

</html>
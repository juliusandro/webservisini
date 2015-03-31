<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> <?php echo $title; ?> </title>
      
    <!-- Bootstrap -->
    <link  href="<?php echo base_url("resource/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link  href="<?php echo base_url("resource/css/style-site-theme.css"); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
          
  </head>
<body>
    <div class="container">
        
    <div class="page-header">
        <h1>SERVISINI.com</h1>
        <h3><a href="<?php echo base_url("/login/logout"); ?>">log out</a></h3>
    </div>  
    
    <div class="wrap">
        <ul class="nav nav-pills nav-justified">
            <li class="active" ><a href= "<?php echo base_url("//administration/indexAdmin"); ?>">Beranda admin</a></li>
            <li><a href= "<?php echo base_url("/administration/editDaftarMotor"); ?>">Edit Informasi Bengkel</a></li>
            <li><a href= "<?php echo base_url("/siteroute/recomended"); ?>">review Servis Motor</a></li>
            <li><a href= "<?php echo base_url("/siteroute/contactUs"); ?>">Edit Rekomendasi</a></li>
        </ul>    
        

       
    </div>
    </div>
    
    <div class="container">
<div class="container adminContainer">



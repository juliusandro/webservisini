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
    <div class="titleLogin">
    <h1>ADMIN SERVISINI.COM</h1>
    </div>
    <div class="container loginContainer">
        <div class="container labelLogin">
           <?php echo validation_errors(); ?>
            <form class="form-horizontal" action="<?php echo base_url("login/loginAuthentication/") ?>" method="post">
                
                <div class="form-group">
                   <label for="inputEmail" class="control-label col-xs-2">Email</label>
                    <div class="col-xs-10">
                        <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="inputPassword" class="control-label col-xs-2">Password</label>
                    <div class="col-xs-10">
                        <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                
            </form>
           
            
        </div>
    </div>
</body>

</html>
<?php


$username = $_POST['username']; 
$password = $_POST['password']; 
$check_captcha = $_POST['captcha_code'];
$msg ='';

session_id("login");
include_once $_SERVER['DOCUMENT_ROOT'] . "/coba/securimage/securimage.php";
$securimage = new Securimage();				
						
							

		if(isset($username, $password)) {
				ob_start();
			
					
					require 'connection.php';
					mysql_select_db ('db.servisini');

					$sql="SELECT * FROM admin678 WHERE nama_id='$username' and pass=('$password')";
					$result=mysql_query($sql);

					$count=mysql_num_rows($result);
    
						if($count==1){
								
								
							
		
								if ($securimage->check($check_captcha) == false) {
								$msg="wrong capthcha";
								header("location:login_form(basic).php?msg=$msg");
								exit;
								}		
								session_regenerate_id();
								session_destroy();
								session_id("admin");
								session_start();
								
								header("location:index.php");
								
																    
						}
							else   { $msg = "wrong username and password ";
									header("location:login_form(basic).php?msg=$msg");}
									ob_end_flush();
		}
		
		else {		
		header("location:login_form(basic).php?msg=Please enter some username and password");
					
			}


?>

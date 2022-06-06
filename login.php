<?php
require_once('config/function.php');
include('config/checksession.php');


if (!empty(isset($_POST['uname']))) {
    $status=logincheck(trim($_POST['uname']),trim($_POST['password']));
    $fname=checkUType(trim($_POST['uname']),3);
    $usertype=checkUType(trim($_POST['uname']),1);
    $interface=checkUType(trim($_POST['uname']),2);

    if ($status==1){
  
        $_SESSION['UserID']=$_POST['uname'];
        $_SESSION['UserType']=$usertype;
        $_SESSION['Interface']=$interface;
        goto2($interface,"Welcome to the Portal , ".$fname);
    }
    else{
        goto2("login.php","Login Fail, Please insert a correst email and password");
    }
} 
else{
    if (isset($_COOKIE['loginuser'])&&(isset($_COOKIE['loginpass'])))
    {
      $cu=$_COOKIE['loginuser'];
      $cp= $_COOKIE['loginpass'];
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login to Earth Hand</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/login.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="images/project-logo.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/project-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <style>
            a:hover{
            color:pink;
            }
        </style>
        
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="coverpic">
                            <img src="images/logo.png" alt="cover photo" width="400" height="120">
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <!--<h1><strong>Earth Hand</strong> Login Form</h1>-->
                            <div class="description">
                            	<p>
                                    powered by <a href="http://azmind.com"><strong style="color:green;">ZHAZHA</strong></a> 
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        	
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
                                        <input style="color:black;" type="email" name="uname" class="form-username form-control" placeholder="Email..">	
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Password</label>
                                        <input style="color:black;" type="password" name="password" class="form-password form-control" placeholder="Password..">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
                                    <hr>
                                    <div style="color: white;">
                                        New member?
                                        <a href="register.php">Register</a> here
                                        <br>
                                        Forgot Password?
                                        <a href="forgotpw.php">Click</a> here
                                    </div>
			                    </form>
                                
		                    </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
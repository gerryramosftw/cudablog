<?php
 //redirecting to a new page

 function redirect_to($new_location){
 header ("Location: ". $new_location);
 exit;
 }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>

        <title>Form</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barracuda Blog</title>

    <!-- Bootstrap Core CSS and Custom CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Custom CSS -->
<!--    <link href="css/styles.min.css" rel="stylesheet">
-->
    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">


    </head>
    <body style="background-color:#235;">

    <div class="container">
        <p style="color:#fff">Welcome to Gerry's Psuedo
        <img class="center-block;" src="img/logo-login-bcc.png" style="margin: 100px 0 20px 0;">
        </p>
        <div class="jumbotron" style="text-align:center; background-image:url(img/gradient.svg.svg)">
        <form action="form_processing.php" method="post">
          Username: <input type="text" name="username" value="" /><br />
          Password: <input type="password" name="password" value="" /><br />
            <br />
          <input type="submit" name="submit" value="Submit" />
        </form>
        </div>
    </div>
    </body>
</html>


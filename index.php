

<?php
 //redirecting to a new page
 function redirect_to($new_location){
 header ("Location: ". $new_location);
 exit;
 }
?>
<?php
                if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
                        redirect_to("homep.php");
                } else {
//                        redirect_to("nopass.php");
                }
?>
<!-- <?php include("layouts/header.php"); ?>
-->
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

<?php include("layouts/footer.php"); ?>

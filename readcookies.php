<!doctype html public>

<html lang="en">
    <head>
        <title>Testing Cookies</title>
    </head>

    <body>
    <?php
    /*
        $name = "username";
        $value = "mheller";
        $expire = time() + (60*60*24*7);
        setcookie($name, $value, $expire);
    */
   // echo "<h1>Cookies have been set</h1>";
    echo "<pre>"; 
    $logged_in = $_COOKIE["username"];
    if (!$logged_in) {
    echo "No one is logged in.";
    } else {
    echo "The user logged in is: " . $logged_in; 
    }
    echo "</pre>";

    ?>



    </body>

</html>

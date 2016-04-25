<!doctype html public>

<html lang="en">
    <head>
        <title>Testing Cookies</title>
    </head>

    <body>
    <?php
        $name = "username";
        $value = "mheller";
        $expire = time() + (60*60*24*7);
        setcookie($name, $value, $expire);

        echo "<h1>Cookies have been set</h1>";
    ?>



    </body>

</html>

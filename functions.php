<?php
 //redirecting to a new page

 function redirect_to($new_location){
 header ("Location: ". $new_location);
 exit;
 }

?>

<?php
                if (isset($_COOKIE["username"])) {
                } else {
                        redirect_to("nopass.php");
                }
?>


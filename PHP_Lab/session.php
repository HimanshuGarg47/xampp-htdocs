<?php
// start the session 
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
        if(isset($_SESSION['counter']))
        {
            $_SESSION['counter'] += 1;

        }
        else{
            $_SESSION['counter'] = 1;
        }

        $msg = "you have visited this page ". $_SESSION['counter'];
        $msg .= " time in this session. <br>";
        echo ($msg);

        $_SESSION["fav_publisher"] = "Eagle Parkashan";
        $_SESSION["fav_subject"] = "PHP";
        echo "My favourite Pub is " . $_SESSION["fav_publisher"];
        //echo "And my favourite subject is ". $_SESSION["fav_subject"] . ". ";
        ?> 
    </body>
</html>
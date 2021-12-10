<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Hitesh Garg";
setcookie($cookie_name, $cookie_value);  // 5 minute
?>

<!-- <html>

<body>
    <?php
    // 2021-11-11T06:50:57.663Z
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Sorry not recognized!";
    } else {
        echo "Hello '" . $cookie_value . "'!<br>";
        echo "Your name is : " . $_COOKIE[$cookie_name] . "<br>";
        echo "your account is valid for 30 days";
    }
    ?>
</body>

</html> -->
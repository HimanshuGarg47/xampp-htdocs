<?php
echo "hello";
    $email_id = $_POST['email_add'];
    $password = $_POST['Password'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<div class="alert alert-success" role="alert"> '. '$email_id' . ' successfulled logged in</div>';
    }
    ?>
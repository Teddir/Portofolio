<?php
session_start();
// cek status
if (isset($_SESSION['status'])) {
    header("location: home.php");
}
require('controller_login.php');

// submit
if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $password = $_POST['pass'];

    $connect = new connectPdo();
    $login = $connect->login($name, $password);
    if ($login['status'] == 'error') {
        echo $login['msg'];
    } else {
        $_SESSION['status'] = 'loged_in';
        $_SESSION['name'] = $name;
        header("location: home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    <h1>Login </h1>
        <form action="" method="post">
            <label for="">NAMA</label>
            <input type="text" name="name" value="" cellholder="a">
            <label for="">PASSWORD</label>
            <input type="password" name="pass">
            <input type="submit" name="submit" value="Login">
        </form><br><br>
        <div class="text-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
</body>
</html>


<?php
require 'controller_signup.php';

$conn = new connectPdo();

if (isset($_POST['submit'])) {
    $nama = $_POST['name'];
    $password = $_POST['password'];

    if (empty($nama)) {
        header("Location: 2.php?error=User Name is required");
        exit();
    }elseif (empty($password)) {
        header("Location: 2.php?error=Password is required");
        exit(); 
    }
    elseif ($conn->insertData($nama, $password)) {
    echo "<script>
            alert('REGISTARSI BERHASIL!');
            document.location.href='2.php' //up to you
        </script>";
    }else
    echo "<script>
            alert('REGISTRASI GAGAL!');
            document.location.href='2.php'
        </script>";
}
$dataBarang = $conn->tampilData("login1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>REGISTARSI</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="" method="post">
    <div class="login-box">
        <h1>Registrasi</h1>
        <div class="textbox">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <input type="text" placeholder="Name" name="name">
        </div>

        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password">
        </div>
        <button class="btn" type="submit" name="submit">Sig in</button>
            <i class="fa fa-spinner" aria-hidden="true">...</i>

    </div>

</body>
</html>

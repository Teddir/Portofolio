<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/register.css">
</head>

<body>
    <?php
    if ($_SESSION['user']['status'] == 'Logged In') {
        header('Location: ' . BASEURL . '/Blog');
    }
    ?>
</body>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="row non-gutters mt-4">
        <div class="col-md-2 bg-primary mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?= BASEURL; ?>/Admin/User"><i class="fa fa-address-card-o mr-2" aria-hidden="true"></i>
                        Admin</a>
                    <hr class="bg-white">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= BASEURL; ?>/Admin/detail"> <i class="fa fa-tachometer mr-2" aria-hidden="true"></i>
                        Dashbord</a>
                    <hr class="bg-white">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= BASEURL; ?>/Admin/Pengaturan"><i class="fa fa-cogs mr-2" aria-hidden="true "></i>
                        Pengaturan</a>
                    <hr class="bg-white">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        -</a>
                    <hr class="bg-secondry">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        -</a>
                    <hr class="bg-secondry">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        -</a>
                    <hr class="bg-secondry">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        -</a>
                    <hr class="bg-secondry">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        -</a>
                    <hr class="bg-secondry">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?page=4"><i class="fa fa-chevron-circle-left mr-2" aria-hidden="true"></i>
                        Keluar</a>
                    <hr class="bg-white">
                </li>
            </ul>
        </div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button type="button" class="btn btn-outline-light">Search</button>
            </form>
        </nav>
        <br>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Beranda<?= $data['title']; ?></title>
        <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
        <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="<?= BASEURL; ?>/assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL; ?>">DASHBORD</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= BASEURL; ?>">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                        </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/about">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/about">Statistic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/about">Login</a>
                                </li>
                    </ul>
                </div>
            </div>
        </nav>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Beranda<?= $data['title']; ?></title>
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
        <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="<?= BASEURL; ?>/assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="<?= BASEURL; ?>/assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/style.css">
   <!-- Weather css -->
   <link href="<?= BASEURL; ?>/assets/css/svg-weather.css" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/responsive.css">
   <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="<?= BASEURL; ?>/assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="<?= BASEURL; ?>/assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="<?= BASEURL; ?>/assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/responsive.css">

    </head>

    <body style = 'background-image: url("<?= BASEURL; ?>/assets/images/<?= $data['background']; ?>"); '>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL; ?>">SILN</a>
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
                            <a class="nav-link" href="<?= BASEURL; ?>/siswa">Siswa</a>
                        </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/daftarsekolah">Daftar Sekolah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/berita">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/visimisi">Visi Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>/login">Login</a>
                                </li>
                                


                    </ul>
                </div>
            </div>
        </nav>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="keyword" content="tonote, remote online notary, transaction, signatory, signature, legal binding">
    <meta name="description"
          content="ToNote is a legally binding and fully remote way to sign, notarize and share documents with ease. A convenient and remote way of closing transactions.">
    <meta name="author" content="ToNote">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="ToNote"/> <!-- website name -->
    <meta property="og:site" content="<?php echo route_to('App\Controllers\Home::index'); ?>"/> <!-- website link -->
    <meta property="og:title" content="ToNote - A convenient and remote way of closing transactions"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="ToNote is a legally binding and fully remote way to sign, notarize and share documents with ease. A convenient and remote way of closing transactions."/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="<?php echo route_to('App\Controllers\Home::index'); ?>/img/app-product.png"/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="<?php echo route_to('App\Controllers\Home::index'); ?>"/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="website"/>

    <!--title-->
<!--    <title>--><?//= $title ?><!-- - ToNote</title>-->
    <title>ToNote - A convenient and remote way of closing transactions</title>

    <!--favicon icon-->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap"
          rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!--animated css-->
    <link rel="stylesheet" href="css/animate.min.css">

    <!--Owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>

<!--header section start-->
<header class="header custom-header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav white-bg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo route_to('App\Controllers\Home::index'); ?>">
                <img src="img/logo.svg" width="120" alt="logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo route_to('App\Controllers\Home::index'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">Become a Remote Online Notary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <div class="action-btn">
                            <a class="page-scroll btn solid-btn" href="#join-list">Notify Me</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->
</header>
<!--header section end-->
<?php include 'shadows_config.php'?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title><?=$title?></title>
        <meta name="author" content="K. Abell | nightscrawl.net" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/1552b45d46.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="container">

            <header>

                <div class="banner desktop" role="banner">
                    <a href="index.php"><img src="images/kai_banner-volt.png" alt="black and white image of a man with intense gaze, focused on eyes" title="Protagonist Kai Trevelyan" /></a>
                </div>

                <div class="header-text mobile">
                    <span class="name">Andrew Berac</span><br />
                    <span class="title">The Shapes Between Shadows</span>
                </div>

            </header>

            <nav class="topnav" id="myTopnav"><!--

                <?=makeLinks($nav1)?>
                --><a class="icon" onclick="nav()"><i class="fas fa-bars"></i></a>
                <!-- responsive top nav: https://www.w3schools.com/howto/howto_js_topnav_responsive.asp -->

            </nav>


            <div class="content">

                <main>
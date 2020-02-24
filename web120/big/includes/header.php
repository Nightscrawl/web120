<?php include 'big_config.php'?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>BIG</title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/menu.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="https://kit.fontawesome.com/1552b45d46.js" crossorigin="anonymous"></script>
    </head>
    
    <body>
    
        <div class="container">

            <header>
                <h1>Web Dev Examples by Kira Abell</h1>
            </header>

            <nav class="cssmenu">
                <ul>
                    <li><a class="portal-link" href="../index.php"><i class="fas fa-dragon" aria-hidden="true"></i> WEB120 Portal</a></li><!--
                    --><li><a href="index.php"><i class="fas fa-home" aria-hidden="true"></i> Home</a></li><!--
                    --><li><a href="#">Research <i class="fas fa-angle-down" aria-hidden="true"></i></a>
                       <ul>
                          <li><a href="res-v-mobile.php">Responsive vs. Mobile</a></li>
                          <li><a href="fb-grid.php">Flexbox & Grid</a></li>
                          <li><a href="galleries.php">Galleries</a></li>
                          <li><a href="shopping-carts.php">Shopping Carts</a></li>
                       </ul></li><!--
                    --><li><a href="#">Google <i class="fas fa-angle-down" aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="map.php">Map</a></li>
                            <li><a href="youtube.php">YouTube</a></li>
                        </ul></li><!--
                    --><li><a class="camera-link" href="webcam.php"><i class="fas fa-video" aria-hidden="true"></i> Webcam</a></li>
                 </ul>
            </nav>
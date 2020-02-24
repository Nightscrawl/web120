<?php

/* portal-config.php
    Used to store all of our web120 configuration information */


//helps avoid date errors
date_default_timezone_set('America/Los_Angeles');


//prevents data from being sent early
ob_start();


//echo $_SERVER['PHP_SELF'];

/* applies the basename() function to strip off any folder info,
    storing only the page name inside a constant -- this_page */

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;


//die;

/* creates a switch to allow dynamic ites to swamp out what we want on our pages
    this switch dynamically updates the title for each page */
switch(THIS_PAGE) {

    case 'index.php':
        $title = "BIG: Web Dev Examples by Kira Abell";
        $logo = 'fas fa-crow';
    break;

    case 'calendar.php':
        $title = "BIG: Google Calendar";
        $logo = 'far fa-calendar-alt';
    break;

    case 'map.php':
        $title = "BIG: Google Map";
        $logo = 'fas fa-map-marker-alt';
    break;

    case 'webcam.php':
        $title = "BIG: Webcam";
        $logo = 'far fa-eye';
    break;

    case 'youtube.php':
        $title = "BIG: YouTube";
        $logo = 'fab fa-youtube';
    break;

    case 'fb-grid.php':
        $title = "BIG: Flexbox & Grid";
        $logo = 'fas fa-border-style';
    break;

    case 'res-v-mobile.php':
        $title = "BIG: Responsive vs. Mobile";
        $logo = 'fas fa-mobile-alt';
    break;

    case 'shopping-carts.php':
        $title = "BIG: Shopping Carts";
        $logo = 'fas fa-shopping-cart';
    break;

    case 'galleries.php':
        $title = "BIG: Galleries";
        $logo = 'far fa-images';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';  // no logo by default
}
/* then the php short tag -- <?=$title?> -- is placed on the header.php */

?>
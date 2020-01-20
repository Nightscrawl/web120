<?php

/*
portal-config.php
Used to store all of our web120 configuration information
*/

//helps avoid date errors
date_default_timezone_set('America/Los_Angeles');


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
        $title = "K. Abell's Web 120 Portal";
    break;

    case 'aia.php':
        $title = "K. Abell's Web 120 Portal - AIA";
    break;

    case 'flowchart.php':
        $title = "K. Abell's Web 120 Portal - Flowchart";
    break;

    case 'contact.php':
        $title = "K. Abell's Web 120 Portal - Contact Me";
    break;

    default:
        $title = THIS_PAGE;
}
/* then the php short tag -- <?=$title?> -- is placed on the header.php */


/* 
<li><a class="currentPage" href="index.php">Welcome</a></li>
<li><a href="big/index.php">Big</a></li>
<li><a href="aia.php">AIA</a></li>
<li><a href="flowchart.php">Flowchart</a></li>
<li><a href="fp/index.php">Final Project</a></li>
<li><a href="contact.php">Contact</a></li>
*/

/* creates an array to store the nav items */

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contact.php'] = "Contact";


/* creates a function to swap the items in the nav1 array
the current page -- this_page -- will gain the class "currentPage" that shows selection
if it's not this_page, this class is left off */

function makeLinks($nav1) {
    $myReturn = '';
    foreach($nav1 as $url => $text) {
        if($url == THIS_PAGE) {
            $myReturn .= "<li><a class=\"currentPage\" href=\"$url\">$text</a></li>";
        }
        else {
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }

    return $myReturn;

}
/* to work, add <?=makeLinks($nav1)?> between ul and li tags; comment out li tags to hide */


?>
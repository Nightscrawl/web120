<?php

/* shadows-config.php
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
        $title = "Andrew Berac | Home";
    break;

    case 'author.php':
        $title = "Andrew Berac | Author";
    break;

    case 'journal.php':
        $title = "Andrew Berac | Journal";
    break;

    case 'books.php':
        $title = "Andrew Berac | Books";
    break;

    case 'contact.php':
        $title = "Andrew Berac | Contact";
    break;

    default:
        $title = THIS_PAGE;
        // $logo = '';  // no logo by default
}
/* then the php short tag -- <?=$title?> -- is placed on the header.php */


// <a href="index.html" class="selected">Home</a><!--
// --><a href="author.html">Author</a><!--
// --><a href="journal.html">Journal</a><!--
// --><a href="books.html">Books</a><!--
// --><a href="contact.html">Contact</a><!--

/* creates an array to store the nav items */

$nav1['index.php'] = "Home";
$nav1['author.php'] = "Author";
$nav1['journal.php'] = "Journal";
$nav1['books.php'] = "Books";
$nav1['contact.php'] = "Contact";


/* creates a function to swap the items in the nav1 array
the current page -- this_page -- will gain the class "currentPage" that shows selection
if it's not this_page, this class is left off */

function makeLinks($nav1) {
    $myReturn = '';
    foreach($nav1 as $url => $text) {
        if($url == THIS_PAGE) {
            $myReturn .= "--><a class=\"selected\" href=\"$url\">$text</a><!--";
        }
        else {
            $myReturn .= "--><a href=\"$url\">$text</a><!--";
        }
    }

    return $myReturn;

}
/* to work, add <?=makeLinks($nav1)?> between ul and li tags; comment out li tags to hide */


?>
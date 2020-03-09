<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<h1>Contact</h1>

You can find me on:
<ul>
    <li><i class="fab fa-twitter" aria-hidden="true"></i> Twitter as <a href="https://twitter.com/zuvorunbekannt">zuvorunbekannt</a></li>
    <li><i class="fab fa-instagram" aria-hidden="true"></i> Instagram as <a href="https://www.instagram.com/verfallen02/">verfallen02</a></li>
    <li><i class="fab fa-tumblr-square" aria-hidden="true"></i> Tumblr as <a href="https://schattengerissen.tumblr.com">schattengerissen</a></li>
</ul>              

Or contact me directly below.
                    
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

    <div class="form-info left">
        <label class="hide" for="name">Name:</label>
        <input type="text" id="name" name="Name" aria-label="Name" required="required" placeholder="Full Name (required)" title="Name is required" autofocus />
    </div>

    <div class="form-info right">
        <label class="hide" for="email">Email:</label>
        <input type="email" id="email" name="Email" aria-label="Email" required="required" placeholder="Email (required)" title="A valid email is required" />
    </div>

    <div>
        <label class="hide" for="comments">Comments:</label>
        <textarea id="comments" name="Comments" aria-label="Comments"></textarea>
    </div>

    <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=$siteKey;?>"></div>
    <!-- for dark sites, change above theme to "dark" -->

    <input id="submit" type="submit" value="Submit" />

</form>


<script src="js/cap_resize.js"></script>
<!-- END HTML FORM -->
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
                    <h3>Share your thoughts.</h3>

                    <p>
                        I welcome any comments or suggestions.
                    </p>
                    
                    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

                    <fieldset>
                        <legend class="hide">Contact Form</legend>

                        <div id="fields-container">
                            <div class="fields">
                                <label for="name">Name:</label><br />
                                <input id="name" type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" size="44" autofocus />
                            </div>

                            <div class="fields">	
                                <label for="email">Email:</label><br />
                                <input id="email" type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" size="44" />
                            </div>

                            <div class="fields">	
                                <label for="comments">Comments:</label><br />
                                <textarea id="comments" name="Comments" cols="36" rows="4" placeholder="Leave a comment!"></textarea>
                            </div>                
                        </div> <!-- end fields-container -->
                        
                        <div class="g-recaptcha" data-theme="light" data-sitekey="<?=$siteKey;?>"></div>
                        <!-- for dark sites, change above theme to "dark" -->

                        <div>
                            <input id="submit" type="submit" value="Submit" />
                        </div>

                    </fieldset>                   

                    </form>

                    <script src="js/cap_resize.js"></script>

                    <!-- END HTML FORM -->
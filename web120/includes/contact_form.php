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
                    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

                    <fieldset>
                        <div class="fields">
                            <label for="name">Name:</label><br />
                            <input id="name" type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
                        </div>

                        <div class="fields">	
                            <label for="email">Email:</label><br />
                            <input id="email" type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
                        </div>

                        <div class="fields">	
                            <label>Comments:</label><br />
                            <textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
                        </div>
                        
                        <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
                        
                        <div>
                            <input id="submit" type="submit" value="Submit" />
                        </div>

                    </fieldset>

                    </form>
                    <!-- END HTML FORM -->
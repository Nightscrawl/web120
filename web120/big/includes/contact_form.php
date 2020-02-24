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

<h2>Client Questionnaire</h2>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <label>
            Name:<br />
            <input class="input-box" type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" autofocus />
        </label>
    </div>

    <div>	
        <label>
            Email:<br />
            <input class="input-box" type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" />
        </label>
    </div>

    <div>	
        <label>
            How did you hear about me?<br />
            <!-- select box will/might get flagged for contrast errors
            this is a result of the blue hilight with white text and is an OS setting,
            not changable via css for a traditional combobox form control -->
            <select name="How_did_you_hear_about_me?" required="required" title="How did you hear about me?">
                <option value="">Choose one</option>
                <option value="Internet search">Internet search</option>
                <option value="Word of mouth">Word of mouth</option>
                <option value="Other">Other</option>
            </select>
        </label>
    </div>
 
    <div>	
        <fieldset>
            <legend>How may I help you?</legend>
            <input type="checkbox" name="Interested_in[]" value="New website" aria-label="New website" /> New website<br />
            <input type="checkbox" name="Interested_in[]" value="Website redesign" aria-label="Website redesign" /> Website redesign<br />
            <input type="checkbox" name="Interested_in[]" value="Website consultation" aria-label="Website consultation" /> Website consultation<br />
            <input type="checkbox" name="Interested_in[]" value="Other" aria-label="Other" /> Other
        </fieldset>
    </div>

    <div>
        <fieldset>
            <legend>Will this website be for personal use or a business?</legend>
            <input type="radio" name="Personal_or_Business" value="Personal" aria-label="Personal" /> Personal<br />
            <input type="radio" name="Personal_or_Business" value="Business" aria-label="Business" /> Business
        </fieldset>
    </div>

    <div>	
        <fieldset>
            <legend>What are your goals?</legend>
            <input type="checkbox" name="Goals[]" value="Blogging" aria-label="Blogging" /> Blogging<br />
            <input type="checkbox" name="Goals[]" value="Portfolio" aria-label="Portfolio" /> Portfolio (for art, crafts, writing, or other creative work)<br />
            <input type="checkbox" name="Goals[]" value="Develop a web presence" aria-label="Develop a web presence" /> Develop a web presence<br />
            <input type="checkbox" name="Goals[]" value="Grow a business" aria-label="Grow a business" /> Grow a business<br />
            <input type="checkbox" name="Goals[]" value="Business marketing" aria-label="Business marketing" /> Business marketing<br />
            <input type="checkbox" name="Goals[]" value="Information gathering" aria-label="Information gathering" /> Information gathering<br />
            <input type="checkbox" name="Goals[]" value="Other" aria-label="Other" /> Other
        </fieldset>
    </div>
    
    <div>	
        <fieldset>
            <legend>Would you like to join the mailing list?</legend>
            <input type="radio" name="Mailing_list" value="Yes" required="required" aria-label="Yes" /> Yes<br />
            <input type="radio" name="Mailing_list" value="No" aria-label="No" /> No<br />
        </fieldset>
    </div>

    <div>	
        <label>
            Comments:<br />
            <textarea name="Comments"></textarea> 
        </label>
    </div>

    <div class="g-recaptcha" data-theme="light" data-sitekey="<?=$siteKey;?>"></div>
    <!-- for dark sites, change above theme to "dark" -->

    <div>
        <input id="submit" type="submit" value="Submit" />
    </div>
</form>
<!-- END HTML FORM -->

<script src="js/cap-resize.js"></script>
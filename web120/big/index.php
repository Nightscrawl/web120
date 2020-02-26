<?php include "includes/header.php";?>

<main>

<?php

    include 'includes/contact_include.php'; #site keys & code here
        
    $toAddress = "kaynbell@gmail.com";  //place your/your client's email address here
    $toName = "Kira Abell"; //place your client's name here
    $website = "Kira Abell's BIG Site";  //place NAME of your client's website

    //echo loadContact('simple.php');#demonstrates a simple contact form
    echo loadContact('includes/contact_form.php');#demonstrates multiple form elements

?>

</main>

<aside>

    <h2>Resources for Web...</h2>

    <h3>Develoment</h3>
    <ul>
        <li><a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830" target="_blank">How to Extract the Facts...</a></li>
        <li><a href="https://www.seoptimer.com/blog/website-design-questionnaire/" target="_blank">Website Design Questionnaire</a></li>
        <li><a href="https://www.lucidchart.com/pages/" target="_blank">Lucidchart</a></li>
        <li><a href="https://www.websitehostingrating.com/top-100-web-development-resources/" target="_blank">Web Development Resources & Tools</a></li>
    </ul>

    <h3>Design</h3>
    <ul>
        <li><a href="https://loremipsum.io/" target="_blank">Lorem Ipsum Generator</a></li>
        <li><a href="http://pxtoem.com/" target="_blank">PXtoEM</a></li>
        <li><a href="https://fonts.google.com/" target="_blank">Google Fonts</a></li>
        <li><a href="https://www.w3schools.com/colors/colors_palettes.asp" target="_blank">W3Schools Color Palettes</a></li>
        <li><a href="https://www.canva.com/colors/color-palette-generator/" target="_blank">Canva Color Palette Generator</a></li>
        <li><a href="http://colorsafe.co/" target="_blank">Color Safe</a></li>
    </ul>

</aside>

<?php include "includes/footer.php";?>
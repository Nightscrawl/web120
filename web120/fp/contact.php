<?php include "includes/header.php";?>

<?php

    include 'includes/contact_include.php'; #site keys & code here
        
    $toAddress = "kaynbell@gmail.com";  //place your/your client's email address here -- aberac@shaw.ca
    $toName = "Andrew Berac"; //place your client's name here
    $website = "Andrew Berac | The Shapes Between Shadows";  //place NAME of your client's website

    echo loadContact('includes/contact_form.php');#demonstrates a simple contact form
    //echo loadContact('multiple.php');#demonstrates multiple form elements

?>

<?php include "includes/footer.php";?>
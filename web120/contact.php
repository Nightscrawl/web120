<?php include "includes/header.php";?>

                <article>

                    <?php

                        include 'includes/contact_include.php'; #site keys & code here
        
                        $toAddress = "kaynbell@gmail.com";  //place your/your client's email address here
                        $toName = "Kira Abell"; //place your client's name here
                        $website = "Kira Abell's Web 120 Portal";  //place NAME of your client's website

                        echo loadContact('includes/contact_form.php');#demonstrates a simple contact form
                        //echo loadContact('multiple.php');#demonstrates multiple form elements

                    ?>

                </article>
                
<?php include "includes/footer.php";?>
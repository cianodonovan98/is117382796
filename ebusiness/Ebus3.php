<?php
session_start()
?>
<!DOCTYPE html>
<html>
    
    <head>
        
        <style>
            p{  font-size: 20px;
            }
        </style>
        
        <title>RECEIPT</title>
    </head>
    
    <body align="center">
        
        <h4>RECEIPT</h4>
        
        <?php
        // Echo session variables that were set on previous page
        
       echo "Name: " . $_POST["name"] . "<br /> <br />";
       
       echo "Email: " . $_POST["email"] . "<br /> <br />";
       
       echo "Total is €" . $_SESSION["Total"] . ".<br /> <br />";
       ?>
       
       <br />
       
       <br />
       
       <p>Thank You For Ordering with Our Cloud Services Vendor Webpage</p>
        
    </body>
</html>
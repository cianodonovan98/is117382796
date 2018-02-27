<?php
session_start()
?>

<!DOCTYPE html>

<html>
    
    <head>
        
        <style>
        
            p{ 
                
                font-size: 20px;
            
            }
            
            body{ 
                
                text-align:center;
                font-size: 20px;
            }
            
        </style>
        
        <title>RECEIPT</title>
        
    </head>
    
    <body>
        
        <h4>RECEIPT</h4>
        
        <?php
        // Echo session variables that were set on previous page
        
       echo "Name: " . $_POST["name"] . "<br /> <br />";
       
       echo "Email: " . $_POST["email"] . "<br /> <br />";
       
       echo "SubTotal: " . $_SESSION["SubTotal"] . " Euro.<br /> <br />";
        
       echo "Discount: " . $_SESSION["Discount"] . " Euro.<br /> <br />";
       
       echo "VAT: " . $_SESSION["VAT"] . " Euro.<br /> <br />";
       
       echo "Total: " . $_SESSION["Total"] . " Euro.<br /> <br />";
       
       ?>
       
       <br />
       
       <br />
       
       <p>Thank You For Ordering with Our Cloud Services Vendor Webpage</p>
       
        <button><a href="../Homepage.html" class="btn btn-success">Home</a></button>
        
    </body>
</html>
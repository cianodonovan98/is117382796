<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html>
    
    <head>
        
        <style>
            
            body{
                text-align:center;
            }
            
        </style>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    
    <!-- Aligning body in the center -->
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <!-- Adding labels, textboxes and buttons to the page -->
                
                <label for="Full_Name">
                    
                    Enter Full Name:
                    
                </label>
                
                <input type="text" id="name" name="name">
                
                <br />
                
                <br />
                
                <label for="email">
                    
                    E-Mail:
                    
                </label>
                
                <input type="text" id="email" name="email">
                
                <br />
                
                <br />
                
                <label for="user_pin">
                    
                     PIN:
                     
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                <br />
                
                <br />
                    
                <button type="Submit" id="btnPurchase" disabled> 
                
                    Proceed with Purchase 
                    
                </button>
                
            </form>
            
            <br />
            
            <!-- Calling the validateDetails function -->
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        // Set session variables
        
        $_SESSION["SubTotal"] = $_POST["SubTotal"];
        
        $_SESSION["Discount"] = $_POST["Discount"];
        
        $_SESSION["VAT"] = $_POST["VAT"];
        
        $_SESSION["Total"] = $_POST["Total"];
        
        $_SESSION["name"] = $_POST["name"];
        
        $_SESSION["email"] = $_POST["email"];
        
        ?>
        
        
    </body>
    
</html>
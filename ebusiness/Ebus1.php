<html>
    
    <head>
        
        <title>Select Product</title>
        
        <!--jQuery-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script type="text/javascript" src="cost_calc.js"></script>
    
    </head>
    
    <!-- Aligning body in the center -->
    
    <body align="center">
        
        <h4>Select Product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            
            <!-- Design for the form. Adding buttons, labels and radio buttons -->
            
            <label for="salesforce">
                
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                
                Salesforce @ $100
                
            </label>
            
              <br />
              
              <br />
            
            <label for "aws">
                
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                
                Amazon Web Services @ $300
                
            </label>
            
            <br />
            
            <br />
            
             
            <label for="Cloud 9">
                
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                
                Cloud 9 @ $200
                
            </label>
            
            <br />
            
            <br />
            
             
            <label for="Gmail">
                
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                
                Gmail @ $400
                
            </label>
            
             <br/>
             
             <br/>
            
            <label for="SubTotal">
                
                Sub Total
                
                <input type="text" id="SubTotal" name="SubTotal" value="0.00" readonly/>
                
            </label>
            
            <br />
            
            <br />
            
            <label for="Discount">
                
                Discount(5%)
                
                <input type="text" id="Discount" name="Discount" value="0.00" readonly/>
                
            </label>
            
            <br />
            
            <br />
            
            <label for="VAT">
                
                VAT(10%)
                
                <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
                
            </label>
            
             <br />
             
             <br />
            
            <label for="Total">
                
                Total
                
                <input type="text" id="Total" name="Total" value="0.00" readonly/>
                
            </label>
            
              <br />
              
              <br />
              
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br />
        
        <br />
        
        <!-- Calling the calcSub function when button pressed -->
        
        <button onClick="calcSub()">Calculate Cost</button>
        
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
        <br />
        
        <br />
        
        <!-- Button to return to homepage -->
        
        <a href="../Homepage.html"><button>Home</a></button>
   
    </body>
    
</html>
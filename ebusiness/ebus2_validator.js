/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
        var name;
        
        name=document.getElementById("name").value;
        
        if(name==""){
            alert("Please enter your name");
        }
        else{
            enablebtnPurchase();
        }
        
        var email;
        
        email = document.getElementById("email").value;
        
        if(email==""){
            alert("Please enter your email");
        }
            else{
                enablebtnPurchase();
            }
        }

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
/* global $ */

function calcSub(parm1){
    
    /* Adding values to the radio buttons */
    
    var argSubTotal;
    
    if(document.getElementById("salesforce").checked) {
        argSubTotal = 100;
    }
    else if (document.getElementById("aws").checked) {
        argSubTotal = 300;
    }
     else if (document.getElementById("cloud9").checked) {
        argSubTotal = 200; 
     }
     
     else if (document.getElementById("gmail").checked) {
        argSubTotal = 400;
     }
    
    calcDisVatTotal(argSubTotal);
}

/* Calculating the Vat, Discount and the Total Price */

function calcDisVatTotal(parmSubTotal){
    
    var SubTotal = parmSubTotal;
    
    var VatAmt;
    
    var DiscountAmt;
    
    var TotalPrice;
    
    DiscountAmt = (parmSubTotal * 0.05);
    
    VatAmt = (parmSubTotal - DiscountAmt) * (0.10);
    
    TotalPrice = (parmSubTotal + VatAmt - DiscountAmt);
    
 display(SubTotal , VatAmt , DiscountAmt , TotalPrice);
}

/* Putting the variables in their textboxes */

function display(parm1 , parm2 , parm3 , parm4 ){
    
    document.getElementById("SubTotal").value = parm1;
    
    document.getElementById("VAT").value = parm2;
    
    document.getElementById("Discount").value = parm3;
    
    document.getElementById("Total").value = parm4;
    
    enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}


function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}


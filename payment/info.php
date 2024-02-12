<?php
    $con = mysqli_connect('localhost', 'quantum_it', 'quantumitinnovation@123', 'quantum_it_new');
    if(isset($_POST['submit'])){
        $tid = $_POST['tid'];
        $order_id = $_POST['order_id'];
        $redirect_url = $_POST['redirect_url'];
        $cancel_url = $_POST['cancel_url'];
        $merchant_id = $_POST['merchant_id'];
        $currency = $_POST['currency'];
        $delivery_name = $_POST['delivery_name'];
        $delivery_email = $_POST['delivery_email'];
        $delivery_tel = $_POST['delivery_tel'];
        $delivery_address = $_POST['delivery_address'];
        $delivery_city = $_POST['delivery_city'];
        $delivery_state = $_POST['delivery_state'];
        $delivery_zip = $_POST['delivery_zip'];
        $delivery_country = $_POST['delivery_country'];
        $currency_type = $_POST['currency_type'];
        $realamount = $_POST['amount'];
        if($currency_type == 'AUD'){
           $amount = $_POST['amount']*52;
       }
        if($currency_type == 'CAD'){
           $amount = $_POST['amount']*60;
       }
       if($currency_type == 'EUR'){
           $amount = $_POST['amount']*82;
       }
       if($currency_type == 'GBP'){
           $amount = $_POST['amount']*94;
       }
       if($currency_type == 'SGD'){
           $amount = $_POST['amount']*58;
       }
       if($currency_type == 'USD'){
           $amount = $_POST['amount']*81;
       }
       if($currency_type == 'INR'){
           $amount = $_POST['amount'];
       }
        //Insert Query
        $q = mysqli_query($con, "insert into hdfc_payment (name, email, tel, address, city, state, zip_code, country, currency_type, amount, amount_inr ,order_id) values ('$delivery_name', '$delivery_email', '$delivery_tel', '$delivery_address', '$delivery_city', '$delivery_state', '$delivery_zip', '$delivery_country', '$currency_type','$realamount', '$amount', '$order_id')");
        if(!$q){
            echo "Not Recorded";
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <body>
        <form method="post" name="redirect" action="https://quantumitinnovation.com/hdfc/ccavRequestHandler.php">
	    <input type="hidden" name="tid" id="tid" readonly value="<?php echo $tid; ?>"/>
	      <input name='redirect_url' type='hidden' value="<?php echo $redirect_url; ?>">
                                    <input name='cancel_url' type='hidden' value="<?php echo $cancel_url; ?>">
                                    <input name='order_id' type='hidden' value="<?php echo $order_id; ?>">
                                    <input name='merchant_id' type='hidden' value="<?php echo $merchant_id; ?>">
                                    <input name='currency' id="currencyType" type='hidden' value="INR">
                                    <input name='currency_inr' id="currency_inr" type='hidden' value="<?php echo $amount; ?>">

                                    
	       <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="Name*" name="delivery_name" value="<?php echo $delivery_name; ?>" id="delivery_name" required />
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="Email*" name="delivery_email" value="<?php echo $delivery_email; ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="Mobile*"  onkeypress="return isNumber(event)" name="delivery_tel" value="<?php echo $delivery_tel; ?>" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="Address*"  name="delivery_address" value="<?php echo $delivery_address; ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="City*"  name="delivery_city" value="<?php echo $delivery_city; ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="State*"  name="delivery_state" value="<?php echo $delivery_state; ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="Zip*"  onkeypress="return isNumber(event)" name="delivery_zip" value="<?php echo $delivery_zip; ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="Country*"  name="delivery_country" value="<?php echo $delivery_country; ?>" required/>
                                        </div>

                                    </div>
                                    <div class="col-md-12 text-center">
                                    <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="currency_type" name="currency_type" value="<?php echo $currency_type; ?>" required>
                                        </div>
                                        
                                    <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="Amount*"  name="amount" id="amount" value="<?php echo $amount; ?>" onkeypress="return isNumber(event)" onchange="myFunction(this.value)" required/>
                                      
                                        </div>
                                        
                                    </div>
                                    <!--<button id="rzp-button1">Pay</button>-->
                                    <center><div class="col-md-12 text-center mt-5">
                                      <p style="font-size:10px">Please wait while we redirect you to payment gateway.</p><br><p>Do not refresh or reload your tab.</p>
                                       </div></center>
                                </div>
	    
	
	      </form>
	      <script language='javascript'>document.redirect.submit();</script>
    </body>
</html>
<?php session_start();?>
<?php
    //session_start();
    $con = mysqli_connect('localhost', 'quantum_it', 'quantumitinnovation@123', 'quantum_it_new');
    if (isset($_POST['submit'])) {
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
        $currency_type = $_POST['currency'];
        $amount = $_POST['amount'];
    
        //Insert Query
        $q = mysqli_query($con, "insert into razorpay (name, email, tel, address, city, state, zip_code, country, currency_type, amount, order_id) values ('$delivery_name', '$delivery_email', '$delivery_tel', '$delivery_address', '$delivery_city', '$delivery_state', '$delivery_zip', '$delivery_country', '$currency_type', '$amount', '$order_id')");
        if (!$q) {
            echo 'Not Recorded';
        } else {
            // header('Location: ./thankyou.php?'.$_POST);
            // header("location:thankyou.php?transaction_id=$order_id");
           
            $_SESSION['amount'] = $amount * 100;
            $_SESSION['curr'] = $currency_type;
            $_SESSION['mobile'] = $delivery_tel;
            $_SESSION['email'] = $delivery_email;
            $_SESSION['name'] = $delivery_name;
            $_SESSION['payment_id'] = '';
            $_SESSION['order_id'] = $order_id;
        }
        if ($_SESSION['amount'] != null) {
            session_destroy();
        }
    }

?>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Payments | Quantum IT Innovation</title>
</head>

<body class="register">
    <div class="container ">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 register-right">
                <img src="https://quantumitinnovation.com/wp-content/uploads/2018/05/mylogo2-1.png" alt="" />
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- <img src="https://quantumitinnovation.com/wp-content/uploads/2018/05/mylogo2-1.png" alt=""/> -->
                        <h3 class="register-heading">Make a Payment Online</h3>
                        <?php if(empty($_SESSION['amount'])){ ?>
                        <form method="post" name="customerData" action="">
                            <input type="hidden" name="tid" id="tid" readonly value="<?php echo time(); ?>" />
                            <input name='redirect_url' type='hidden'
                                value='https://quantumitinnovation.com/payment/ccavResponseHandler.php'>
                            <input name='cancel_url' type='hidden'
                                value='https://quantumitinnovation.com/payment/ccavResponseHandler.php'>
                            <input name='order_id' type='hidden' value="<?php echo time() . rand(11111, 99999); ?>">
                            <input name='merchant_id' type='hidden' value='216935'>
                            <input name='currency' id="currencyType" type='hidden'>


                            <div class="row register-form">
                                <h4>Billing Information</h4>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*"
                                            name="delivery_name" id="delivery_name" required />

                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email*"
                                            name="delivery_email" id="delivery_email" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mobile*"
                                            onkeypress="return isNumber(event)" name="delivery_tel" id="delivery_tel"
                                            required />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address*"
                                            name="delivery_address" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City*"
                                            name="delivery_city" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State*"
                                            name="delivery_state" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Zip*"
                                            name="delivery_zip" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Country*"
                                            name="delivery_country" required />
                                    </div>
                                </div>
                                <h4>Payment Information</h4>
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <select id="currency" name="currency" required class="form-control">
                                            <option disabled selected value="">Choose Currency Type</option>
                                            <option value="INR">INR - Indian Rupee</option>
                                            <option value="AUD">AUD - Australian Dollar</option>
                                            <option value="CAD">CAD - Canadian Dollar</option>
                                            <option value="EUR">EUR - Euro</option>
                                            <option value="GBP">GBP - Pound Sterling</option>
                                            <option value="SGD">SGD - Singapore Dollar</option>
                                            <option value="USD">USD - United States Dollar</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Amount*"
                                            name="amount" id="amount" value="0"
                                            onkeypress="return isNumber(event)" onchange="myFunction(this.value)"
                                            required />

                                    </div>

                                    <input type="hidden" id="amt" value="" name="amt">
                                    <input type="hidden" id="curr" value="" name="curr">
                                    <input type="hidden" id="email" value="" name="email">
                                    <input type="hidden" id="mob" value="" name="mob">

                                </div>
                                <input type="submit" name="submit" value="Submit">
                                <!--<button id="rzp-button1">Pay</button>-->

                                <div class="col-md-12 text-center mt-5">
                                    <p style="font-size:10px">NOTE* : Any dispute regarding payments would be subject
                                        to the jurisdiction of India</p>
                                </div>
                            </div>
                        </form>
                        <?php }else{?>
                        <center>
                            <a href="https://payment.quantumitinnovation.com/payment" style="text-decoration:none; margin-top:150px;" class="btn btn-outline-dark btn-lg">
                                Home
                            </a>
                            <button id="rzp-button1" class="btn btn-outline-dark btn-lg" style="margin-left: 19px;margin-top:150px;">
                                <i class="fas fa-money-bill"></i>Pay Now
                            </button>
                        </center>
                            <form id="processed_data" action="https://payment.quantumitinnovation.com/thankyou.php?ordrid=<?php echo $order_id; ?>" method="POST">
                                <input type=hidden name="customer_name" id="customer_name" value="<?php echo $_SESSION['name']; ?>"/>
                                <input type=hidden name="customer_order_id" id="customer_order_id" value="<?php echo $order_id; ?>" />
                                <input type=hidden name="customer_currency" id="customer_currency" value="<?php echo $_SESSION['curr']; ?>" />
                                <input type=hidden name="customer_amount" id="customer_amount" value="<?php echo $_SESSION['amount']; ?>" />
                                <input type=hidden name="customer_payment_id" id="customer_payment_id" value="" />
                                <input type=hidden name="error_code" id="error_code" value="" />
                                <input type=hidden name="error_description" id="error_description" value="" />
                                <input type=hidden name="error_source" id="error_source" value="" />
                                <input type=hidden name="error_step" id="error_step" value="" />
                                <input type=hidden name="error_reason" id="error_reason" value="" />
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
<script>
    $('input[name=amount]').change(function() {
        var amt1 = document.getElementById("amount").value;
        var amt2 = parseInt(amt1, 10);
        var amt = amt2 * 100;
        document.getElementById("amt").value = amt;
    });

    $('input[name=delivery_email]').change(function() {
        var email = document.getElementById("delivery_email").value;
        document.getElementById("email").value = email;
    });

    $('input[name=delivery_tel]').change(function() {
        var mob = document.getElementById("delivery_tel").value;
        document.getElementById("mob").value = mob;
    });

    $('#currency').change(function() {
        var curr = document.getElementById("currency").value;
        document.getElementById("curr").value = curr;
    });

    document.getElementById('rzp-button1').onclick = function(e) {
        var amt = '<?= $_SESSION['amount'] ?>';
        var curr = '<?= $_SESSION['curr'] ?>';
        var mob = '<?= $_SESSION['mobile'] ?>';
        var email = '<?= $_SESSION['email'] ?>';

        var options = {
            "key": "rzp_live_xAmpkwhqLrXs7A", // Enter the Key ID generated from the Dashboard
            "amount": amt,
            "currency": curr,
            "description": "Quantum It Innovation",
            "image": "https://quantumitinnovation.com/assets/images/logo/logo.png",
            "prefill": {
                "email": email,
                "contact": mob,
            },
            "handler": function(response) {
                $('#customer_payment_id').val(response.razorpay_payment_id);
                const form = document.getElementById('processed_data');
                form.submit();
            },
            "modal": {
                "ondismiss": function() {
                    if (confirm("Are you sure, you want to close the form?")) {
                        txt = "You pressed OK!";
                        console.log("Checkout form closed by the user");
                    } else {
                        txt = "You pressed Cancel!";
                        console.log("Complete the Payment")
                    }
                }
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {
            $('#error_code').val(response.error.code);
            $('#error_description').val(response.error.description);
            $('#error_source').val(response.error.source);
            $('#error_step').val(response.error.step);
            $('#error_reason').val(response.error.reason);
            
            const postData = {
                order_id: $('#customer_order_id').val(),
                error_code: response.error.code,
                error_description: response.error.description,
                status: 'failed',
            };
            
            console.log(postData);
            
            $.ajax({
                type: 'POST',
                url: 'https://quantumitinnovation.com/payment/update_record.php',
                data: postData,
                success: function(response) {
                    console.log('Success:', response);
                    // Handle the response as needed
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
            
            const form = document.getElementById('processed_data');
            form.submit();
        });
        rzp1.open();
        e.preventDefault();
    }
</script>

</html>

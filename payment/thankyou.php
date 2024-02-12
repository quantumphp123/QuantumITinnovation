<html>
<?php
    $orderId = $_GET["ordrid"];

    $con = mysqli_connect('localhost', 'quantum_it', 'quantumitinnovation@123', 'quantum_it_new');
    $query = "SELECT * FROM razorpay where order_id = '$orderId'";
    	$get_data = mysqli_query($con,$query);
    	$row = mysqli_fetch_array($get_data);
    	$amount =  $row['amount'];
    	$name = $row['name'];
        $paymentId = $row['payment_id'];
        $currency = $row['currency_type'];
        $transactiondate = $row['timestamp'];
        $status = $row['status'];
        $description = $row['description'];
        $error_code = $row['error_code'];
?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <!------ Include the above in your HEAD tag ---------->
</head>

<body class="register">

    <div class="container ">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 register-right">
                <img src="https://quantumitinnovation.com/wp-content/uploads/2018/05/mylogo2-1.png" alt=""
                    class="img-fluid" />
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active text-center" id="home" role="tabpanel"
                        aria-labelledby="home-tab">
                        <?php if(empty($error_code)) { ?>
                        <img src="success.gif" alt="" class="img-fluid" style="width:150px" />
                        <h4 class="confirm-heading">Quantum IT Innovation Payment</h4>
                        <div class="row register-form text-center">
                            <p class="">Hello <b><?php echo $name; ?></b>, we have received your amount and will be
                                processed shortly. Thank you for choosing our services. Please check your email for
                                further instructions. </p>
                            <div class="col-md-10 offset-md-3">
                                <table>
                                     <tr>
                                        <td>
                                            <p>Transaction Date </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $transactiondate; ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Order Id </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $orderId; ?> </p>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>
                                            <p>Amount </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $amount; ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Currency </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $currency; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Response Message </p>
                                        </td>
                                        <td>
                                            <p>: Success </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 text-center mt-5">
                                <h6>NOTE* : Any dispute regarding payments would be subject to the jurisdiction of India.
                                </h6>
                            </div>
                        </div>
                        <?php }else{ ?>
                            <img src="alert.gif" alt="" class="img-fluid" style="width:150px" />
                        <h4 class="confirm-heading">Quantum IT Innovation Payment</h4>
                        <div class="row register-form text-center">
                            <p class="">Hello <b><?php echo $name; ?></b>, There was some problem with payment right now. </p>
                            <div class="col-md-10 offset-md-3">
                                <table>
                                    <tr>
                                        <td>
                                            <p>Order Id </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $orderId; ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Amount </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $amount; ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Currency </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $currency; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Response Status </p>
                                        </td>
                                        <td>
                                            <p>: Failed </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Response Code </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $error_code ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Error Description </p>
                                        </td>
                                        <td>
                                            <p>: <?php echo $description ?> </p>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="col-md-12 text-center mt-5">
                                <h6>NOTE* : Any dispute regarding payments would be subject to the jurisdiction of India.
                                </h6>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php include('Crypto.php');

$conn = mysqli_connect('localhost', 'quantum_it', 'quantumitinnovation@123', 'quantum_it');

	error_reporting(0);
	
	$workingKey='E25B9B33023358528FF568E9EE3149BC';		//Working Key should be provided here.
	
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);


	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		//echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
	
	?>
	
	<html>
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
                    <img src="https://quantumitinnovation.com/wp-content/uploads/2018/05/mylogo2-1.png" alt="" class="img-fluid"/> 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active text-center" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <img src="success.gif" alt="" class="img-fluid" style="width:150px"/> 
                                <h4 class="confirm-heading">Quantum IT Innovation Payment</h4>
                                <div class="row register-form text-center">
                                <p class="">Hello <b><?php $information=explode('=',$decryptValues[19]);
	    	echo $information[1] ?></b>, we have recieved your amount and will be processed shortly. Thank you for choosing our services. Please check your email for further instructions. </p>
                                
                                
                                <div class="col-md-10 offset-md-3"> 
                                    <table >
                                  
                                        <tr>
                                        <td>
                                        <p>Transaction Date </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[40]); echo $information[1] ?></p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Order Id </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[0]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                        <p>Transaction Id </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[1]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                         
                                        <tr>
                                        <td>
                                        <p>Bank Ref. Id </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[2]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Amount </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[10]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Currency </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[9]); echo $information[1] ?></p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Payment Method </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[5]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Response Message </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[3]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                       
                                        
                                    </table>
                                
        </div>  
       <div class="col-md-12 text-center mt-5">
                                      <h6>NOTE* : Any dispute regarding payments would be subject to the jurisdiction of India</h6>
                                       </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
            </body>
            </html>

	
<?php	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted
		
		regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		//echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
		
		?>
		<html>
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
                    <img src="https://quantumitinnovation.com/wp-content/uploads/2018/05/mylogo2-1.png" alt="" class="img-fluid"/> 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active text-center" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <img src="alert.gif" alt="" class="img-fluid" style="width:100px"/> 
                                <h4 class="confirm-heading">Quantum IT Innovation Payment</h4>
                                <div class="row register-form text-center">
                                <p class="">Hello <b><?php $information=explode('=',$decryptValues[19]);
	    	echo $information[1] ?></b>, there is problem in recieving payment from your payment method. It might be possible that your bank refused to pay the amount</p>
                                
                                
                                <div class="col-md-10 offset-md-3"> 
                                    <table >
                                  
                                        <tr>
                                        <td>
                                        <p>Transaction Date </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[40]); echo $information[1] ?></p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Order Id </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[0]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                        <p>Transaction Id </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[1]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                         
                                        <tr>
                                        <td>
                                        <p>Bank Ref. Id </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[2]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Amount </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[10]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Currency </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[9]); echo $information[1] ?></p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Payment Method </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[5]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <p>Response Message </p>
                                        </td>
                                        <td>
                                        <p>: <?php $information=explode('=',$decryptValues[3]); echo $information[1] ?> </p>
                                        </td>
                                        </tr>
                                       
                                        
                                    </table>
                                  
                                 
        </div>  
          <div class="col-md-12 text-center mt-5">
                                      <h6>NOTE* : Any dispute regarding payments would be subject to the jurisdiction of India</h6>
                                       </div>
      
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
            </body>
            </html>
		
		<?php
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

		    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
  $information1=explode('=',$decryptValues[10]); 
  $information2=explode('=',$decryptValues[9]);
  $information3=explode('=',$decryptValues[0]);
  $information4=explode('=',$decryptValues[1]);
  $information5=explode('=',$decryptValues[2]);
  $information6=explode('=',$decryptValues[40]);
  $information7=explode('=',$decryptValues[5]);
  $information8=explode('=',$decryptValues[8]);
  $information10=explode('=',$decryptValues[19]);
  $information11=explode('=',$decryptValues[20]);
  $information12=explode('=',$decryptValues[21]); 
  $information13=explode('=',$decryptValues[22]);
  $information14=explode('=',$decryptValues[23]);
  $information15=explode('=',$decryptValues[24]);
  $information16=explode('=',$decryptValues[25]);
  
$sql = mysqli_query($conn, "INSERT INTO payment_status(orders_id, tracking_id, bank_ref_no, trans_date, pay_method, status_message) VALUES ('".$information3[1]."', '".$information4[1]."','".$information5[1]."','".$information6[1]."','".$information7[1]."','".$information8[1]."')");

if (mysqli_num_rows($sql) > 0) {
    header("Location: https://quantumitinnovation.com");
die();
}else{	
	header('Refresh: 10; URL=https://quantumitinnovation.com');
} 
}
	
	
// 	echo "<br><br>";

// 	echo "<table cellspacing=4 cellpadding=4>";
// 	for($i = 0; $i < $dataSize; $i++) 
// 	{
// 		$information=explode('=',$decryptValues[$i]);
// 	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
// 	}

// 	echo "</table><br>";
// 	echo "</center>";
	
?>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body class="register">
    <div class="container ">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 register-right">
                <img src="https://quantumitinnovation.com/wp-content/uploads/2018/05/mylogo2-1.png" alt="" />

                <button id="rzp-button1" class="btn btn-outline-dark btn-lg" style="margin-left: 19px;margin-top:150px;">
                    <i class="fas fa-money-bill"></i>Pay Now
                </button>
            </div>
        </div>
    </div>
    
</body>

<script>
    document.getElementById('rzp-button1').onclick = function(e) {
        
            const postData = {
                order_id: '170418762759247',
                error_code: 'BAD_REQUEST',
                error_description: 'Not good test, but better.',
                status: 'failed',
            };
            
            console.log(postData);
            
             // Use AJAX to send a POST request
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
    }
</script>

</html>

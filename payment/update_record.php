<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Assuming these variables are coming from your form
    $error_code = $_POST['error_code'];
    $description = $_POST['error_description'];
    $status = $_POST['status'];
    $order_id = $_POST['order_id'];

    // Connect to the database
    $con = mysqli_connect('localhost', 'quantum_it', 'quantumitinnovation@123', 'quantum_it_new');

    // Check the database connection
    if (!$con) {
        $response = array('success' => false, 'message' => 'Database connection error: ' . mysqli_connect_error());
        echo json_encode($response);
        exit;
    }

    // Prepare and execute the update query
    $updateQuery = "UPDATE razorpay SET
                    status = '$status',
                    description = '$description',
                    error_code = '$error_code'
                    WHERE order_id = '$order_id'";
    $updateResult = mysqli_query($con, $updateQuery);

    // Check if the query was successful
    if ($updateResult) {
        $response = array('success' => true, 'message' => 'Record updated successfully');
        echo json_encode($response);
    } else {
        $response = array('success' => false, 'message' => 'Update failed: ' . mysqli_error($con));
        echo json_encode($response);
    }

    // Close the database connection
    mysqli_close($con);
} else {
    $response = array('success' => false, 'message' => 'Invalid request!');
    echo json_encode($response);
}
?>

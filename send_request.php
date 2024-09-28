<?php
session_start();
include('connection.php'); // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['user_id']; // The user ID who is sending the request
    $requestedUserId = $_POST['requested_user_id']; // The user ID to whom the request is sent
    $adharNo = $_POST['adhar_no'];
    $panNo = $_POST['pan_no'];
    $contactNo = $_POST['contact_no'];

    // Insert the request into the tbl_requests table
    $query = "INSERT INTO tbl_requests (user_id, requested_user_id, adhar_no, pan_no, contact_no, status, created_date) 
              VALUES ('$userId', '$requestedUserId', '$adharNo', '$panNo', '$contactNo', 'Pending', NOW())";
    
    if (mysqli_query($conn, $query)) {
        // Redirect back with a success message
        header("Location: open_to_trip.php?message=Request sent successfully");
    } else {
        // Handle error
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn); // Close the database connection
?>
<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shiwan Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>
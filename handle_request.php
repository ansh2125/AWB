<?php
session_start();
include('connection.php'); // Include your database connection

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $requestId = $_POST['request_id'];
    $action = $_POST['action'];
    
    if ($action == 'accept') {
        // Update the status to 'Accepted'
        $query = "UPDATE tbl_requests SET status = 'Accepted' WHERE id = '$requestId'";
        if (mysqli_query($conn, $query)) {
            // You might want to take additional actions, like notifying the user
            header("Location: open_to_trip.php?msg=Request accepted successfully.");
        } else {
            header("Location: open_to_trip.php?msg=Error accepting request: " . mysqli_error($conn));
        }
    } elseif ($action == 'reject') {
        // Update the status to 'Rejected'
        $query = "UPDATE tbl_requests SET status = 'Rejected' WHERE id = '$requestId'";
        if (mysqli_query($conn, $query)) {
            header("Location: open_to_trip.php?msg=Request rejected successfully.");
        } else {
            header("Location: open_to_trip.php?msg=Error rejecting request: " . mysqli_error($conn));
        }
    }
} else {
    header("Location: open_to_trip.php");
}


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
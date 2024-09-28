<?php
session_start();
include('Connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post_id = $_POST['post_id'];
    $user_id = $_SESSION['user_id']; // Ensure you have user_id in session
    $comment = $_POST['comment'];

    // Insert the comment into the database
    $stmt = $conn->prepare("INSERT INTO comments (post_id, user_id, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $post_id, $user_id, $comment);
    $stmt->execute();

    // Fetch the username
    $stmt = $conn->prepare("SELECT fullname FROM tbl_users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($fullname);
    $stmt->fetch();

    // Return the new comment HTML
    echo '<p><strong>' . htmlspecialchars($fullname) . ':</strong> ' . htmlspecialchars($comment) . '</p>';

    $stmt->close();
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

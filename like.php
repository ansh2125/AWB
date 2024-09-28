<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shiwan Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>
<?php
session_start();
include('Connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post_id = $_POST['post_id'];
    $user_id = $_SESSION['user_id']; // Ensure you have user_id in session

    // Check if the user has already liked this post
    $stmt = $conn->prepare("SELECT * FROM likes WHERE post_id = ? AND user_id = ?");
    $stmt->bind_param("ii", $post_id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        // User hasn't liked the post yet, so insert a new like
        $stmt = $conn->prepare("INSERT INTO likes (post_id, user_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $post_id, $user_id);
        $stmt->execute();
        echo getLikeCount($post_id, $conn); // Return updated like count
    } else {
        // User has already liked the post
        echo getLikeCount($post_id, $conn); // Just return the count
    }

    $stmt->close();
}

function getLikeCount($post_id, $conn) {
    $stmt = $conn->prepare("SELECT COUNT(*) FROM likes WHERE post_id = ?");
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    return $count;
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
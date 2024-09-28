<?php
session_start();
include('Connection.php');

if (!isset($_SESSION['user_id']) || !isset($_GET['receiver_id'])) {
    exit("Invalid request.");
}

$senderId = $_SESSION['user_id'];
$receiverId = $_GET['receiver_id'];

// Update the query to use tbl_users
$query = "
    SELECT m.message, m.file_path, m.sender_id, u.fullname 
    FROM messages m 
    JOIN tbl_users u ON m.sender_id = u.id  -- Ensure you're using the correct user ID column
    WHERE (m.sender_id = ? AND m.receiver_id = ?) 
    OR (m.sender_id = ? AND m.receiver_id = ?) 
    ORDER BY m.timestamp ASC";

$stmt = $conn->prepare($query);
$stmt->bind_param("iiii", $senderId, $receiverId, $receiverId, $senderId);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo '<div class="message">';
    // Display sender's full name
    if ($row['sender_id'] == $senderId) {
        echo '<strong>You:</strong> ';
    } else {
        echo '<strong>' . htmlspecialchars($row['fullname']) . ':</strong> ';
    }
    
    if ($row['message']) {
        echo '<p>' . htmlspecialchars($row['message']) . '</p>';
    }
    if ($row['file_path']) {
        $files = explode(',', $row['file_path']);
        foreach ($files as $file) {
            $fileType = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array($fileType, ['jpg', 'jpeg', 'png'])) {
                echo '<img src="' . htmlspecialchars($file) . '" style="max-width: 20%;"/>';
            } elseif (in_array($fileType, ['mp3', 'wav', 'ogg'])) {
                echo '<audio controls><source src="' . htmlspecialchars($file) . '" type="audio/' . $fileType . '">Your browser does not support the audio element.</audio>';
            } elseif (in_array($fileType, ['mp4'])) {
                echo '<video controls style="max-width: 100%;"><source src="' . htmlspecialchars($file) . '" type="video/mp4">Your browser does not support the video element.</video>';
            }
        }
    }
    echo '</div>';
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
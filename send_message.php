<?php
session_start();
include('Connection.php');

if (!isset($_SESSION['user_id']) || !isset($_POST['receiver_id'])) {
    exit("Invalid request.");
}

$senderId = $_SESSION['user_id'];
$receiverId = $_POST['receiver_id'];
$message = isset($_POST['message']) ? $_POST['message'] : '';
$filePaths = [];

// Process each uploaded file
if (isset($_FILES['files'])) {
    foreach ($_FILES['files']['tmp_name'] as $key => $tmpName) {
        if ($_FILES['files']['error'][$key] == UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['files']['tmp_name'][$key];
            $fileName = $_FILES['files']['name'][$key];
            $fileSize = $_FILES['files']['size'][$key];
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // Validate file type
            if (in_array($fileType, ['jpg', 'jpeg', 'png', 'mp3', 'mp4', 'wav', 'ogg'])) {
                $targetDir = 'uploads/';
                $filePath = $targetDir . uniqid() . '.' . $fileType;

                // Move the uploaded file to the target directory
                if (move_uploaded_file($fileTmpPath, $filePath)) {
                    $filePaths[] = $filePath; // Store the file path
                } else {
                    exit("Error moving the uploaded file.");
                }
            } else {
                exit("Invalid file type. Allowed types: JPG, PNG, MP3, MP4, WAV, OGG.");
            }
        }
    }
}

// Insert message into the database (considering both text and file paths)
$query = "INSERT INTO messages (sender_id, receiver_id, message, file_path) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$filePathsString = implode(',', $filePaths); // Convert array to comma-separated string
$stmt->bind_param("iiss", $senderId, $receiverId, $message, $filePathsString);
$stmt->execute();
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
<?php
session_start();
include('connection.php'); // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user ID from session
    $user_id = $_SESSION['user_id'];

    $title = $_POST['title'];
    $theme = $_POST['theme'];
    $description = $_POST['description'];

    // Handle image upload
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/"; // Make sure this directory exists
    $target_file = $target_dir . basename($image);
    $uploadOk = 1;

    // Check if image file is a actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 2000000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array(strtolower(pathinfo($target_file, PATHINFO_EXTENSION)), ['jpg', 'png', 'jpeg', 'gif'])) {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            
            $stmt = $conn->prepare("INSERT INTO blogs (user_id, title, theme, description, image) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issss", $user_id, $title, $theme, $description, $target_file);

            if ($stmt->execute()) {
                $_SESSION['success_message'] = "Blog submitted successfully!";
                header("Location: user-blog.php"); 
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close();
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
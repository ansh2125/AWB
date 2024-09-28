<?php session_start(); include('includes/header.php'); ?>
<?php include('Connection.php'); ?>

<div class="container">
   

    <?php
    // Fetch posts for the logged-in user
    $user_id = $_SESSION['user_id']; // Assuming user ID is stored in session
    $query = "SELECT * FROM posts WHERE user_id = ? ORDER BY date_time DESC";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card mb-3">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
            echo '<h6 class="card-subtitle mb-2 text-muted">' . htmlspecialchars($row['date_time']) . ' - ' . htmlspecialchars($row['post_type']) . '</h6>';
            echo '<p class="card-text">' . htmlspecialchars($row['description']) . '</p>';
            echo '<p class="card-text"><small class="text-muted">' . htmlspecialchars($row['location']) . '</small></p>';
    
            // Display media
            if ($row['media_type'] == 'image') {
                echo '<img src="' . htmlspecialchars($row['media_url']) . '" class="img-fluid" alt="Post Image">';
            } elseif ($row['media_type'] == 'video') {
                echo '<video controls class="img-fluid"><source src="' . htmlspecialchars($row['media_url']) . '" type="video/mp4">Your browser does not support the video tag.</video>';
            } elseif ($row['media_type'] == 'audio') {
                echo '<audio controls><source src="' . htmlspecialchars($row['media_url']) . '" type="audio/mpeg">Your browser does not support the audio tag.</audio>';
            } elseif ($row['media_type'] == 'pdf') {
                echo '<a href="' . htmlspecialchars($row['media_url']) . '" target="_blank">View PDF</a>';
            }
    
            echo '<div class="mt-2"><button class="btn btn-light btn-sm">Like</button> <button class="btn btn-light btn-sm">Comment</button></div>';
            echo '</div></div>';
        }
    } else {
        echo '<p>No posts available.</p>';
    }
    
    ?>

</div>
<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shiwan Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include('includes/footer.php'); ?>

<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shvam Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>

<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!isset($_SESSION["username"])) {
    header('Location: login.php'); 
    exit(); 
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AWB-Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <style>
       
        .navbar {
            transition: background-color 0.3s, padding 0.3s;
        }

        .navbar.scrolled {
            background-color: white;
            padding: 10px 0; 
        }

        .navbar-brand h1 {
            font-size: 24px; 
        }

        @media (max-width: 768px) {
            .navbar-brand h1 {
                font-size: 20px; 
            }
            .navbar-nav .nav-link {
                font-size: 16px; 
            }
        }

       
        body {
            padding-top: 70px; 
        }
    </style>
</head>


<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Dashboard.php">
                <h1>AWB <span style="font-size:7px;">Think, Travel, Explore</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="Dashboard.php"><span class="fas fa-home"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Status.php"><span class="fas fa-plane-departure"></span> Status</a></li>
                    <li class="nav-item"><a class="nav-link" href="user-blog.php"><span class="fas fa-pencil-alt"></span> Blogging</a></li>
                    <li class="nav-item"><a class="nav-link" href="booking.php"><span class="fas fa-ticket-alt"></span> Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="connect+.php"><span class="fas fa-link"></span> Connect +</a></li>
                    <li class="nav-item"><a class="nav-link" href="chat.php"><span class="fas fa-comments"></span> Chat</a></li>
                    <li class="nav-item"><a class="nav-link" href="Live_chat.php"><span class="fas fa-comments"></span> Live Chat</a></li>
                    <li class="nav-item"><a class="nav-link" href="open_to_trip.php"><span class="fas fa-globe-americas"></span> Open to Trip</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_post_blade.php"><span class="fas fa-paper-plane"></span> Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="package.php"><span class="fas fa-info-circle"></span> Holiday Package</a></li>
                    <li class="nav-item"><a class="nav-link" href="forex_exchange.php"><span class="fas fa-envelope"></span> Forex Exchange</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php"><span class="fas fa-user-circle"></span> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="about-us.php"><span class="fas fa-ellipsis-h"></span> More</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><span class="fas fa-sign-out-alt"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });
    </script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const loader = document.getElementById('loader');
        const mainContent = document.getElementById('main-content');
        const dots = document.querySelectorAll('.dot');
        
       
        let progress = 0;
        const interval = setInterval(() => {
            if (progress < 3) {
                dots[progress].style.opacity = 1;
                progress++;
            } else {
                clearInterval(interval);
            }
        }, 500);

        setTimeout(() => {
            loader.style.display = 'none'; 
            mainContent.classList.remove('hidden'); 
        }, 2000); 
    });
</script>

</body>
</html>
<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shivam Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>

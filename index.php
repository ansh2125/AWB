<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shiwan Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWB</title>
    <link rel="icon" href="logo.png" type="image/png">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    
    <link rel="stylesheet" href="css/style.css">

<style>

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.6);
    animation: fadeIn 0.5s;
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 2px solid #007bff; /* Border color */
    border-radius: 15px; /* More rounded corners */
    width: 50%;
    transform: scale(0) translateY(-50%); /* Start scaled down and off-screen */
    animation: scaleIn 2s forwards; /* Scale-in animation */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes scaleIn {
    from {
        transform: scale(0) translateY(-50%); /* Start off-screen and scaled down */
        opacity: 0; /* Start invisible */
    }
    to {
        transform: scale(1) translateY(0); /* Final scale and position */
        opacity: 1; /* Fade in */
    }
}
.about {
    display: flex;
    align-items: center;
    padding: 20px;
}

.image {
    flex: 1;
}

.content {
    flex: 1;
    padding: 20px;
}

blockquote {
    font-style: italic;
    color: #555;
    margin: 15px 0;
}



</style>


</head>
<body>
<?php
include 'includes/loader.php'; 

renderLoader(); 


?>


<?php

include 'includes/navbar.php';


?>




<div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</div>



<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/AWB.jpeg) no-repeat;">
                    <div class="content">
                        <br>
                        <span>Never stop exploring the </span>
                        <h3>World...</h3>
                        <p></p>
                        <a href="places.php" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url('https://www.bontravelindia.com/wp-content/uploads/2023/03/Best-Places-to-Visit-in-Ladakh.jpg') no-repeat;">
                    <div class="content">
                        <span style="color:white; ">make tour</span>
                        <h3 style="color:white;" >amazing</h3>
                        <p></p>
                        <a href="places.php" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url('https://images.unsplash.com/photo-1465220183275-1faa863377e3?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bW91bnRhaW4lMjBzbm93fGVufDB8fDB8fHww') no-repeat;">
                    <div class="content">
                        <span  style="color:white; ">explore the</span>
                        <h3 style="color:white;">new world</h3>
                        <p></p>
                        <a href="places.php" class="btn">get started</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>




<section class="category">
    <h1 class="heading">Top Places To Visit In India.</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/vaishnodevi.jpg" alt="">
            <h3>Vaishno Devi</h3>
            <h1 class="btn" onclick="openModal('vaishnodevi')">read more</h1>
        </div>

        <div class="box">
            <img src="images/kedarnath.jpg" alt="">
            <h3>Kedarnath</h3>
            <h1 class="btn" onclick="openModal('kedarnath')">read more</h1>
        </div>

        <div class="box">
            <img src="images/manali.jpg" alt="">
            <h3>Manali in Monsoon</h3>
            <h1 class="btn" onclick="openModal('manali')">read more</h1>
        </div>

        <div class="box">
            <img src="images/vanaras.jpg" alt="">
            <h3>Banaras</h3>
            <h1 class="btn" onclick="openModal('banaras')">read more</h1>
        </div>

        <div class="box">
            <img src="images/kashmir.jpeg" alt="">
            <h3>Kashmir</h3>
            <h1 class="btn" onclick="openModal('kashmir')">read more</h1>
        </div>

        <div class="box">
            <img src="images/Nainital.jpeg" alt="">
            <h3>Nainital</h3>
            <h1 class="btn" onclick="openModal('nainital')">read more</h1>
        </div>

        <div class="box">
            <img src="images/tajmahal.jpeg" alt="">
            <h3>Taj Mahal</h3>
            <h1 class="btn" onclick="openModal('tajmahal')">read more</h1>
        </div>

        <div class="box">
            <img src="images/ayodhya.jpeg" alt="">
            <h3>Ayodhya</h3>
            <h1 class="btn" onclick="openModal('ayodhya')">read more</h1>
        </div>
    </div>
</section>


<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 id="modal-title"></h2>
        <ul id="modal-facts"></ul>
    </div>
</div>

<script>
    function openModal(place) {
        const modal = document.getElementById("myModal");
        const title = document.getElementById("modal-title");
        const facts = document.getElementById("modal-facts");
        
        const data = {
            vaishnodevi: {
                title: "Vaishno Devi",
                facts: [
                    "Located in Jammu & Kashmir.",
                    "Elevation: 5,200 feet.",
                    "Famous for its temple dedicated to Goddess Durga.",
                    "Attracts millions of pilgrims each year.",
                    "Best visited during the spring season."
                ]
            },
            kedarnath: {
                title: "Kedarnath",
                facts: [
                    "Located in Uttarakhand.",
                    "Elevation: 11,755 feet.",
                    "Part of the Char Dham pilgrimage.",
                    "Known for the Kedarnath Temple.",
                    "Accessible via a trek of 16 km from Gaurikund."
                ]
            },
            manali: {
                title: "Manali",
                facts: [
                    "Located in Himachal Pradesh.",
                    "Elevation: 6,726 feet.",
                    "Known for its scenic beauty and adventure sports.",
                    "Ideal for skiing in winter.",
                    "Popular honeymoon destination."
                ]
            },
            banaras: {
                title: "Banaras (Varanasi)",
                facts: [
                    "Located in Uttar Pradesh.",
                    "One of the oldest inhabited cities in the world.",
                    "Famous for its ghats and Ganga Aarti.",
                    "A major cultural and religious hub.",
                    "Best visited in winter."
                ]
            },
            kashmir: {
                title: "Kashmir",
                facts: [
                    "Known as 'Paradise on Earth'.",
                    "Elevation varies from 1,600 to 14,000 feet.",
                    "Famous for its gardens, houseboats, and dry fruits.",
                    "Ideal for trekking and skiing.",
                    "Best visited in summer and autumn."
                ]
            },
            nainital: {
                title: "Nainital",
                facts: [
                    "Located in Uttarakhand.",
                    "Elevation: 6,358 feet.",
                    "Famous for its beautiful lake.",
                    "A popular hill station for tourists.",
                    "Best visited during summer."
                ]
            },
            tajmahal: {
                title: "Taj Mahal",
                facts: [
                    "Located in Agra, Uttar Pradesh.",
                    "A UNESCO World Heritage Site.",
                    "Built by Mughal Emperor Shah Jahan in memory of his wife.",
                    "Known for its stunning white marble architecture.",
                    "Best visited in the early morning or late evening."
                ]
            },
            ayodhya: {
                title: "Ayodhya",
                facts: [
                    "Located in Uttar Pradesh.",
                    "The birthplace of Lord Rama.",
                    "Significant religious and cultural site.",
                    "Famous for its temples and historical sites.",
                    "Best visited during festivals."
                ]
            }
        };

        title.textContent = data[place].title;
        facts.innerHTML = '';
        data[place].facts.forEach(fact => {
            const li = document.createElement("li");
            li.textContent = fact;
            facts.appendChild(li);
        });

        modal.style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Close the modal when clicking outside of it
    window.onclick = function(event) {
        const modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>





<section class="about" id="about">
    <div class="image">
        <img src="https://giffiles.alphacoders.com/136/13674.gif" alt="">
    </div>

    <div class="content">
        <h3>Memorable Outdoor Experiences</h3>
        <blockquote>
            "The journey of a thousand miles begins with one step." - Ansh Shukla
        </blockquote>
        <p id="additionalText" style="display: none;">
            At AWB, we believe that adventure awaits just beyond your doorstep. Whether it’s trekking through the mountains, camping under the stars, or exploring hidden waterfalls, every moment spent in nature is a memory in the making. Join us to create unforgettable stories and experiences that last a lifetime.
        </p>
        <a href="#" id="toggleText" class="btn">Read More</a>
    </div>
</section>
<script>
    document.getElementById("toggleText").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default anchor click behavior
        const additionalText = document.getElementById("additionalText");
        const button = document.getElementById("toggleText");

        if (additionalText.style.display === "none") {
            additionalText.style.display = "block";
            button.textContent = "Read Less";
        } else {
            additionalText.style.display = "none";
            button.textContent = "Read More";
        }
    });
</script>






<section class="shop" id="shop">

    <h1 class="heading">Offer of the Months  <span style="color:red;">Get 20% Discount </span></h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Kedarnath - Uttrakhand</h3>
                    <div class="price fas fa-currency">₹ 8000 - 4N/5D </div>
                    <p>*Price for Single Person</p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Vaishno Devi</h3>
                    <div class="price">₹ 7000 - 4N/5D </div>
                    <p>*Price For Single Person</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Leh-Ladakh</h3>
                    <div class="price">₹ 14000 - 6N/7D </div>
                    <p>* Valid For Single person Only</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Ayodhya</h3>
                    <div class="price">₹ 3000 - 2N/3D </div>
                    <p>Valid for Single person Only</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>




<?php
include('connection.php'); // Include your database connection

// Fetch recent blog posts from the database
$query = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 6"; // Adjust as needed
$result = $conn->query($query);
?>

<section class="packages" id="packages">
    <h1 class="heading">Recent Blogs</h1>

    <div class="box-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Extracting fields from the row
                $title = htmlspecialchars($row['title']);
                $description = htmlspecialchars($row['description']);
                $image = htmlspecialchars($row['image']);
                $created_at = htmlspecialchars($row['created_at']);

                // Displaying the blog post as a package
                echo '<div class="box">';
                echo '<div class="image">';
                echo '<img src="' . $image . '" alt="' . $title . '">';
                echo '</div>';
                echo '<div class="content">';
                echo '<h3>' . $title . '</h3>';
                echo '<p>' . $description . '</p>';
                echo '<div class="price">Posted on: ' . date('jS F, Y', strtotime($created_at)) . '</div>';
                echo '<a href="#" class="btn">Explore Now</a>'; // Adjust the link as needed
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No recent blogs found.</p>';
        }
        ?>
    </div>
</section>

<?php
$conn->close(); // Close the database connection
?>












<section class="services">

    <h1 class="heading"> WE Offer's</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/serv.png" alt="">
            <h3>complete guide</h3>
            <p></p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/serv2.png" alt="">
            <h3>Custom Package For Users</h3>
            <p></p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="https://www.transparentpng.com/thumb/travel/bm9DxT-travel-tour-world-transparent.png" alt="">
            <h3>All Types of Trips Inside India / Outside India</h3>
            <p></p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="https://www.transparentpng.com/download/airplane/clipart-airplane-transparent-15.png" alt="">
            <h3>Transport Arrangement </h3>
            <p></p>
            <a href="#" class="btn">read more</a>
        </div>

       
        
    </div>

</section>



<?php
include('connection.php'); // Include your database connection

// Fetch blog posts from the database
$query = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 6"; // Adjust as needed
$result = $conn->query($query);
?>

<section class="blogs" id="blogs">
    <h1 class="heading"> Our Daily Posts </h1>

    <div class="swiper blogs-slider">
        <div class="swiper-wrapper">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Extracting fields from the row
                    $title = htmlspecialchars($row['title']);
                    $description = htmlspecialchars($row['description']);
                    $location = htmlspecialchars($row['location']);
                    $date_time = htmlspecialchars($row['date_time']);
                    $media_url = htmlspecialchars($row['media_url']);
                    $link = htmlspecialchars($row['link']);
                    
                    // Displaying the blog post
                    echo '<div class="swiper-slide slide">';
                    echo '<img src="' . $media_url . '" alt="">';
                    echo '<div class="icons">';
                    echo '<a href="#"> <i class="fas fa-calendar"></i> ' . date('jS F, Y', strtotime($date_time)) . ' </a>';
                    echo '<a href="#"> <i class="fas fa-user"></i> by admin </a>';
                    echo '</div>';
                    echo '<h3>' . $title . '</h3>';
                    echo '<p>' . $description . '</p>';
                   
                    echo '</div>';
                }
            } else {
                echo '<p>No posts found.</p>';
            }
            ?>
        </div>
    </div>
</section>

<?php
$conn->close(); // Close the database connection
?>






<?php
// Include the navbar
include 'includes/subscribe.php';
?>


<section class="clients">

    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide silde"><img src="data:image/jpeg;base64,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" alt=""></div>
            <div class="swiper-slide silde"><img src="https://www.hackerworld.net/gfg.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/logo.png" alt=""></div>
            <div class="swiper-slide silde"><img src="https://www.sunderdeep.ac.in/images/LOGO-GIF.gif" alt=""></div>
        </div>
    </div>

</section>



<?php
// Include the navbar
include 'includes/footer.php';
?>













<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const loader = document.getElementById('loader');
        const mainContent = document.getElementById('main-content');
        const dots = document.querySelectorAll('.dot');
        
        // Show the loader for the duration of the animation (2 seconds)
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
            loader.style.display = 'none'; // Hide loader
            mainContent.classList.remove('hidden'); // Show main content
        }, 2000); // Change this duration if needed
    });
</script>

</body>
</html>
<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shiwan Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>
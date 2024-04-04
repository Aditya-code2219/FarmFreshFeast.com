<?php require('../includes/top.inc1.php');  
require('../includes/connection.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmFreshFeast</title>
    <link rel="stylesheet" href="../assets/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .right_section h1{
            font-size: 75px;
            margin-left: 70px;
            margin-top: 150px;
        }
        .right_section input{
            border-radius: 24px;
            border: none;
            height: 50px;
            width: 550px;
            margin-left: 70px;
            margin-top: 20px;
        }
        .right_section{
            background-image: url('./projectimages/field\ image.jpg');
            background-size: cover;
            background-position: center;
            padding: 20px;
            height: 600px;
        }
        .right_section input.search-input {
            border-radius: 24px;
            border: 2px solid #aaa; /* Add a border */
            height: 50px;
            width: 800px;
            opacity: 50%;
            margin-left: 70px;
            margin-top: 20px;
            padding: 0 15px; /* Add padding */
            font-size: 16px; /* Adjust font size */
            transition: border-color 0.3s ease; /* Smooth transition for border color */
        }

        /* Focus style */
        .right_section input.search-input:focus {
            border-color: #333; /* Change border color when focused */
            outline: none; /* Remove default focus outline */
        }

        /* Placeholder style */
        .right_section input.search-input::placeholder {
            color: #999; /* Placeholder text color */
        }
        .search-container {
            position: relative;
            display: inline-block;
        }

        .search-input {
            border-radius: 24px;
            border: 2px solid #aaa;
            height: 50px;
            width: 500px;
            padding: 0 40px 0 15px; /* Adjust padding to accommodate the icon */
            font-size: 16px;
        }

        .search-button {
            position: absolute;
            top: 50%;
            right: 18px;
            transform: translateY(-5%);
            background: none;
            border: none;
            cursor: pointer;
        }

        .search-button img {
            width: 20px; /* Adjust icon size */
            height: auto;
        }
        .restaurant-card {
            flex: 0 0 calc(25% - 20px); /* Set flex-basis to 25% minus margin */
            margin: 10px; /* Add margin between cards */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            margin: 20px;
        }

        .restaurant-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .restaurant-info {
            padding: 20px;
        }

        .restaurant-name {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .restaurant-description {
            color: #666;
        }

        .restaurant-location {
            color: #888;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
        .restaurants {
            display: flex;
            flex-wrap: wrap; /* Allow items to wrap to the next row */
            justify-content: space-evenly; /* Distribute items evenly with space between */
            margin: 0 -10px; /* Add negative margin to offset padding of individual cards */
        }
    </style>
</head>
<body>


    
    <section>
        <div class="right_section">
            <h1>FarmFreshFeast.com</h1>
            <div class="search-container">
                <input type="text" placeholder="Search" class="search-input">
                <button type="submit" class="search-button"><img src="./projectimages/search.png" alt="Search"></button>
            </div>                  
        </div>
    </section>

     <!-- Cards -->

     <h2 style="margin: 15px; font-size: 22px;">Restaurants Near you</h2>
    <div class="restaurants">
        <?php
            // Fetch data from the database
            $sql = "SELECT * FROM restaurants";
            $result = mysqli_query($con, $sql);

            // Check if there are any rows returned
            if (mysqli_num_rows($result) > 0) {
                // Loop through each row
                while ($row = mysqli_fetch_assoc($result)) {
                    // Generate HTML for each card dynamically using PHP
                    ?>
                    <div class="restaurant-card">
                        <img src="./projectimages/restaurant.webp" alt="Restaurant Image">
                        <div class="restaurant-info">
                            <h2 class="restaurant-name"><?php echo $row['restaurant_name']; ?></h2>
                            <p class="restaurant-description"><?php echo $row['phone']; ?></p>
                            <p class="restaurant-location">Location: <?php echo $row['address']; ?></p>
                            <!-- Add more details as needed -->
                            <a href="#" class="btn">View</a>
                        </div>
                    </div>
                    <?php
                }
            } else {
                // If no rows found
                echo "No restaurants found.";
            }

            // Close the database connection
            mysqli_close($con);
        ?>
    </div>
     
    <!-- footer -->

    <footer class="footer">
        <div class="footer__addr">
            
          <h1 class="footer__logo"><img src="./projectimages/img1-removebg.png" alt="" style="height: 100px;">FarmFreshFeast.com</h1>
              
          <h2>Contact</h2>
          
          <address>
            5534 Somewhere In. The World 22193-10212<br>
                
            <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
          </address>
        </div>
        
        <ul class="footer__nav">
          <li class="nav__item">
            <h2 class="nav__title">Media</h2>
      
            <ul class="nav__ul">
              <li>
                <a href="#">Online</a>
              </li>
      
              <li>
                <a href="#">Print</a>
              </li>
                  
              <li>
                <a href="#">Alternative Ads</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item nav__item--extra">
            <h2 class="nav__title">Technology</h2>
            
            <ul class="nav__ul nav__ul--extra">
              <li>
                <a href="#">Hardware Design</a>
              </li>
              
              <li>
                <a href="#">Software Design</a>
              </li>
              
              <li>
                <a href="#">Digital Signage</a>
              </li>
              
              <li>
                <a href="#">Automation</a>
              </li>
              
              <li>
                <a href="#">Artificial Intelligence</a>
              </li>
              
              <li>
                <a href="#">IoT</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item">
            <h2 class="nav__title">Legal</h2>
            
            <ul class="nav__ul">
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              
              <li>
                <a href="#">Terms of Use</a>
              </li>
              
              <li>
                <a href="#">Sitemap</a>
              </li>
            </ul>
          </li>
        </ul>
        
        <div class="legal">
          <p>&copy; 2024 FarmFreshFeast. All rights reserved.</p>
          
          <div class="legal__links">
            <span>Made with <span class="heart">♥</span> Made in India</span>
          </div>
        </div>
      </footer>
      <script>
          document.querySelector('.search-button').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default form submission behavior
            // Your code to handle the search functionality goes here
            // For example, you can retrieve the value from the search input and perform a search operation
            const searchTerm = document.querySelector('.search-input').value;
            console.log('Search term:', searchTerm);
        });
      </script>
</body>
</html>

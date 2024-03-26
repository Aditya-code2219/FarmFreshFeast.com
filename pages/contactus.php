<?php
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "farmfreshfeast"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize status variable
$status = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // Set status to success
        $status = "success";
    } else {
        // Set status to error
        $status = "error";
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../assets/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script>
        // JavaScript function to display alert based on status
        window.onload = function() {
            <?php if ($status === "success"): ?>
                alert("Your message has been sent successfully!");
            <?php elseif ($status === "error"): ?>
                alert("There was an issue sending your message. Please try again later.");
            <?php endif; ?>
        };
    </script>
    <style>
       body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        header {
            background-color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav_links {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .nav_links li {
            display: inline;
            margin-left: 20px;
        }

        .nav_links li a {
            text-decoration: none;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .container h2 {
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            width: 100%;
        }

        form {
            width: calc(50% - 20px); /* Adjusted width for form to account for margin */
        }

        form label {
            font-weight: bold;
            color: #555;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .right_section {
            width: calc(50% - 20px); /* Adjusted width for image container to account for margin */
            text-align: center;
        }

        .right_section img{
            border-radius: 24px;
            margin: 15px auto; /* Center image horizontally */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 100%; /* Ensure image doesn't exceed container width */
            height: auto; /* Maintain aspect ratio */
        }

        /* Media query for smaller screens */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            form,
            .right_section {
                width: 100%; /* Adjusted width for form and image container for smaller screens */
            }
        }
    </style>
</head>
<body>
<?php
            require('../includes/top.inc.php');
        ?>

    <div class="container">
        <h2>Contact Us</h2>
        <form id="contactForm" action="contactus.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <input type="submit" value="Submit">
        </form>
        <div class="right_section">
            <img src="./projectimages/welcome3.jpg" alt="mobile image">
        </div>
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
</body>
</html>

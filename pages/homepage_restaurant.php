<?php require('../includes/getProduct.php'); ?>
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
            color: #fff;
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
            background-image: url('./projectimages/foodspread.jpg');
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
            object-fit: fill;
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
        a{
    text-decoration: none;
    color: black;
}
.products_page{
    margin:50px;
    padding: 40px;
    box-shadow: 0px 0px 12px rgb(184, 217, 230);
    border-radius: 7px;
    display: grid;
    grid-template-columns: repeat(4,1fr);
    gap:30px;
}

@media  screen and (max-width:992px){
    .products_page
    {
        grid-template-columns: repeat(3,1fr);
    }
}
@media  screen and (max-width:768px){
    .products_page
    {
        grid-template-columns: repeat(2,1fr);
    }
}
@media  screen and (max-width:500px){
    .products_page
    {
        grid-template-columns: repeat(1,1fr);
    }
}
.product{
   
    border: 1px solid grey;
    border-radius: 10px;
    flex-grow: auto;
}
.product:hover{

    box-shadow: 0px 0px 12px rgb(96, 134, 150);
}
.product_img{
    width:100%;
    height:12rem;
    border-radius: 5px 5px 0px 0px;
}
.product_info{
    margin:10px;
    line-height: 1.7rem;
    position: relative;
}
.AddToCart{
    background-color: rgb(50, 161, 50);
    width:88%;
    color: white;
    padding:5px;
    border: 0;
    border-radius: 10px;
    font-size: large;
}
.AddToCart:hover{
    background-color: green;
}
.wishlist{
    border:1px solid grey;
    padding:2px 7px;
    border-radius: 5px;
    position: absolute;
    right:0;
}
.product-container {
    display: flex;
    flex-direction: column;
}
    </style>
</head>
<body>
    <!--<header>
        <img src="./projectimages/img1-removebg.png" alt="Logo">
        <div class="nav_name">FarmFreshFeast.com</div>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="./contactus.php">Contact us</a></li>
            </ul>
        </nav>
    </header>-->
    <?php require('../includes/top.inc.php');  ?>
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

    <h2 style="margin: 15px; font-size: 22px;">Recently added vegetables</h2>
    <div class="restaurants">
    <div class="products_page">
      <?php getProduct(); ?>
      </div>
        <!-- <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="./projectimages/capcicum.jpg" alt="capcicum image">
            <div class="restaurant-info">
              <h2 class="restaurant-name">vegetable name</h2>
              <p class="restaurant-description">Description of the vegetable goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="restaurant-location">Price</p>
              <a href="#" class="btn">View</a>
            </div>
        </div> -->
        
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

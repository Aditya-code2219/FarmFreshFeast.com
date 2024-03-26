<link rel="stylesheet" href="../assets/style1.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
<header>
        <img src="./projectimages/img1-removebg.png" alt="Logo">
        <div class="nav_name">FarmFreshFeast.com</div>
        <nav>
            <ul class="nav_links">
                <li><a href="../pages/homepage_restaurant.php">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="../pages/categories.php">Products</a></li>
                <li><a href="../pages/contactus.php">Contact us</a></li>
                <li><a href="../pages/profile.php">Profile</a></li>
            </ul>
        </nav>
    </header>

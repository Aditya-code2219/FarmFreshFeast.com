<?php
session_start();

require('../includes/connection.inc.php');
require('../includes/functions.inc.php');

$msg='';

if(isset($_POST['submit'])) {
    $email = get_safe_value($con, $_POST['email']);
    $password = get_safe_value($con, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);

    if($count > 0) {
        $row = mysqli_fetch_assoc($res);
        if(password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['ADMIN_LOGIN'] = true;
            $_SESSION['USER_NAME'] = $row['username']; // Assuming 'owner_name' is the column in your database containing the user's name

            // Redirect to next page
            header('location: ./homepage_farmer.php');
            exit();
        } else {
            $msg = "Invalid password";
        }
    } else {
        $msg = "User not found. Please register first.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Login</title>
    <link rel="stylesheet" href="../assets/stylelogin.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("./projectimages/bg1.jpg"); /* Path to your background image */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        form {
            width: 100%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="tel"]:focus {
            border-color: #4CAF50;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #4CAF50;
        }

        .logo-container {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .logo {
            max-width: 100px;
            height: auto;
        }

        .marquee-container {
            position: relative;
            overflow: hidden;
            background-color: #333;
            color: #fff;
            padding: 15px;
            height: 50px;
        }

        .marquee {
            font-family: acumin-pro, system-ui, sans-serif;
            font-size: 14px;
            display: inline-block;
            font-style: italic;
            white-space: nowrap;
            position: absolute;
            top: 0;
            right: 0;
            padding: 0px 0px;
            margin: 0;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-500%); }
        }
    </style>
</head>
<body>
    <div class="marquee-container">
        <div class="marquee" direction="left" scrollamount="6" behaviour="scroll">
            <p>Welcome to FarmFreshFeast! Login now to get started.</p>
        </div>
    </div>

    <div class="logo-container">
        <img src="./projectimages/img1-removebg.png" alt="Company Logo" class="logo">
    </div>

    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login" name="submit" >
        </form>
        <div class="error_msg"><?php echo $msg?></div>
    </div>
    <?php require('../includes/footer.inc.php');?>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (!username || !password) {
                alert('Please fill in all fields.');
                event.preventDefault();
            }
        });
        </script>
</body>
</html>

<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="student-login-styles.css">
</head>
<body>



    <header class="site-header">
        <nav>
            <ul>
                <li><a href="contact.html" target="_blank">Contact Us</a></li>
                <li><a href="about.html" target="_blank">About</a></li>

            </ul>
        </nav>
        <div class="header-content">
            <h1>Dream Travels</h1>
        </div>
    </header>
   

    <div class="login-container">
        <div class="img"><img src="" alt=""></div>
        <h1>Student Login</h1> <br>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <a href="forget-password.html">Forget Password?</a>
            <br><br><br>
            
            <button type="submit" class="login-btn">Login</button>
            <br>

            <h4 class="new-mem">New Member?</h4>
            <a href="../Signup/student-signup.html">SignUp</a>

        </form>
    </div>
</body>
</html>

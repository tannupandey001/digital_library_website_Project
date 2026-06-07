<?php
session_start();
include 'config.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);

        // store user in session
        $_SESSION['user_name'] = $user['name'];

        // redirect to homepage
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid Credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <nav class="navbar">
        
        <div class="logo">
            <img src="img/logo.jpeg">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="browse.php">Browse</a></li>
        </ul>
    </nav>
</header>

<form method="POST">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Enter Email" required><br>
    <input type="password" name="password" placeholder="Enter Password" required><br>
    <button name="login">Login</button>
    <div class="signup-link">
    <p>Don't have an account?</p>
    <a href="signup.php">Create one</a>
</div>
</form>



</body>
</html>
<?php
include 'config.php';

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (name, email, password) 
              VALUES ('$name', '$email', '$password')";

    mysqli_query($conn, $query);
    echo "Signup Successful!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
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
    <h2>Sign Up</h2>
    <input type="text" name="name" placeholder="Enter Name" required><br>
    <input type="email" name="email" placeholder="Enter Email" required><br>
    <input type="password" name="password" placeholder="Enter Password" required><br>
    <button name="signup">Sign Up</button>
</form>



</body>
</html>
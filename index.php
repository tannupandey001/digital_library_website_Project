<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Neosapiens Library</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<header>
    
    <nav class="navbar">
        <div class="logo">
    <img src="img/logo.jpeg" alt="Neosapiens Logo">

</div>
       <ul class="nav-links">
    <!-- <li><a href="index.php">Home</a></li> -->
    <!-- <li><a href="browse.php">Browse</a></li> -->

    <?php if(isset($_SESSION['user_name'])): ?>
        <li><a href="#">Welcome back , <?php echo $_SESSION['user_name']; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>
    
    <?php endif; ?>
</ul>
    </nav>
</header>

<!-- HERO SECTION -->
<section class="hero">
    <h1>Explore your journey with Neosapiens</h1>
    <p>Your smart digital library for personalized learnings</p>
    <a href="browse.php" class="btn">Browse Books</a>
</section>

<!-- FEATURES -->
<section class="features">
    <div class="feature-box">
        <h3>📚 Huge Collection</h3>
        <p>Access thousands of academic and non-academic books.</p>
    </div>

    <div class="feature-box">
        <h3>🤖 Smart Recommendations</h3>
        <p>AI suggests books based on your interests.</p>
    </div>

    <div class="feature-box">
        <h3>⬇ Easy Downloads</h3>
        <p>Download PDFs instantly anytime.</p>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Neosapiens Library | All Rights Reserved</p>
</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse Books - Neosapiens</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="img/logo.jpeg" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="browse.php">Browse</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>
</header>

<!-- SEARCH BAR -->
<section class="search-section">
    <h2>Find Your Book</h2>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Search by book name...">
        <button type="submit">Search</button>
    </form>
</section>

<!-- BOOK LIST -->
<section class="book-list">

<?php
include 'config.php';

$query = "SELECT * FROM books";

if(isset($_GET['search'])){
    $search = $_GET['search'];
    $query = "SELECT * FROM books WHERE title LIKE '%$search%'";
}

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

        echo "<div class='book'>";
        echo "<img src='img/".$row['image']."' width='100'><br>";
        echo "<h3>".$row['title']."</h3>";
        echo "<p>".$row['author']."</p>";
        echo "<a href='book.php?id=".$row['id']."'>View</a>";
        echo "</div>";
    }

}else{

    echo "
    <div class='unavailable-book'>
        <h2> Oops!The Book isn't Unavailable!</h2>
        <p>Sorry, the book you searched for is not available in our library database.</p>
        <p>Please submit a request to the administrator to make this book available.</p>

        <button onclick=\"requestBook()\">
            📚 Request This Book
        </button>
    </div>
    ";
}
?>

</section>
<script>
function requestBook(){
    alert("Your request has been sent to the administrator.");
}
</script>


</body>
</html>
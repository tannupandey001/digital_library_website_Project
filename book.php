<?php
session_start();

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
}

include 'config.php';
?>
<?php
include 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM books WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $book = mysqli_fetch_assoc($result);
    } else {
        $book = null;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $book['title']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <nav class="navbar">
        
        <div class="logo">
            <img src="img/logo.jpeg">
        </div>
    </nav>
</header>

<section class="book-detail">

<?php if($book){ ?>

    <img src="img/<?php echo $book['image']; ?>" width="200">

    <h1><?php echo $book['title']; ?></h1>

    <p>
        <strong>Author:</strong>
        <?php echo $book['author']; ?>
    </p>

    <a href="view.php?file=<?php echo $book['file']; ?>"
       target="_blank"
       class="btn">
       Read Book
    </a>

<?php } else { ?>

    <div class="unavailable-box">
        <h2>❌ Book Not Found</h2>

        <p>
            Sorry, the book you are looking for is currently unavailable
            in the library database.
        </p>

        <p>
            Please contact the administrator or submit a request to add
            this book to the library.
        </p>

        <a href="index.php" class="btn">
            Back to Library
        </a>
    </div>

<?php } ?>

</section>

<!-- // toggle function
function toggleTheme(){
    document.body.classList.toggle("dark");

    if(document.body.classList.contains("dark")){
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }


} -->
</script>

</body>
</html>
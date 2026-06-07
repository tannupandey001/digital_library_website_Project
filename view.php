<?php
session_start();

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
}

if(isset($_GET['file'])){
    $file = $_GET['file'];
    $path = "pdfs/" . $file;

    if(file_exists($path)){
        header("Content-Type: application/pdf");
        readfile($path);
    } else {
        echo "File not found";
    }
}
?>
<?php
require_once "../dbconfig.php";
global $link;

    $title = sanitize($_POST['title']);
    $artist = sanitize($_POST['artist']);
    $image = sanitize($_POST['Image']);
    $path = sanitize($_POST['path']);
    $category = sanitize($_POST['category']);
    $admin = $_SESSION['current_admin'];

    $sql = "INSERT INTO audio (title, artist, category, admin, audio_img_path, audio_path) VALUES ('$title', '$artist', '$category', '$admin', '$image', '$path')";
    $query = mysqli_query($link, $sql);
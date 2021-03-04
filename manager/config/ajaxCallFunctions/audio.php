<?php
require_once "../dbconfig.php";

    global $link;
    $sql = "SELECT * FROM tracks";
    $query = mysqli_query($link, $sql);

    if ($query) {
        $totalNum = mysqli_num_rows($query);
        echo $totalNum;
    }
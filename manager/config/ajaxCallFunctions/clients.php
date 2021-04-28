<?php
require_once "../dbconfig.php";

    global $link;
    $sql = "SELECT * FROM clients";
    $query = mysqli_query($link, $sql);

    if ($query) {
        $totalNum = mysqli_num_rows($query);
        echo $totalNum;
    }
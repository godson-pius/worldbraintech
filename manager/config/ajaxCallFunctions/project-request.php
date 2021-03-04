<?php
require_once "../dbconfig.php";

global $link;
$sql = "SELECT * FROM project_requests";
$query = mysqli_query($link, $sql);

if ($query) {
    $totalNum = mysqli_num_rows($query);
    echo $totalNum;
}
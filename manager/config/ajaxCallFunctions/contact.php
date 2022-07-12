<?php
require_once "../dbconfig.php";

global $link;
$sql = "SELECT * FROM contact_us";
$query = mysqli_query($link, $sql);

if ($query) {
    $totalNum = mysqli_num_rows($query);
    echo $totalNum;
}
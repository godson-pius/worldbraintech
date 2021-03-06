<?php
session_start();

/* define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'world_bt');

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME); */

$link = mysqli_connect("localhost",
    "worlgmig_worldbrain",
    "100%worldbrain",
    "worlgmig_worldbrain"
);

require_once "functions.php";
require_once 'user_functions.php';
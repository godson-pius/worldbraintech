<?php
// session_start();

define('HOST', 'localhost');
define('USERNAME', 'worlgmig_worldbrain');
define('PASSWORD', '100%worldbrain');
define('DBNAME', 'worlgmig_worldbrain');

// This is to Establish Connection With Database

$link = mysqli_connect(Host, Username, Password, Dbname);

require_once 'contact_fxns.php';

// if ($link) {
// echo "Connected";
// }  else echo "no";
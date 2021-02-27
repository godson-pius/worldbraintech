<?php
// session_start();

define("Host","localhost");
define("Username","root");
define("Password","");
define("Dbname","world_bt");

// This is to Establish Connection With Database

$link = mysqli_connect(Host, Username, Password, Dbname);

require_once 'contact_fxns.php';

// if ($link) {
// echo "Connected";
// }  else echo "no";
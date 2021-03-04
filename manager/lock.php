<?php
require_once "config/dbconfig.php";

session_destroy();

redirect("locked.php");

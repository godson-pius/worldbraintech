<?php
require_once "dbconfig.php";

function sanitize($input)
{
    global $link;
    $input = htmlentities(strip_tags(trim($input)));
    $input = mysqli_real_escape_string($link, $input);
    return $input;
}

function redirect($url)
{
    header("Location: $url");
}

function login($post)
{
    global $link;

    $err_flag = false;
    $errors = [];

    extract($post);

    if (!empty($username)) {
        $username = sanitize($username);
    } else {
        $err_flag = true;
        $errors[] = "Username can't be empty";
    }

    if (!empty($password)) {
        $tmp_password = sha1($password);
        $password = sanitize($tmp_password);
    } else {
        $err_flag = true;
        $errors[] = "Password can't be empty";
    }

    if ($err_flag === false) {
        $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
        $query = mysqli_query($link, $sql);

        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $_SESSION['current_admin'] = $row['username'];
            return true;
        } else {
            return false;
        }
    }
    return $errors;
}

// Checking if the user is logged in
function loginValidation($url) {

    if(!isset($_SESSION['current_admin'])){
        redirect($url);
    }
}

function load($table) {
    global $link;
    $sql = "SELECT * FROM $table";
    $query = mysqli_query($link, $sql);

    if (mysqli_num_rows($query) > 0) {
        return $query;
    }
}

function loadLimit($table, $order_by, $limit, $limit2) {
    global $link;
    $sql = "SELECT * FROM $table ORDER BY $order_by DESC LIMIT $limit, $limit2";
    $query = mysqli_query($link, $sql);

    if (mysqli_num_rows($query) > 0) {
        return $query;
    }
}

function addMusic($post) {
    global $link;
    $err_flag = false;
    $errors = [];

    extract($post);

    if (!empty($title)) {
        $title = sanitize($title);
    } else {
        $err_flag = true;
        $errors[] = "Title is required";
    }

    if (!empty($_FILES['audioImage'])) {
        $audioImage = sanitize($_FILES['audioImage']['name']);
        $audioImageTmp = $_FILES['audioImage']['tmp_name'];
        move_uploaded_file($audioImageTmp, "TrackImages/$audioImage");
    } else {
        $err_flag = true;
        $errors[] = "Audio Image is required";
    }

    if (!empty($_FILES['audio'])) {
        $audio = sanitize($_FILES['audio']['name']);
        $audioTmp = $_FILES['audio']['tmp_name'];
        move_uploaded_file($audioTmp, "Tracks/$audio");
    } else {
        $err_flag = true;
        $errors[] = "Audio Path is required";
    }

    if (!empty($track_desc)) {
        $track_desc = sanitize($track_desc);
    } else {
        $err_flag = true;
        $errors[] = "Track Description is required";
    }

    if ($err_flag === false) {
        $admin = $_SESSION['current_admin'];

        $sql = "INSERT INTO tracks (track_title, track_image, track_path, track_desc, date_uploaded) VALUES('$title', '$audioImage', '$audio', '$track_desc', now())";
        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        }
        return false;
    }
    return $errors;
}

function addProject($post) {
    global $link;
    $err_flag = false;
    $errors = [];

    extract($post);

    if (!empty($project_title)) {
        $project_title = sanitize($project_title);
    } else {
        $err_flag = true;
        $errors[] = "Project Title is required";
    }

    if (!empty($_FILES['ProjectImage'])) {
        $ProjectImage = sanitize($_FILES['ProjectImage']['name']);
        $ProjectImageTmp = $_FILES['ProjectImage']['tmp_name'];
        move_uploaded_file($ProjectImageTmp, "ProjectImages/$ProjectImage");
    } else {
        $err_flag = true;
        $errors[] = "Project Image is required";
    }

    $project_url = sanitize($project_url);

    if (!empty($project_desc)) {
        $project_desc = sanitize($project_desc);
    } else {
        $err_flag = true;
        $errors[] = "Project Description is required";
    }

    if ($err_flag === false) {
        $admin = $_SESSION['current_admin'];

        $sql = "INSERT INTO projects (project_title, project_desc, project_image, project_url, project_date) VALUES ('$project_title', '$project_desc', '$ProjectImage', '$project_url', now())";
        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        }
        return false;
    }
    return $errors;
}


function signIn($post)
{
    global $link;

    $err_flag = false;
    $errors = [];

    extract($post);


    if (!empty($password)) {
        $tmp_password = sha1($password);
        $password = sanitize($tmp_password);
    } else {
        $err_flag = true;
        $errors[] = "Password can't be empty";
    }

    if ($err_flag === false) {
        $sql = "SELECT * FROM admins WHERE password = '$password'";
        $query = mysqli_query($link, $sql);

        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $_SESSION['current_admin'] = $row['username'];
            return true;
        } else {
            return false;
        }
    }
    return $errors;
}



function getSpecifiedColumn($table, $col, $id) {
    global $link;
    
    $sql = "SELECT * FROM $table WHERE $col = $id";
    $query = mysqli_query($link, $sql);
    
    if ($query) {
        return $query;
    }
    return false;
}


function whereclause_all($table, $col, $value){
    global $link;
    
    $sql = "SELECT * FROM $table WHERE $col = '$value' LIMIT 5";
    $query = mysqli_query($link, $sql);
    
    if ($query) {
        return $query;
    }
    return false;
}


function whereclause($table, $col, $value){
    global $link;
    
    $sql = "SELECT * FROM $table WHERE $col = $value";
    $query = mysqli_query($link, $sql);
    
    if ($query) {
        return $query;
    }
    return false;
}



function delete($table, $table_id, $id) {
    global $link;
    
    $sql = "DELETE FROM `$table` WHERE $table_id = $id";
    $query = mysqli_query($link, $sql);
    
    if ($query) {
        return true;
    }
    return false;
}

function fetch_all($table, $id) {
    global $link;
    $sql = "SELECT * FROM $table ORDER BY $id DESC";
    $query = mysqli_query($link, $sql);

    if ($query) {
        return $query;
    } else {
        return false;
    }
}

function load_total($table) {
    global $link;
    $sql = "SELECT * FROM $table";
    $query = mysqli_query($link, $sql);

    if ($query) {
        $total = mysqli_num_rows($query);
        return $total;
    }
}

function update_happy_clients($post) {
    global $link;
    extract($post);
    $errors = [];

    if (!empty($happy_clients)) {
        $new_record = sanitize($happy_clients);
    } else {
        $errors[] = "Please add a new record!";
    }

    $sql = "UPDATE achievements SET happy_clients = $new_record WHERE achievement_id = 1";
    $query = mysqli_query($link, $sql);

    if ($query) {
        return true;
    } else {
        return false;
    }
}

function update_projects_completed($post) {
    global $link;
    extract($post);
    $errors = [];

    if (!empty($projects_completed)) {
        $new_record = sanitize($projects_completed);
    } else {
        $errors[] = "Please add a new record!";
    }

    $sql = "UPDATE achievements SET project_completed = $new_record, date_updated = now()  WHERE achievement_id = 1";
    $query = mysqli_query($link, $sql);

    if ($query) {
        return true;
    } else {
        return false;
    }
}
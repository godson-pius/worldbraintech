<?php 
require_once "dbconfig.php";



function work_request($post) {
    global $link;
    extract($post);
    $err_flag = false;
    $errors = [];

    if (!empty($name)) {
        $name = sanitize($name);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your name";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your email";
    }

    if (!empty($project_title)) {
        $project_title = sanitize($project_title);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your project title";
    }

    if (!empty($project_desc)) {
        $project_desc = sanitize($project_desc);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your project description";
    }

    if ($err_flag === false) {
        $sql = "INSERT INTO project_requests (user_name, user_email, project_title, project_desc, date_sent) VALUES ('$name', '$email', '$project_title', '$project_desc', now())";
        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}

function contact($post) {
    global $link;
    extract($post);
    $err_flag = false;
    $errors = [];

    if (!empty($name)) {
        $name = sanitize($name);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your name";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your email";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your phone number";
    }

    if (!empty($subject)) {
        $subject = sanitize($subject);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your message subject";
    }

    if (!empty($message)) {
        $message = sanitize($message);
    } else {
        $err_flag = false;
        $errors[] = "Please enter your message";
    }

    if ($err_flag === false) {
        $sql = "INSERT INTO contacts (user_name, user_email, user_phone, contact_title, contact_message, date_sent) VALUES ('$name', '$email', '$phone', '$subject', '$message', now())";
        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
<?php
    require_once 'config.php';

// This Function is for sanitizing input...

//function sanitize($input) {
//    $input = htmlentities(htmlspecialchars(strip_tags(trim($input))));
//    return $input;
//}

// Update contact table...

function UpdateCont($contact){
    global $link;
    $errors = [];
    extract($contact);

    if (!empty($name)) {
        $name = $name;

    } else {
        $errors[] = "Input a Name";
    }

    if (!empty($email)) {
        $email = $email;

    } else {
        $errors[] = "Input an Email";
    }

    if (!empty($subject)) {
        $subject = $subject;

    } else {
        $errors[] = "Input a Subject";
    }

    if (!empty($_FILES['attach'])){
        $attach = $_FILES['attach']['name'];
        // $tmp_image = $_FILES['attach']['tmp_name'];
        // move_uploaded_file($tmp_image, "upload_image/$attach");
    }

    if (!empty($message)) {
        $message = $message;

    } else {
        $errors[] = "Input a message";
    }

    if (!$errors) {
        $sql = "INSERT INTO contact_us (name, email, subject, attachment, message, date) VALUES ('$name', '$email', '$subject', '$attach', '$message', now())";

        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}

function RegisterFrontEndClass($register){
    global $link;
    $errors = [];
    extract($register);

    if (!empty($email)) {
        $email = $email;

    } else {
        $errors[] = "Input an Email";
    }

    if (!empty($phone)) {
        $phone = $phone;

    } else {
        $errors[] = "Input a phone number";
    }

    if (isset($newbie)) {
        $newbie = $newbie;

    } else {
        $errors[] = "Are you new to programming";
    }
   
    if (isset($detail)) {
        $detail = $detail;

    } else {
        $errors[] = "How did you hear about us?";
    }

    if (!empty($message)) {
        $message = $message;

    } else {
        $errors[] = "Tell us how you feel about programming";
    }

    if (!$errors) {
        $sql = "INSERT INTO registerfront (email, phone, level, how, message) VALUES ('$email', '$phone', '$newbie', '$detail', '$message')";

        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
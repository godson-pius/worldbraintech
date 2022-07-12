<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])){
    $name     = $_POST['name'];  
    $email    = $_POST['email'];
    $subject   = $_POST['subject'];
    $file    = $_POST['attach'];
    $message    = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    
    $mail = new PHPMailer();

    //SMTP settings
    $mail ->isSMTP();
    $mail ->Host = "smtp.gmail.com";
    $mail ->SMTPAuth = true;
    $mail ->Username = "tobennajacob1998@gmail.com";
    $mail ->Password = 'Tobe1998';
    $mail ->Port = 465; //587
    $mail ->SMTPSecure = "ssl"; //tls

    //Email Settings
    $mail ->isHTML(isHtml, true);
    $mail ->setFrom($email, $name);
    $mail ->addAddress(address, "tsartobnrys@gmail.com");
    $mail ->Subject = $subject;
    $mail ->File = $file;
    $mail ->Message = $message;

    if ($mail ->send())
        $response = "Email is sent";
    else
        $response = "Something is wrong: <br><br>". $mail ->ErrorInfo;

    exit(json_encode(array("response" => $response)));
}
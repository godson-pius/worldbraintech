<?php

require_once "config/dbconfig.php";


if (isset($_GET['request'])) {
    $id = $_GET['request'];
    
    $response = delete("projects", "project_id", $id);
    if ($response === true)  {
        $msg = "Project was deleted successfully";
        redirect("index?msg=$msg");
    } else {
        $error = "Project could not be deleted";
        redirect("index?error=$error");
        exit();
    }
}

if (isset($_GET['client'])) {
    $id = $_GET['client'];
    
    $response = delete("clients", "id", $id);
    if ($response === true)  {

        $msg = "Client was deleted successfully";
        redirect("index?msg=$msg");
    } else {
        $error = "Client could not be deleted";
        redirect("index?error=$error");
        exit();
    }
}

if (isset($_GET['event'])) {
    $id = $_GET['event'];
    $result = whereclause("events", "id", $id);
    foreach ($result as $data) {
        $event_image = $data['event_image'];
    }
    
    $response = delete("events", "id", $id);
    if ($response === true)  {
        unlink("eventImages/$event_image");
        redirect("index");
    } else {
        $msg = "Event could not be deleted";
        redirect("index?msg=$msg");
        exit();
    }
}

if (isset($_GET['contact'])) {
    $id = $_GET['contact'];
    
    $response = delete("contact_us", "contact_us_id", $id);
    if ($response === true)  {
        $msg = "Message was deleted successfully";
        redirect("index?msg=$msg");
    } else {
        $error = "Contact Message could not be deleted";
        redirect("index?error=$error");
        exit();
    }
}
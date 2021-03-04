<?php

require_once "config/dbconfig.php";


if (isset($_GET['request'])) {
    $id = $_GET['request'];
    
    $response = delete("project_requests", "project_id", $id);
    if ($response === true)  {
        $msg = "Project Request was deleted successfully";
        redirect("index?msg=$msg");
    } else {
        $error = "Project Request could not be deleted";
        redirect("index?error=$error");
        exit();
    }
}

if (isset($_GET['track'])) {
    $id = $_GET['track'];
    $result = whereclause("sermons", "track_id", $id);
    foreach ($result as $data) {
        $track_audio = $data['track_path'];
        $track_image = $data['track_image'];
    }
    
    $response = delete("tracks", "track_id", $id);
    if ($response === true)  {
        unlink("Tracks/$track_audio");
        unlink("TrackImages/$track_image");
        $msg = "Track was deleted successfully";
        redirect("index?msg=$msg");
    } else {
        $error = "Track could not be deleted";
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
    
    $response = delete("contacts", "contact_id", $id);
    if ($response === true)  {
        $msg = "Message was deleted successfully";
        redirect("index?msg=$msg");
    } else {
        $error = "Contact could not be deleted";
        redirect("index?error=$error");
        exit();
    }
}
<?php
session_start();
if (isset($_POST["submit"])) {
    include_once("dbconnect.php");
    $contact = $_POST["contact"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $deposit = $_POST["deposit"];
    $state = $_POST["state"];
    $area = $_POST["area"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $sqlregister = "INSERT INTO `tbl_room`(`contact`, `title`, `description`, `price`, `deposit`, `state`, `area`, `latitude`, `longitude`) VALUES('$contact', '$title', '$description', '$price', '$deposit', '$state', '$area', '$latitude', '$longitude')";
    
    try {
        $conn->exec($sqlregister);
        if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
            uploadImage($contact);
        }
        echo "<script>window.location.replace('mainpage.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Registration failed')</script>";
        echo "<script>window.location.replace('register.php')</script>";
    }
}

function uploadImage($id)
{
    $target_dir = "images/";
    $target_file = $target_dir . $id . ".png";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <title>RentARoom</title>
</head>

<div class="w3-container w3-margin form-container-reg">
    <div class="w3-card">
        <!-- Insert the title div here -->
        <div class="w3-container w3-center w3-purple">
            <p>New Room Registration</p>
        </div>

        <!-- Insert form section here -->
       <form class="w3-container w3-padding formco" name="registerForm"
       action="newroom.php" method="post" enctype="multipart/form-data">
        <!-- Insert image preview division-->
        <p>
            <div class="w3-container w3-border w3-center w3-padding">
                <img class="w3-image w3-round w3-margin w3-center"
                src="profile.png" style="width:50%; max-width:300px"><br>
                <input type="file" onchange="previewFile()" name="fileToUpload" id="fileToUpload"></br>
            </div>
        </p>
                <!-- contact-->
                <p>
            <label>Contact</label>
            <input class="w3-input w3-border w3-round" name="contact" id="idcontact" type="text" required>
        </p>
        <!-- title -->
        <p>
            <label>Title</label>
            <input class="w3-input w3-border w3-round" name="title" id="idtitle" type="text" required>
        </p>
        <!-- description -->
        <p>
            <label>Description</label>
            <textarea class="w3-input w3-border" id="iddescription" name="description" rows="4" cols="50" width="100%"
            placeholder="Please enter your description" required></textarea>
        </p>
        <!-- price -->
        <p>
            <label>Price</label>
            <input class="w3-input w3-border w3-round" name="price" id="idprice" type="text" required>
        </p>
        <!-- deposit-->
        <p>
            <label>Deposit</label>
            <input class="w3-input w3-border w3-round" name="deposit" id="iddeposit" type="text" required>
        </p>
        <!-- state-->
        <p>
            <label>State</label>
            <input class="w3-input w3-border w3-round" name="state" id="idstate" type="text" required>
        </p>
        <!-- area-->
        <p>
            <label>Area</label>
            <input class="w3-input w3-border w3-round" name="area" id="idarea" type="text" required>
        </p>
        <!-- latitude-->
        <p>
            <label>Latitude</label>
            <input class="w3-input w3-border w3-round" name="latitude" id="idlatitude" type="text" required>
        </p>
        <!-- longitude-->
        <p>
            <label>Longitude</label>
            <input class="w3-input w3-border w3-round" name="longitude" id="idlongitude" type="text" required>
        </p>
        <!-- Insert button submit -->
        <div class="row">
            <input class="w3-input w3-border w3-block w3-purple w3-round" type="submit"
            name="submit" value="Submit">
        </div>


        <footer class="w3-container w3-2017-greenery w3-center w3-yellow">
        <p>Copyright RentARoom</p>        
    </footer>
    </div>
</div>
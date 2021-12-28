<?php
$results_per_page = 4;
if (isset($_GET['pageno'])) {
    $pageno = (int)$_GET['pageno'];
    $page_first_result = ($pageno - 1) * $results_per_page;
} else {
    $pageno = 1;
    $page_first_result = 0;
}
include_once("dbconnect.php");
$sqlroom = "SELECT * FROM tbl_room ORDER BY title DESC";
$stmt = $conn->prepare($sqlroom);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();
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

<body>
<div class="w3-header w3-container w3-padding-64 w3-center w3-purple">
        <h1 style="font-size:calc(10px + 4vw);">RENT A ROOM</h1>
        <p style="font-size:calc(8px + 1vw);">"Room For Others"</p>
    </div>

    <div class="w3-bar w3-purple">
        <a href="newroom.php" class="w3-bar-item w3-button w3-left">New Room</a>
    </div>
<div class="w3-grid-template">
    <?php
    foreach ($rows as $room){
        $contact = $room ['contact'];
        $title = $room ['title'];
        $description = $room ['description'];
        $price = $room ['price'];
        $deposit = $room ['deposit'];
        $state = $room ['state'];
        $area = $room ['area'];
        $latitude = $room ['latitude'];
        $longitude = $room ['longitude'];
        echo "<div class='w3-center w3-padding'>";
        echo "<div class='w3-card-4 w3-dark-grey'>";
        echo "<header class='w3-container w3-yellow'>";
        echo "<h5>$title</h5>";
        echo "</header>";
        echo "<img class='w3-image' src=profile.png"."onerror=this.onerror=null;this.src=profile.png"."style='width:100%;height:200px'>";
        echo "<div class='w3-container w3-justify'><hr>";
        echo "<p>State:<i style='font-size:16px'></i>&nbsp&nbsp$state<br> 
        Area:<i style='font-size:16px'></i>&nbsp&nbsp$area<br>
        Latitude:<i style='font-size:16px'></i>&nbsp&nbsp$latitude<br>
        Longitude:<i style='font-size:16px'></i>&nbsp&nbsp$longitude<br>
        Description:<i style='font-size:16px'></i>&nbsp&nbsp$description<br>
        Contact:<i style='font-size:16px'></i>&nbsp&nbsp$contact<br>
        Price:<i style='font-size:16px'></i>&nbsp&nbsp$price<br>
        Deposit:<i style='font-size:16px'></i>&nbsp&nbsp$deposit<br></p><hr>";

            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    ?>
</div>
    <<footer class="w3-container w3-2017-greenery w3-center w3-yellow">
        <p>Copyright RentARoom</p>        
    </footer>
</body>
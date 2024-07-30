<?php
session_start();
?>

<?php 
$servername="localhost";
$username="root";
$password="";
$database="ticket_system";

$conn = new mysqli($servername,$username,$password,$database);

if($conn -> connect_error){
    echo "Connection Failed!".$conn->connect_error();
} else{
    //echo "Connected successfully";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>

<body>

   <div class="navbar">
    <ul>
        <a href="../index.php"><li>Home</li></a>
        <a href="../admin/admin.php"><li>Admin</li></a>
        <a href="../events/events.php"><li>Events</li>
        </a>
        <a href="../tickets/ticket-sales.php"><li>Sales</li></a>

    </ul>
   </div>
   
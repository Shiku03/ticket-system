<?php include("../partials/menu.php"); ?>

<form action="" method="post" id="admin-form">
   <div>
   <label for="eventname">Event Name:</label>
   <input type="text"  name="eventname" id="eventname" required>
   </div>
<div>
<label for="date">Event Date:</label>
<input type="date"  name="date" id="date" required>
</div>
    <div>
    <label for="host">Host:</label>
    <input type="text" name="host" id="host" required>
    </div>
    
    <div>
   <input type="submit" name="submit" value="Add Event">
    </div>
    
</form>
<?php 
$id = ($_GET['id']);
if(isset($_POST['submit'])){

    $name= $_POST['eventname'];
    $date = $_POST['date'];
    $host = $_POST['host'];

    $sql = "UPDATE events SET event_name='$name', event_date= '$date', host='$host' WHERE id= '$id';";
$result= $conn->query($sql);
    if($result){
        header("location".$siteurl."events.php");
        $_SESSION['update']= "Updated event successfully";
    }
} else{
    header("location".$siteurl."events.php");
    $_SESSION['update']= "Failed to update event ";
}

?>
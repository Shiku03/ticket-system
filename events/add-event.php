<?php include("../partials/menu.php"); ?>

<form action="" method="post" id="form">
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
   <input type="submit" class="submit" name="submit" value="Add Event">
    </div>
    
</form>

<?php
if(isset($_POST['submit'])){
    //pass form values to variables
    $name= $_POST['eventname'];
    $date= $_POST['date'];
    $host = $_POST['host'];

//create query
$sql="INSERT INTO events(event_name, event_date, host) VALUES('$name', '$date' , '$host');";
//execute query
$result=$conn->query($sql);
if($result){
    //echo "New Record created successfully";
    header("location:". $siteurl . "events.php");
    $_SESSION['add']= "Event added successfully";
} else {
   // echo "Failed to make new record";
   header("location:" .$siteurl. "events.php");
   $_SESSION['add']= "Event added successfully";
}

} 
?>

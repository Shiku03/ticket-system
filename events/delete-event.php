<?php include("../partials/menu.php"); ?>

<?php  
//get id of selected value
$id = ($_GET['id']);

//create query select all values of the row of that id
$sql= "DELETE FROM events WHERE id='$id';";
//delete all values of that row
$result= $conn->query($sql);
if($result){
    //echo "Record deleted successfully";
    header("location:" .$siteurl. "events.php");
    $_SESSION['delete']= "Event deleted successfully";
} else {
    //echo "Failed to delete record";
    header("location:" .$siteurl. "events.php");
    $_SESSION['delete']= "Event deleted successfully";
}

?>

<?php  include("../partials/footer.php"); ?>
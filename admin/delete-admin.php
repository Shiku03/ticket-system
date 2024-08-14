<?php include("../partials/menu.php") ?>

<?php

    $id=($_GET['id']);
 
    //create query    
    $sql="DELETE FROM admin WHERE id='$id';";
    //execute query and save data into db
    $result = $conn->query($sql);
    
    //check if query was successful
    if($result){
     //if($stmt->execute()){
     //echo "successfully deleted";
     header("location:" . $siteurl. "admin.php");
     $_SESSION['delete']= "Admin successfully deleted";

    }else  {
        header("location:" . $siteurl. "admin.php");
        $_SESSION['delete']= "Failed to successfully delete admin";
    }
    
 

?>

<?php include("../partials/footer.php") ?>
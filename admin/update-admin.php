<?php include("../partials/menu.php") ?>

<?php
$id=$_GET['id'];
$sql ="SELECT * FROM admin WHERE id='$id';";
$result = $conn->query($sql);
if($result){
    if($result->num_rows==1){
 $rows= $result->fetch_assoc();

            $id= $rows['id'];
            $fullname=$rows['full_name'];
            $username=$rows['username'];
            $role=$rows['role'];


        echo "Admin available for update";
            } else{
              echo  "Admin not available for update";
            }
    
    
}
?>

<form action="" method="post" id="admin-form">
   <div>
   <label for="fullname">Full Name:</label>
   <input type="text" placeholder="Jane" name="fullname" id="fullname" value="<?php echo $fullname?>">
   </div>
<div>
<label for="username">Username:</label>
<input type="text" placeholder="Wambui" name="username" id="username" value="<?php echo $username?>">
</div>
    <div>
    <label for="role">Role:</label>
    <input type="text" placeholder="Employee" name="role" id="role" value="<?php echo $role?>">
    </div>
    
    <div>
   <input type="submit" name="submit" value="Update Admin">
    </div>
    
</form>

<?php
if(isset($_POST['submit'])){
    $fullname= $_POST['fullname'];
   $username = $_POST['username'];
   $role = $_POST['role'];

   $sql="UPDATE admin SET full_name='$fullname', username='$username', role='$role' WHERE id=$id;";

   $result = $conn->query($sql);

   if($result){
    echo "Admin updated successfully";
   } else{
    echo "Failed to update admin";
   }
}


?>

<?php include("../partials/footer.php") ?>


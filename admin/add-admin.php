<?php 
include("../partials/menu.php");
?>

<form action="" method="post" id="form">
   <div>
   <label for="fullname">Full Name:</label>
   <input type="text" placeholder="Jane" name="fullname" id="fullname" required>
   </div>
<div>
<label for="username">Username:</label>
<input type="text" placeholder="Wambui" name="username" id="username" required>
</div>
    <div>
    <label for="role">Role:</label>
    <input type="text" placeholder="Employee" name="role" id="role" required>
    </div>
    <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    </div>
    <div>
   <input type="submit" class="submit" name="submit" value="Add Admin">
    </div>
    
</form>

<?php include("../partials/footer.php") ?>

<?php

if(isset($_POST['submit'])){
   // echo "Button clicked";
   //pass data from form to db
   $fullname= $_POST['fullname'];
   $username = $_POST['username'];
   $role = $_POST['role'];
   $pass =  md5($_POST['password']);

   //escape user input to prevent sql injection
   /*
   $fullname = $conn->real_escape_string($fullname);
   $username = $conn->real_escape_string($username);
   $role = $conn->real_escape_string($role);
   $pass = $conn->real_escape_string($pass);

*/
   //create query
   
   $sql="INSERT INTO admin(full_name, username, role , password) VALUES ('$fullname', '$username', '$role', '$pass')";
   //execute query and save data into db
   $result = $conn->query($sql);
   //check if query was successful
   if($result){
    
    //echo "success";
    header("location:" . $siteurl. "admin.php");
    $_SESSION['add']="Added admin successfully";
   }else{
    //echo "failed to add data". $sql . $conn->error;
    header("location:" . $siteurl. "admin.php");
    $_SESSION['add']="Failed to add admin";
   }
   
} 


?>
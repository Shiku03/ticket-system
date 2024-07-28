<?php 
include("../partials/menu.php");
?>

<form action="" method="post" id="admin-form">
   <div>
   <label for="fullname">Full Name:</label>
   <input type="text" placeholder="Jane" name="fullname" id="fullname">
   </div>
<div>
<label for="username">Username:</label>
<input type="text" placeholder="Wambui" name="username" id="username">
</div>
    <div>
    <label for="role">Role:</label>
    <input type="text" placeholder="Employee" name="role" id="role">
    </div>
    <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    </div>
    <div>
   <input type="submit" name="submit" value="Add Admin">
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
   
  //$stmt = $conn->prepare("INSERT INTO admin (full_name, username, role, password) VALUES (?, ?, ?, ?)");
  //$stmt->bind_param("ssss", $fullname, $username, $role, $pass);
   //check if query was successful
   if($result){
    //if($stmt->execute()){
    //echo "success";
    header("location:" . $siteurl. "admin.php");
   }else{
    echo "failed to add data". $sql . $conn->error;
   }
   
} 


?>
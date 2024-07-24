<?php 
include("../partials/menu.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fullname= $_POST['fullname'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $pass = $_POST['password'];

    if(!empty($fullname)&&!empty($username)&&!empty($role)  &&!empty($pass)){
         $query= "INSERT INTO admin(full_name, username, role, password) VALUES($fullname, $username, $role, $pass);";

         mysqli_query($conn, $query);

         echo "Admin Added Successfully ";

         header:"Location: admin.php";

    }  else {
        echo "Please fill in all the fields!";
    }
}


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
    <button class="submit">Add Admin</button>
    </div>
    
</form>

<?php include("../partials/footer.php") ?>
<?php include("../partials/menu.php") ?>
<a href="add-admin.php">
<button class="add">Add Admin</button>
</a>

<?php
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset ($_SESSION['add']);
}

if(isset($_SESSION['update'])){
    echo $_SESSION['update'];
    unset ($_SESSION['update']);
}

if(isset($_SESSION['delete'])){
    echo $_SESSION['delete'];
    unset ($_SESSION['delete']);
}
?>



<table >
    <tbody>
    <tr >
        <th>Id</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Role</th>
        <th >Action</th>
    </tr>

    <?php
    $siteurl="http://localhost:3000/admin/";
$sql= "SELECT * FROM admin;";
$idn = 1;
$result =$conn->query($sql);
if($result){
    if($result->num_rows>0){
        while($rows= $result->fetch_assoc()){
            $id= $rows['id'];
            $fullname=$rows['full_name'];
            $username=$rows['username'];
            $role=$rows['role'];
?>
            <tr>
            <td><?php echo $idn++; ?></td>
            <td><?php echo $fullname; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $role; ?></td>
            <td colspan="2">
                <a href="<?php echo $siteurl; ?>update-admin.php?id=<?php echo $id ?>">
                <button class="update">Update Admin</button>
                </a>
               <a href="<?php echo $siteurl; ?>delete-admin.php?id=<?php echo $id ?>">
               <button class="delete">Delete Admin</button>
               </a>
           
            </td>
        </tr>

        <?php

        }
    }
}

    ?>
</tbody>
</table>



<?php include("../partials/footer.php") ?>

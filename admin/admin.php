<?php include("../partials/menu.php") ?>
<a href="add-admin.php">
<button class="add">Add Admin</button>
</a>



<table >
    <tbody>
    <tr >
        <th>Id</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Role</th>
        <th>Time Reported</th>
        <th >Action</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Nikita Wanjiku</td>
        <td>shiku03</td>
        <td>Manager</td>
        <td>10.00am</td>
        <td colspan="2">
            <a href="update-admin.php">
            <button class="update">Update Admin</button>
            </a>
           <a href="delete-admin.php">
           <button class="delete">Delete Admin</button>
           </a>
       
        </td>
        
    </tr>

    <tr >
        <td>2</td>
        <td>Nikita Wanjiku</td>
        <td>shiku03</td>
        <td>Employee</td>
        <td>7.48am</td>
        <td colspan="2">
            <button class="update">Update Admin</button>
        <button class="delete">Delete Admin</button>
        </td>
    </tr>
</tbody>
</table>



<?php include("../partials/footer.php") ?>

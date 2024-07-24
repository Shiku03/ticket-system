<?php include("../partials/menu.php") ?>

<form action="" method="post" id="admin-form">
   <div>
   <label for="">First Name:</label>
   <input type="text" placeholder="Jane">
   </div>
<div>
<label for="">Last Name:</label>
<input type="text" placeholder="Wambui">
</div>
    <div>
    <label for="">Role:</label>
   
    <select name="" id="">
        <option value="">*</option>
        <option value="">Employee</option>
        <option value="">Manager</option>
    </select>
    </div>
    <div>
    <label for="">Confirm your Password:</label>
    <input type="password">
    </div>
    <div>
    <button class="submit">Update Admin</button>
    </div>
    
</form>


<?php include("../partials/footer.php") ?>
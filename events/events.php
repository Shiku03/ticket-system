<?php include("../partials/menu.php") ?>

<a href="add-event.php">
<button class="add">Add Event</button>
</a>
<?php
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset ($_SESSION['add']);
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
        <th>Event Name</th>
        <th>Event Date</th>
        <th>Host</th>
        <th >Action</th>
        
    </tr>

    <?php
 $siteurl="http://localhost:3000/events/";
 $idn=1;
 $sql= "SELECT * FROM events;";
 $result = $conn->query($sql);
 if($result){
    //check if the query is successful
    //echo "Query successful";
    if($result->num_rows>0){
        while($rows= $result->fetch_assoc()){
            $id = $rows['id'];
        $name=$rows['event_name'];
        $date= $rows['event_date'];
        $host = $rows['host'];
                    ?>
        <tr>
        <td><?php echo $idn++;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $date;?></td>
        <td><?php echo $host;?></td>
        <td colspan="2">
            <a href="<?php echo $siteurl;?>update-event.php <?php echo $id; ?>">
            <button class="update">Update Event</button>
            </a>
            <a href="<?php echo $siteurl;?>delete-event.php?id= <?php echo $id; ?>">
            <button class="delete">Delete Event</button>
            </a>

        </td>
    </tr>
        

    <?php
    }
    
 } 

}
 else {
    echo "Query unsuccessful";
 }
    
    ?>



</tbody>
</table>


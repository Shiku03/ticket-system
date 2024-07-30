<?php  include("../partials/menu.php"); ?>
<table>
    <tbody>
        <tr>
            <th>Event Name</th>
            <th>Ticket Name</th>
            <th>Ticket Number</th>
            <th>Ticket Price</th>
            <th>Time generated</th>
        </tr> 

        <?php  
        $sql="SELECT * FROM tickets;";
        $result= $conn->query($sql);
        if($result){
            //echo "Query successful";
            if($result->num_rows>0){
                //echo "data available";
                while($rows= $result->fetch_assoc()){
                    $en = $rows['eventname'];
                    $tn = $rows['ticket_name'];
                    $tno = $rows['ticket_number'];
                    $tp = $rows['ticket_price'];
                    $tg = $rows['time_generated'];
                    ?>

                    <tr>
                    <td><?php echo $en; ?></td>
                    <td><?php echo $tn; ?></td>
                    <td><?php echo $tno; ?></td>
                    <td><?php echo $tp; ?></td>
                    <td><?php echo $tg; ?></td>
                </tr>

<?php
                }
            } else{
                echo "data unavailable";
            }
        } else{
            echo "Query unsuccesful";
        }
        
        ?>

    </tbody>
</table>

<table class="extra-table">
    <tr>
        <th>Last event</th>
        <th>Last ticket name</th>
        <th>Last ticket number</th>
        <th>Last ticket price</th>
        <th>Last purchase</th>
    </tr>

    <?php 
$lt = "SELECT eventname, ticket_name, ticket_number, ticket_price , time_generated FROM tickets ORDER BY id DESC LIMIT 1;";
$result= $conn->query($lt);
if($result){
    //echo "Last Ticket data available";
    if($result->num_rows==1){
        while ($rows = $result->num_rows==1){
            $en = $rows['eventname'];
            $tn = $rows['ticket_name'];
            $tno = $rows['ticket_number'];
            $tp = $rows['ticket_price'];
            $tg = $rows['time_generated'];
?>
            <tr>
        <td><?php echo $tn; ?></td>
        <td><?php echo $tno; ?></td>
        <td><?php echo $tp; ?></td>
        <td><?php echo $tg; ?></td>
    </tr>
    <?php
        }
        //echo "Last ticket found";
    } else{
        echo "Last ticket not found";
    }
} else{
    echo "Last Ticket data unavailable";
}
    ?>

</table>

<a href="../tickets/ticket-sales.php"><button>Go back</button></a>
<?php  include("../partials/footer.php"); ?>

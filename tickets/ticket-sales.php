<?php  include("../partials/menu.php"); ?>
<table>
    <tbody>
        <tr>
            <th>Id</th>
            <th>Event</th>
            <th>Daily Sales</th>
            <th>Total Sales</th>
        </tr>
        <?php 
        $idn=1;
        $ev= "SELECT DISTINCT event_name FROM events;";
        $ds = "SELECT id FROM tickets ORDER BY id DESC LIMIT 1; ";
        $ts = "SELECT id FROM tickets ORDER BY id DESC LIMIT 1;  ";
        $evquery = $conn->query($ev);
        $dsquery = $conn->query($ds);
        $tsquery = $conn->query($ts);
        if($evquery && $dsquery && $tsquery){
            echo "Query Successful";
        } else {
            echo "Query unsuccessful";
        }
         ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
    </tbody>
</table>

<table class="extra-table">
    <tbody>
        <tr>
            <th>All Time Sales</th>
        </tr>
        <tr>
            <td>50</td>
        </tr>

    </tbody>
</table>
<a href="../tickets/ticket.php"><button>View Details</button></a>
<?php  include("../partials/footer.php"); ?>

<?php include("../partials/menu.php");?>
<table>
    <tbody>
        <tr>
            <th>Id</th>
            <th>Event</th>
            <th>Daily sales</th>
            <th>Total sales</th>
        </tr>
<?php  
$idn=1;
?>
        <tr>
            <td><?php echo $idn++ ;?></td>
            <td>Holiday</td>
            <td>50</td>
            <td>50</td>
     </tr>  
     
     <tr>
            <td>2</td>
            <td>Holiday</td>
            <td>50</td>
            <td>50</td>
     </tr>  

       
    </tbody>
</table>
<br>
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

<?php include("../partials/footer.php"); ?>
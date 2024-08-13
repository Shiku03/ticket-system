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
        //get request type(daily or weekly)
        $request_type = isset($_GET['type']) ? $mysqli->real_escape_string($_GET['type']) : 'daily';
//initialize query based on request type
        if ($request_type === 'daily') {
            $start_date = date('Y-m-d', strtotime('today'));
            $end_date = date('Y-m-d', strtotime('tomorrow'));
            $sql = "SELECT SUM(amount) AS total_sales FROM sales WHERE sale_date >= '$start_date' AND sale_date < '$end_date'";
        } elseif ($request_type === 'weekly') {
            $start_date = date('Y-m-d', strtotime('7 days ago'));
            $end_date = date('Y-m-d', strtotime('today'));
            $sql = "SELECT SUM(amount) AS total_sales FROM sales WHERE sale_date >= '$start_date' AND sale_date <= '$end_date'";
        } else {
            echo json_encode(['error' => 'Invalid request type']);
            exit;
        }

        //execute the query
        $result = $mysqli->query($sql);

$data = array();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = ['total_sales' => $row['total_sales']];
}

$mysqli->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);

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

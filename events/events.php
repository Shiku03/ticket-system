<?php include("../partials/menu.php") ?>

<a href="add-event.php">
<button class="add">Add Event</button>
</a>

<table >
    <tbody>
    <tr >
        <th>Id</th>
        <th>Event Name</th>
        <th>Host</th>
        <th>Event Date</th>
        <th >Action</th>
        
    </tr>
    <tr>
        <td>1</td>
        <td>Madaraka Day</td>
        <td>John</td>
        <td>1st June</td>
        <td colspan="2">
            <a href="update-event.php">
            <button class="update">Update Event</button>
            </a>
            <a href="delete-event.php">
            <button class="delete">Delete Event</button>
            </a>

        </td>
    </tr>

    <tr >
        <td>2</td>
        <td>Jamhuri Day</td>
        <td>Jane</td>
        <td>12th December</td>
        <td colspan="2">
        <a href="update-event.php">
            <button class="update">Update Event</button>
            </a>
            <a href="delete-event.php">
            <button class="delete">Delete Event</button>
            </a>
        </td>
    </tr>
</tbody>
</table>

<?php include("../partials/footer.php") ?>
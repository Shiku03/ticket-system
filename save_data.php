<?php
// Database connection settings
$host = 'localhost';
$db = 'your_database';
$user = 'your_user';
$pass = 'your_password';

// Create a new mysqli object for database connection
$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the random data from POST request
$randomData = isset($_POST['random_data']) ? $mysqli->real_escape_string($_POST['random_data']) : '';

// Insert data into the database
$sql = "INSERT INTO your_table (random_column) VALUES ('$randomData')";
if ($mysqli->query($sql) === TRUE) {
    $response = ['status' => 'success', 'message' => 'Data inserted successfully'];
} else {
    $response = ['status' => 'error', 'message' => 'Error: ' . $mysqli->error];
}

// Close the connection
$mysqli->close();

// Return response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>

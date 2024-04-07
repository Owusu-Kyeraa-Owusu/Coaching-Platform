<?php
include('../settings/connection.php');

// Fetch roles from the database
$sql = "SELECT id, name FROM roles";
$result = $conn->query($sql);

$roles = array(); // Initialize an empty array to store roles

// Check if there are any rows returned from the query
if ($result->num_rows > 0) {
    // Loop through each row and add it to the $roles array
    while ($row = $result->fetch_assoc()) {
        $roles[] = $row;
    }
}


?>

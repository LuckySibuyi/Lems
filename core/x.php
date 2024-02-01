<?php

include('main.php');
// Usage
$db = new Database();

// Example query
$sql = "SELECT * FROM users";
$result = $db->query($sql);
 
if ($result->num_rows > 0) {
    while ($row = $db->fetch($result)) {
        // Process each row
        echo "ID: " . $row["id"] . " Name: " . $row["first_name"] . "<br>";
    }
} else {
    echo "No records found.";
}

// Close the database connection when done
$db->close();


?>
<?php
// Database credentials
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from table
$sql = "SELECT id, title, announcement FROM announcements";
$result = $conn->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Announcement: " . $row["announcement"]. "<br>";
    }
} else {
    echo "No announcements";
}

// Close the connection
$conn->close();
?>

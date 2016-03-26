<?php
$servername = "localhost";
$username = "bb2Uw6t3";
$password = "]FU-y:)i3lA%";
$dbname = "bb2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE Users (
userid int AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
mobile VARCHAR(100) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>

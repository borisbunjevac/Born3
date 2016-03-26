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

$userid = $_POST["userid"];
$username = $_POST["username"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$sql = "UPDATE  Users
SET username='$username', email ='$email', mobile ='$mobile' 
 WHERE userid ='$userid'
";

if ($conn->query($sql) === TRUE) {
    header("location: logout_up.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Update</title>
    </head>
    <body>
        
    </body>
</html>

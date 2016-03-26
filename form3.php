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

echo "<html>";
echo "<body>";
echo "<div class='container'>";
echo "<h1>Deleting Users</h1>";
echo "<form action='up3.php' method='post'>";
echo "User: <select name='userid'>";

$sql = "SELECT userid, username FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        unset($serid,$username);
        $userid = $row['userid'];
        $username = $row['username'];
        echo '<option value="' . $userid . '">' . $username . '</option>';
  }
} else {
    echo "0 results";
}

$conn->close();

echo "</select><br><br>";

echo "<input type='submit' value='Delete'>";
echo "</form>";
echo "<a href='preg.php' target='blank'>List Users</a><br>";
echo "</div>";
echo "</body>";
echo "</html>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="stilpreg.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <meta charset="utf-8" />
        <title>Delete</title>
    </head>
    <body>
        
    </body>
</html>

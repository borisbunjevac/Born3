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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Users</title>
        <link href="stilpreg.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    </head>
    <body>
       
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
        <h1>Users</h1>
            
     <table class="table table-striped table-bordered">
     <tr>     
     <th>id</th>
     <th>Name</th>
     <th>Email Adress</th>
     <th>Mobile Number</th>
     </tr>
         <?php
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 10;
   $sql = "SELECT userid, username, email, mobile
    FROM Users
    LIMIT $start_from,10 
    ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["userid"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td><td>" . $row["mobile"]. "</td></tr>";
  }
} else {
    echo "0 results";
}

$sql = "SELECT COUNT(Users.userid) FROM Users"; 
$result = $conn->query($sql);
$row=mysqli_fetch_array($result);
$total_records = $row[0];
$total_pages = ceil($total_records / 10); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='preg.php?page=".$i."'>Strana".$i." </a> "; 
};

$conn->close();
   ?>
     </table>
              </div>
          </div> 
     </div>  
    </body>
</html>

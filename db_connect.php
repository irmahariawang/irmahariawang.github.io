<?php
// Database settings
// database hostname or IP. default:localhost
// localhost will be correct for 99% of times
//define("HOST", "localhost");
$servername="localhost";
// Database user
//define("DBUSER", "procodecg");
$username="procodecg";
// Database password
//define("PASS", "procodecg");
$password="procodecg";
// Database name
//define("DB", "db_regulusstarbaby");
$dbname="db_regulusstrababy"
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
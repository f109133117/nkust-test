<?php
echo "hello";

?>

<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "nkustdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully". "<br>";

$sql = "SELECT id, title, pub_date FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["pub_date"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

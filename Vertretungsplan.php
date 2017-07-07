<!DOCTYPE html>
<html>
<body>

<?php
$a = 0;
$servername = "localhost";
$username = "Lehrer1";
$password = "password";
$dbname = "Vertretungspläne";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Vertretungsplan_heute";
$result = mysqli_query($conn, $sql);
$b = mysqli_num_rows($result);
if ($b > $a) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>

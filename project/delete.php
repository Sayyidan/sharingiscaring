<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supplier";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_POST['id'];
$sql = "DELETE FROM supp WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
	echo "<BR>";
    echo "<meta http-equiv='refresh' content='0; url=getdata.php'>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

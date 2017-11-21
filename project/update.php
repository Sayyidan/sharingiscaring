<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supplier";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_POST['id'];
$name=$_POST['Name'];
$address=$_POST['Address'];
$contact=$_POST['Contact'];
$sql = "UPDATE supp SET Name='$name', Address='$address', Contact='$contact' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
	echo "<BR>";
    echo "<meta http-equiv='refresh' content='0; url=getdata.php'>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
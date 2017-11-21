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
$sql = "SELECT id, Name, Address, Contact, Email, Product, Price FROM supp WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>Contact</th>";
echo "<th>Email</th>";
echo "<th>Product</th>";
echo "<th>Price</th>";
echo "</tr>";
    while($row = $result->fetch_assoc()) {
  
  echo "<tr>";
  echo "<td>".$row["id"]."</td>";
  echo "<td>".$row["Name"]."</td>";
  echo "<td>".$row["Address"]."</td>";
  echo "<td>".$row["Contact"]."</td>";
  echo "<td>".$row["Email"]."</td>";
  echo "<td>".$row["Product"]."</td>";
  echo "<td>".$row["Price"]."</td>";
  echo "</tr>"; 
  echo "</table>";
    }
} 

else 

{
    echo "0 results";
	
}
$conn->close();
?>

<html>
	<body>
	<a href="update.html"><input type="button"  value="Update" style="padding-left:50px; background-color:peach "/>
	
	<a href="select.html"><input type="button"  value="Back" style="padding-left:50px; background-color:peach "/>
	</body>
</html>
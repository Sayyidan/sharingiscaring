<html>
	<body>
	<h1> Supplier's Details</h1>
	
<?php 
	require_once ('database.php'); 

	$sql = "SELECT * FROM supp ORDER BY id";
	$result = mysqli_query ($dbconn, $sql);

echo "<table border='1' >
<tr>
<td align=center><b>ID</b></td>
<td align=center><b>Name</b></td>
<td align=center><b>Address</b></td>
<td align=center><b>Contact</b></td>
<td align=center><b>Email</b></td>
<td align=center><b>Product</b></td>
<td align=center><b>Price</b></td>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
	echo "<td align=center>$data[5]</td>";
	echo "<td align=center>$data[6]</td>";
    echo "</tr>";
}

echo "</table>";
?>

	<a href="index.html"><input type="button"  value="Insert" style="padding-left:50px; background-color:peach "/>
	<a href="select.html"><input type="button" value="Select" style="padding-left:50px; background-color:peach "/>
	<a href="delete.html"><input type="button" value="Delete" style="padding-left:50px; background-color:peach "/>
		
	</body>
</html>
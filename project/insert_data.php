<?php
$link = mysqli_connect("localhost", "root", "", "supplier");
 // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$address = mysqli_real_escape_string($link, $_REQUEST['Address']);
$contact = mysqli_real_escape_string($link, $_REQUEST['Contact']);
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$product = mysqli_real_escape_string($link, $_REQUEST['Product']);
$price = mysqli_real_escape_string($link, $_REQUEST['Price']);

// attempt insert query execution
$sql = "INSERT INTO supp(id, Name, Address, Contact, Email, Product, Price) VALUES ('$id', '$name', '$address', '$contact', '$email', '$product', '$price')";
if(mysqli_query($link, $sql)){
	echo "Successful"; 
	echo "<BR>";
    echo "<meta http-equiv='refresh' content='0; url=getdata.php'>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



// close connection
mysqli_close($link);
?>

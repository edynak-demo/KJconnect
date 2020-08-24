<?php  
$con = mysqli_connect("localhost", "root", "", "KJconnect"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($con, "INSERT INTO test VALUES ('1', 'Christopher')");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KJconnect</title>
</head>
<body>

</body>
</html>

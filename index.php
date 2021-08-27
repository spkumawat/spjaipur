<?php
$server_name ="localhost";
$username="root";
$password ="";
$database_name = "nation";

$conn =mysqli_connect ($server_name, $username,$password,$database_name);
if (!$conn)
{
die ("Connection Failed:" . 
mysqli_connect_error());
}
if (isset($_POST['save']))
{
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$sql_query = "INSERT INTO  state(first_name, last_name) VALUES ('$first_name' , '$last_name');

if (mysqli_query($conn, $sql_query))
{
  echo "  Details Entry inserted successfully !";
}
else
{
echo "Error: " . $sql . "" . mysqli_error ($conn);
}
mysqli_close($conn);
}
?>




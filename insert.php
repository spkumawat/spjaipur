<?php
$firstname=filter_input(INPUT_POST,'first_name');
$lastname=filter_input(INPUT_POST,'last_name');
if(!empty($firstname)){
if(!empty($lastname)){
$host ="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="register";
$conn = new mysqli ($host,$dbusername,$dbpassword, $dbname)
if (mysqli_connect_error()){
die ('(ConnectError(' .mysqli_connect_error(). ') '
.mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (first_name ,last_name)
values ('$firstname', '$lastname');
if($conn->query($sql)){
echo "new record is inserted successfully";}
else{
echo "Error:". $sql. "<br>". $conn->error;
}
$conn->close();

}

}
else{
echo "firstname should not be empty";
die();
}



?>
<!DOCTYPE html>
<html>
<body>
<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['E-mail'];
$Password = $_POST['Password'];
$country = $_POST['country'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$conn = new mysqli('localhost','root','','contact');
if($conn->connect_error){
	die('conection failed : '.conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into ragistration(firstName,LastName,Email,Password,
	country,number,subject,message) values(?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssiss",$firstName,$LastName,$Email,$Password,
	$country,$number,$subject,$message);
	$stmt->execute();
	echo "Registration is Successfuily...";
	$stmt->close();
	$conn->close();
}
?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$email = $_POST['email'];
	
	$conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		die('connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(FirstName,LastName,email)
								values(?,?,?)");
		$stmt->bind_param("sss",$FirstName,$LastName,$email);
		$stmt->execute();
		echo "successful";
		$stmt->close();
		$conn->close();
	}
	
	?>
</body>
</html>
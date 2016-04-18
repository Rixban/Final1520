<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['femail'];
	if(strlen($email) == 0){
		header("Refresh:0");
	}
	else{
	// Create connection
		$db = new mysqli('localhost', 'albert', 'albert', 'albert');
	// Check connection
		if ($db->connect_error) {
			die("Connection failed: " . $db->connect_error);
		} 

		$query = "SELECT * FROM email WHERE e-mail.email = '$email'";
		$result = $db->query($query);
			if($result->num_rows == 0){
				$sql = "INSERT INTO `EMail` (`email`) VALUES ('$email')";
				$db->query($sql);
			}
		$db->close();
		header("Location:website.php");
		exit;
}
}
?>
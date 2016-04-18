<?php
// Create connection
$db = new mysqli('localhost', 'albert', 'albert', 'albert');
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE EMail (email TEXT NOT NULL)";
		$db->query($sql);
$db->close();
?>
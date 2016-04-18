<?php
$file = fopen("links.txt", "r+") or die("Unable to open file!");
$cnt = 0;
echo "<h1><center><b>A Few Helpful Videos and Links</b></center></h1>";
		while(!feof($file)) {
		$link = fgets($file);
		$link = rtrim($link);
		$cnt++;
		if($cnt>6){
			echo "<li>" . $link . "</li>";
		}
		else{
			echo $link;
		}
	}
	fclose($file);
?>
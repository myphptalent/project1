<?php

$db = new PDO('mysql:host=localhost;dbname=DATABASE_NAME','USER','PWD');

$query = $db->query("select * from users");

while($row = $query->fetch(PDO::FETCH_NUM)) {
	
	$cell.='<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[3].'</td><td>'.$row[6].'</td></tr>';
}

echo "<table cellspacing='2' cellpadding='2' border='2'>".$cell. "</table>";

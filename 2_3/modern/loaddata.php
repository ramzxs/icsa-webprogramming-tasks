<?php
$DBCONN = new mysqli('localhost', 'root', '', 'icsa_webprogramming_university_db');
$result = $DBCONN->query("SELECT * FROM student
    WHERE id = '{$_GET['id']}' "); // " '".$_GET['id']."' "

$row = $result->fetch_assoc();

echo $row['name'];
?>
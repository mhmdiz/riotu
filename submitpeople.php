<?php
include 'include/dbconfig.php';
$pid = $_GET['pid'];
$field = $_GET['field'];
$content = $_GET['content'];

$sql = 'UPDATE person SET '.$field.' = '.$content.' WHERE person_id = '.$pid;
$result = $dbconn->query($sql);
echo $result;
?>
<?php
include 'include/dbconfig.php';
$pid = $_GET['pid'];
$field = $_GET['field'];
$content = $_GET['content'];

$sql = 'UPDATE publications SET '.$field.' = '.$content.' WHERE publication_id = '.$pid;
$result = $dbconn->query($sql);
echo $result;
?>
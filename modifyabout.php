<?php
include 'include/dbconfig.php';

$field = $_POST["field"];
$content = $_POST["content"];
$response_message = "";
$response_code = "-1";


$sql = "UPDATE about SET $field = $content WHERE about_id = 1";

if ($dbconn->query($sql) === TRUE) {
	$response_message = "Success";
	$response_code = "1";

	//header('location: index.php');
	//header('Location: http://www.example.com/');
} else {
	$response_message = "Error";
	$response_code = "0";
}

header('Content-Type: text/xml');
echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
echo ('<response>');
echo '<field>'.$field.'</field>';
echo '<content>'.$content.'</content>';
echo ('</response>');

?>
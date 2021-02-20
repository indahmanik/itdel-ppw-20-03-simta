<?php
include_once('database_connection.php');
include_once('session.php');

$text = $_POST["text"];

$database->insert("messages", [
	"text" => $text
]);

header("Location: messages.php");

?>
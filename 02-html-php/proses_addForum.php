<?php
include_once('database_connection.php');
include_once('session.php');

$judul = $_POST["judul"];
$komentar = $_POST["komentar"];
$date_created = $_POST["date_created"];


$database->insert("forum", [
	"judul" => $judul,
	"komentar" => $komentar,
	"date_created" => $date_created
]);

header("Location: forum.php");

?>
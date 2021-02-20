<?php
include_once('database_connection.php');
include_once('session.php');

$kelompok = $_POST["kelompok"];
$NIM = $_POST["nim"];
$nama = $_POST["nama"];

$database->insert("team", [
	"kelompok" => $kelompok,
	"nim" => $NIM,
	"nama" => $nama
]);

header("Location: team.php");

?>
<?php
include_once('database_connection.php');
include_once('session.php');

$kelompok = $_DELETE["kelompok"];
$NIM = $_DELETE["nim"];
$nama = $_DELETE["nama"];

$database->delete("team", [
	"kelompok" => $kelompok,
	"nim" => $NIM,
	"nama" => $nama
]);

header("Location: team.php");

?>
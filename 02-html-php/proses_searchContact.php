<?php
include_once('database_connection.php');
include_once('session.php');

$NIM = $_POST["NIM"];
$Nama = $_POST["Nama"];
$Fakultas = $_POST["Fakultas"];
$Program_Studi = $_POST["prodi"];
$img = $_POST["img"];


$database->select("mahasiswa", [
	"NIM" => $NIM,
	"Nama" => $Nama,
    "Fakultas" => $Fakultas,
    "prodi" => $Program_Studi,
    "img" => $img
]);

header("Location: messages.php");

?>
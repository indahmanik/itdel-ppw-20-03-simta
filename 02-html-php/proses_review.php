<?php
include('database_connection.php');
include_once("vendor/autoload.php");
include_once("session.php");

use Medoo\Medoo;

if (!$_SESSION["login"]) {
    header("Location: login.php");
    exit;
  }

if (isset($_POST['submit'])) { 
$textarea = trim($_POST['save']);
$sql = "INSERT INTO artefak (text_review) VALUES ('$filename', $size)";
$result = mysqli_query($sql);
}

  $database->insert("artefak", [
    "text_review" => $textarea
  ]);
header("Location: review.php");
?>

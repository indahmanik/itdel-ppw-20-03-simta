<?php
include_once('database_connection.php');
include_once("vendor/autoload.php");
include_once('session.php');

if (!$_SESSION["login"]) {
  header("Location: login.php");
  exit;
}

$event = $database->select(
  "event",
  "*",
  [
      "ORDER" => [
          "tanggal" => "ASC"
      ]
  ]
);

$artefak = $database->select(
  "artefak",
  "*",
  [
      "ORDER" => [
          "kode_administrasi" => "ASC"
      ]
  ]
);

$loader = new Twig_Loader_Filesystem("templates");
$twig = new Twig_Environment($loader);
$template = $twig->load('CekFile_templates.php');
// render the template.
echo $template->render([
  "login" => $_SESSION["login"],
  "user" => $_SESSION["loginuser"],
  "event" => $event,
  "artefak" => $artefak
]);
?>

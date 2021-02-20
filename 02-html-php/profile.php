<?php
include_once('database_connection.php');
include_once("vendor/autoload.php");
include_once('session.php');

if (!$_SESSION["login"]) {
  header("Location: login.php");
  exit;
}

$profile = $database -> select(
  "mahasiswa", 
  "*",
  [
      "nim"=>[
        "12S18037"
      ]
]);

$event = $database->select(
  "event",
  "*",
  [
      "ORDER" => [
          "date" => "ASC"
      ]
  ]
);

$loader = new Twig_Loader_Filesystem("templates");
$twig = new Twig_Environment($loader);
$template = $twig->load('profile_template.html');
// render the template.
echo $template->render([
  "login" => $_SESSION["login"],
  "user" => $_SESSION["loginuser"],
  "event" => $event,
  "profile" => $profile
]);
?>
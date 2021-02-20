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
          "date" => "ASC"
      ]
  ]
);

$team = $database->select(
  "team",
  "*",
  [
      "ORDER" => [
          "kelompok" => "ASC"
      ]
  ]
);

$loader = new Twig_Loader_Filesystem("templates");
$twig = new Twig_Environment($loader);
$template = $twig->load('team_template.html');
// render the template.
echo $template->render([
  "login" => $_SESSION["login"],
  "user" => $_SESSION["loginuser"],
  "event" => $event,
  "team" => $team
]);
?>
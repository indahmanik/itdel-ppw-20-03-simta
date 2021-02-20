<?php
include_once('session.php');
include_once("vendor/autoload.php");
if ($_SESSION["login"]) {
    header("Location: index.php");
    exit;
}
$loader = new Twig_Loader_Filesystem("templates");
$twig = new Twig_Environment($loader);
$template = $twig->load('login.html');
// render the template.
echo $template->render();

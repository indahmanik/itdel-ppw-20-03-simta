<?php
include_once('session.php');
$_SESSION["login"] = false;
$_SESSION["loginuser"] = NULL;
header("Location: login.php");
exit;
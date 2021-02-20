<?php
session_start();

if (!isset($_SESSION["login"])) {
    $_SESSION["login"] = false;
}

if (!isset($_SESSION["loginuser"])) {
    $_SESSION["loginuser"] = NULL;
    $_SESSION["loginuserrole"] = NULL;
}
?>

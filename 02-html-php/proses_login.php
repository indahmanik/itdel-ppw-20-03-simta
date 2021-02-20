<?php
include_once('database_connection.php');
include_once('session.php');

if ($_SESSION["login"]) {
    header("Location: index.php");
    exit;
}

$username = $_POST["username"];
$password = $_POST["password"];
$authenticated = false;

$user = $database->select(
    "users",
    "*",
    [
        "username" => $username,
        "password" => $password
    ]
);

$user = $user[0];

if ($user) {
    $authenticated = true;
}

if (!$authenticated) {
    header("Location: login.php");
} else {
    $_SESSION["loginuser"] = $user["username"];
    if($user["role"] == 0){
		$_SESSION["loginuserrole"] = "dosen";
        $_SESSION["login"] = true;
        header("Location: index_dosen.php");
    } else if ($user["role"] == 1){
		$_SESSION["loginuserrole"] = "mahasiswa";
        $_SESSION["login"] = true;
        header("Location: index.php");
    }
}
?>

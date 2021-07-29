
<?php session_start() ?>
<?php
$_SESSION["admin_id"] = null;
$_SESSION["admin_nome"] = null;
$_SESSION["admin_password"] = null;
$_SESSION["admin_email"] = null;

header("location: ../../index.html")

?>


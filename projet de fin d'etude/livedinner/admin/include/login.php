<?php include "../../conn_db.php" ?>
<?php session_start() ?>
<?php
if (isset($_POST['login'])) {

    $admin_email =  $_POST['admin_email'];
    $admin_password =  $_POST['admin_password'];
    $admin_email = mysqli_real_escape_string($conn, $admin_email);
    $admin_password = mysqli_real_escape_string($conn, $admin_password);


    $query = "SELECT * FROM `admin` WHERE `admin_email`= '{$admin_email}' ";
    $select_user = mysqli_query($conn, $query);
    if (!$select_user) {
        die("QUERY FAILED" . mysqli_errno($conn));
    }
    while ($row = mysqli_fetch_array($select_user)) {
        $db_admin_id = $row["admin_id"];
        $db_admin_nome = $row["admin_nome"];
        $db_admin_password = $row["admin_password"];
        $db_admin_email = $row["admin_email"];
    }

    if ($admin_email === $db_admin_email && $admin_password === $db_admin_password) {
        $_SESSION["admin_id"] = $db_admin_id;
        $_SESSION["admin_nome"] = $db_admin_nome;
        $_SESSION["admin_password"] = $db_admin_password;
        $_SESSION["admin_email"] = $db_admin_email;
        header("location: ../index.php");
    } else {
        header("location: ../login.php");
    }
}


?>


<?php
include_once("config.php");

if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $user_id");

    if($result) {
        header("Location: index.php?status=success");
        exit();
    } else {
        header("Location: index.php?status=error");
        exit();
    }
} else {
    header("Location: index.php?status=error");
    exit();
}
?>

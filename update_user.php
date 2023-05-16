<?php
include_once("config.php");

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['father_name']) && isset($_POST['mother_name']) && isset($_POST['district_name'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $district_name = $_POST['district_name'];

    $result = mysqli_query($mysqli, "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address', father_name='$father_name', mother_name='$mother_name', district='$district_name' WHERE id=$id");

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

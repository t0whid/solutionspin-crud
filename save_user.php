<?php
include_once("config.php");

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['father_name']) && isset($_POST['mother_name']) && isset($_POST['district_name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $district_name = $_POST['district_name'];

    
    $result = mysqli_query($mysqli, "INSERT INTO users(name, email, phone, address, father_name, mother_name, district) VALUES('$name', '$email', '$phone', '$address', '$father_name', '$mother_name', '$district_name')");
    
   
    if($result) {
        $user_id = mysqli_insert_id($mysqli);

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

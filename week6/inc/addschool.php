<?php

include ("functions.php");
// print_r($_POST);
// Array ( [schoolName] => test [schoolType] => test [phone] => test [email] => tets@g.com [submitbtn] => )


$schoolName = $_POST["schoolName"];
$schoolType = $_POST["schoolType"];
$phone = $_POST["phone"];
$email = $_POST["email"];

require ("../reusables/connect.php");
$query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) VALUES ('" . mysqli_real_escape_string($connect, $schoolName) . "','" . mysqli_real_escape_string($connect, $schoolType) . "','" . mysqli_real_escape_string($connect, $phone) . "','$email')";

$school = mysqli_query($connect, $query);

if ($school) {
    set_message("school added successfully", "success");
    header('Location: ../index.php');
} else {
    echo "Failed: ", mysqli_error($connect);
}
?>
<!-- this file will handle my logic- add, etc -->
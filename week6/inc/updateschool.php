<?php
require ("../reusables/connect.php");
include ("functions.php");

$id = $_POST["id"];
$schoolName = $_POST["schoolName"];
$schoolType = $_POST["schoolType"];
$phone = $_POST["phone"];
$email = $_POST["email"];


$query = "UPDATE `schools` SET 
        `School Name` = '" . mysqli_real_escape_string($connect, $schoolName) . "',
        `School Level` = '" . mysqli_real_escape_string($connect, $schoolLevel) . "',
        `Phone` = '" . mysqli_real_escape_string($connect, $phone) . "',
        `Email` = '" . mysqli_real_escape_string($connect, $email) . "'
        WHERE `id` = '" . mysqli_real_escape_string($connect, $id) . "'";


// $query = "UPDATE `schools` SET `School Name` = $schoolName, `School Level` = $schoolType, `Phone` = $phone, `Email`=  $email WHERE `id`= '$id' ";

$school = mysqli_query($connect, $query);

if ($school) {
  set_message("school updated successfully", "success");
  header('Location: ../index.php');
} else {
  echo "Failed: ", mysqli_error($connect);
}

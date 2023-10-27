<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mbts";
$conn = mysqli_connect($hostname,$username,$password);

$ssql = mysqli_query($conn,"CREATE DATABASE if not exists `$database`");
mysqli_query($conn,"CREATE TABLE if not exists `mbts`.`login_details` (`Username` VARCHAR(50) NOT NULL , `Password` VARCHAR(50) NOT NULL , `is_admin` VARCHAR(50) NOT NULL , `is_FirstLogin` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;");
mysqli_query($conn,"CREATE TABLE if not exists `mbts`.`books` (`Accession_no` VARCHAR(50) NOT NULL , `Title` VARCHAR(50) NOT NULL , `Branch` VARCHAR(50) NOT NULL , `Author` VARCHAR(50) NOT NULL , `is_available` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;");
mysqli_query($conn,"CREATE TABLE if not exists `mbts`.`transactions` (`Transaction_id` VARCHAR(50) NOT NULL , `Accession_no` VARCHAR(50) NOT NULL , `Title` VARCHAR(50) NOT NULL , `Reciver_pin-no` VARCHAR(50) NOT NULL , `Status` VARCHAR(50) NOT NULL , `Transaction_Position` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;");
mysqli_query($conn,"CREATE TABLE if not exists `mbts`.`student_details` (`Pin_no` VARCHAR(50) NOT NULL , `Name` VARCHAR(50) NOT NULL , `Gender` VARCHAR(50) NOT NULL , `Scheme` VARCHAR(50) NOT NULL , `Branch` VARCHAR(50) NOT NULL  ) ENGINE = InnoDB;");
if (mysqli_query($conn,"SELECT * FROM `mbts`.`login_details` WHERE Username = '$username'") == false)
{
    mysqli_query($conn,"INSERT INTO `mbts`.`login_details`(`Username`, `Password`, `is_admin`) VALUES ('admin','admin','1')");
}
?>
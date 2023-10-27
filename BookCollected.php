<?php
    include('sql_query\config.php');
    if($_SESSION["is_LoggedIn"] || $_SESSION['is_admin']){
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
           $pin =  $_POST['confrimReciversPinno1'];
           $id = $_POST['confrimAccessioninput'];
           echo isset($_POST['confrimReciversPinno1']);
           $date = date("Y/m/d");
           echo $date;
           $newDate  = date('Y-m-d', strtotime($date . ' +15 days'));
           echo $newDate;
           mysqli_query($conn,"UPDATE `mbts`.`transactions` SET `Status` = 'book was collected by student',`issuance_date` =  '$date',`Due_date` = '$newDate'  WHERE `Accession_no` = '$id' AND `Reciver_pin-no` = '$pin' AND `Status` = 'Collect Book by this evening'");
        }
    }
    header("Location: index.php");
    
?>
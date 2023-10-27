<?php
    include('sql_query\config.php');
    if($_SESSION["is_LoggedIn"] & $_SESSION['is_admin']){
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $id = $_POST['Accessioninput'];
            $pin = $_POST['ReciversPinno1'];
            $result = mysqli_query($conn,"SELECT * FROM `mbts`.`books` WHERE `Accession_no` = '$id' ");
            $row = mysqli_fetch_assoc($result);
            if($row['is_available'] == 1){
                echo "JFSLDFJ";
                    mysqli_query($conn,"UPDATE `mbts`.`books` SET `is_available` = 0 WHERE `Accession_no` = '$id' ");
                    mysqli_query($conn,"UPDATE `mbts`.`transactions` SET `Status` = 'Collect Book by this evening' WHERE `Accession_no` = '$id' AND `Reciver_pin-no` = '$pin' AND `Status` = 'waiting for admin to accept'");
                     header("Location: index.php");
            }
            else{
                $_SESSION['Bookcurrently_unavailable'] = true;
                header("Location: index.php");
            }
        }

        header("Location: index.php");
    }else{
        header("Location: index.php");
    }


?>
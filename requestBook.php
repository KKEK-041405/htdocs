<?php
include('sql_query\config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $BOOKID =  $_POST['Accessioninput'];
    $result = mysqli_query($conn,"SELECT * FROM `mbts`.`transactions` WHERE `Accession_no` = $BOOKID AND `Transaction_Position` = 'incomplete' ");
    $row = mysqli_fetch_assoc($result);
    echo !$row;
    if(!$row)
        {
            echo "hel";
            $result = mysqli_query($conn,"SELECT * FROM `mbts`.`books` WHERE `Accession_no`=$BOOKID");
            $row = mysqli_fetch_assoc($result);
            
            $BookTitle = $row['Title'];
            $ReciverPin = $_SESSION['username'];
            // $transactionsStatus = $row[' '];
            $transactionsID = 'testID001';
            $sql = "INSERT INTO `mbts`.`transactions` (
                           `Transaction_id`, 
                           `Accession_no`, 
                           `Title`, 
                           `Reciver_pin-no`, 
                           `issuance_date`, 
                           `Due_date`, 
                           `Status`,
                           `Transaction_Position`
                       ) 
                       VALUES (
                           '$transactionsID',
                           '$BOOKID','$BookTitle','$ReciverPin','not issued','not issued','waiting for admin to accept','incomplete')";
           $result = mysqli_query($conn,$sql);
           echo mysqli_query($conn,$sql);
           if($result){
               header("Location: /student.php?tab=books");
           }
    }
        
    if($row)
    header("Location: index.php");
     
}
?>

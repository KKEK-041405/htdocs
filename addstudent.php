<?php
    include('sql_query\config.php');
    if(!$_SESSION["is_LoggedIn"] || !$_SESSION['is_admin']){
            header("Location: index.php");
    }
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $UsernameINS =   $_POST['pin'];
        $name   =   $_POST['password'];
        $branch      =   $_POST['confrimpass'];
        $scheme = $_POST['Scheme'];
        $gender = $_POST['Gender'];
        
        $result = mysqli_query($conn,"SELECT * FROM `mbts`.`login_details` WHERE `Username` = '$UsernameINS'");
        $row = mysqli_fetch_assoc($result);
        if($row){
            $_SESSION["student_exist"] = true;
            header("Location: admin.php?tab=ADD_students");
        }
        if(!$row){
            mysqli_query($conn,"INSERT INTO `mbts`.`login_details` (`Username`,`Password`,`is_admin`,`is_FirstLogin`) VALUES ('$UsernameINS','1234','0','1')");
            mysqli_query($conn,"INSERT INTO `mbts`.`student_details`(`Pin_no`, `Name`, `Gender`, `Scheme`, `Branch`) VALUES ('$UsernameINS','$name','$gender','$scheme','$branch')");
            $_SESSION['Addstudent_Sucess'] = true;
            header("Location: admin.php?tab=ADD_students");
        }
    }
?>

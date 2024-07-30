<?php 

    var_dump($_SESSION);
    if(isset($_SESSION['empId'])){
        header('Location: empDashboard.php');
    }
    elseif (isset($_SESSION['adminId'])) {
        header('Location: adminDashboard.php');
    }
    else{
        header('Location: auth/login.php');
    }

?>

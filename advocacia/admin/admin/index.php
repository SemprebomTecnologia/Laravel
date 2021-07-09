<?php
    
    if (isset($_SESSION['id'])){
        header('Location: ./sys/admin.php');
    }else{
        header('Location: ./login.php');
    }
   
?>    


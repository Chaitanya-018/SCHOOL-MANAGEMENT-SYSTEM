<?php
$conn = mysqli_connect('localhost', 'root', '', 'sms');
if($_REQUEST['id']){
    $del_id = $_REQUEST['id'];
    
   $del = " DELETE FROM `schclass` WHERE id='$del_id'";
    if(mysqli_query($conn, $del)){
        header('location:adminmngcls.php');

    }
    else{
        echo "we have duplicate id";
    }
}


?>
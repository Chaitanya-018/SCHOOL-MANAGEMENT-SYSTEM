<?php
$conn = mysqli_connect('localhost', 'root', '', 'sms');
if($_REQUEST['Sno']){
    $del_id = $_REQUEST['Sno'];
    
   $del = " update student_login set hide= '1' where Sno='$del_id'";
    if(mysqli_query($conn, $del)){
        header('location:admngstu.php');

    }
    else{
        echo "we have duplicate id";
    }
}
?>
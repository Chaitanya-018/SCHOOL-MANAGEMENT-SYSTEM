<?php
$conn = mysqli_connect('localhost', 'root', '', 'sms');
if($_REQUEST['id']){
    $del_id = $_REQUEST['id'];
    
   $del = "update tbpublice_notice set hide= '1' where id='$del_id'";
    if(mysqli_query($conn, $del)){
        header('location:man_pub_not.php');

    }
    else{
        echo "we have duplicate id";
    }
}
?>
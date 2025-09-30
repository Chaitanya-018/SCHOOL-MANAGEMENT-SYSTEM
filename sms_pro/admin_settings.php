<?php
session_start();
?>



<?php
$conn=mysqli_connect('localhost','root','','sms');
$error1='';
$error2='';
$suss='';

if(isset($_REQUEST['submit'])){
$curr=$_REQUEST['currentpassword'];
$new=$_REQUEST['newpassword'];
$cnew=$_REQUEST['confirmpassword'];
$usname=$_SESSION['user'];

$sql="select * from admin_login where user_name='$usname'";
$res=mysqli_query($conn,$sql);
mysqli_num_rows($res);
    $row=mysqli_fetch_array($res);
    $pwd = $row['password'];
    $user = $row['user_name'];
    if($pwd==$curr){
        if($new==$cnew){
            $query="update admin_login set password='$cnew' where user_name ='$user'";
            mysqli_query($conn,$query);
            // header('location:admin_profile.php');
            $suss='Password updated successfully';
        }
        else{
           $error2= "New Password and Confirm Password Doesn't Match";
        }
    }
    else{
        $error1='Invalid Password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add class</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include_once('includes/nav.php');?>
    </div>
    <div class="row" style="height:620px">
      <div class="col-sm-2 bg-dark text-white" >
        <?php include_once('includes/aside.php');?>
      </div>
      <div class="col-sm-10" style="background-color:lightcyan">
        <div class="row mt-4">
          <div class="col-sm-2">
            <h5>Change Password</h5>
          </div>
          <div class="col-sm-10"><a href="admindash.php" class="text-decoration-none ms-5">Dashboard</a> / Students
          </div>

        </div>

        <!-- ------------add from here--------------------------- -->
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Change Password</h4>
                   
                    <form class="forms-sample" name="changepassword" method="post" onsubmit="return checkpass();">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Current Password</label>
                        <input type="password" name="currentpassword" id="currentpassword" class="form-control" required="true">
                        <span class="text-danger"><?php echo $error1;?></span>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">New Password</label>
                        <input type="password" name="newpassword" class="form-control" required="true">
                        <span class="text-danger"><?php echo $error2;?></span>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" value="" class="form-control" required="true">
                        <span class="text-danger"><?php echo $error2;?></span>
                      </div>
                      
                      <button type="submit" class="btn btn-primary ms-2 mt-2" name="submit">Change</button>
                     <p class="text-success"><?php echo $suss;?></p>
                    </form>
                  </div>
                </div>
              </div>
<!-- -----------------col-sm-10----------div below close--- -->
      </div>

    </div>
    <div class="row">
      <?php include_once('includes/footer.php');?>

    </div>


  </div>

</body>

</html>
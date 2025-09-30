<?php
session_start();
if(isset($_GET['log'])){
  session_destroy();
  header("location:studentlogin.php");
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
      
      <div class="col-sm-2  bg-dark text-white ">
  <h4 class="mt-3 ms-2">SMS</h4>
</div>
<div class="col-sm-8 mt-4 mb-4  ">
  <h6>
    <?php echo $_SESSION['studentname'];?>, Welcome dashboard!
  </h6>
</div>
<div class="col-sm-2 mt-3 mb-3">
  <div class="dropdown">
    <button class="btn btn-white dropdown-toggle ms-5" type="button" data-bs-toggle="dropdown" >
    <img class="img rounded-circle ml-2" src="https://img.freepik.com/premium-vector/happy-school-boy-wearing-school-uniform-waving-hand-white-background_1023984-27449.jpg" width="30" height="30">
      <?php echo $_SESSION['studentname'];?>
    </button>
    <ul class="dropdown-menu">
      
      
        <div class="dropdown-header text-center">
          <img class="img-md rounded-circle" src="http://localhost/chaitu/Student-Management-System-PHP/Student%20Management%20System%20PHP/studentms/user/images/faces/face8.jpg" >
          <p class="mb-1 mt-3"><?php echo $_SESSION['studentname'];?></p>
          <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['Email'];?></p>
        </div> <a class="dropdown-item" href="stu_profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My
          Profile</a>
        <a class="dropdown-item" href="stu_sett.php"><i class="dropdown-item-icon icon-energy text-primary"></i>
          Setting</a>
        <a class="dropdown-item" href="studentlogin.php?log='1'"><i class="dropdown-item-icon icon-power text-primary"></i>Sign
          Out</a>
      
    </ul>
  </div>

</div>
    </div>
    <div class="row">
      <div class="col-sm-2 bg-dark text-white" style="height:620px;">
        
        
           
        <div class="row mt-1 ">
                  <div class="col-sm-1"></div>
                <div class="col-sm-2"><img class="img rounded-circle me-3 mt-2" src="https://img.freepik.com/premium-vector/happy-school-boy-wearing-school-uniform-waving-hand-white-background_1023984-27449.jpg" width="35" height="35"></div>
                  <div class="col-sm-8">
                    <?php echo $_SESSION['studentname'];?>
                    <span style="font-size:12px" class="text-secondary"><?php echo $_SESSION['Email'];?></span>
                </div>
                    
                  </div>
                  <div class="row mt-1 ">
                    <h6 class="text-success mt-3 ms-3"> DASHBOARD</h6>
                    <hr>
                  </div>
                  
                  <div class="row"><a href="studentpage.php" class="text-decoration-none text-white  ms-3">Dashboard<i class="bi bi-laptop "style="margin-left:34%"></i></a></div><hr>
                  <div class="row"><a href="stu_view_not.php" class="text-decoration-none text-white  ms-3">View Notice<i class="bi bi-laptop "style="margin-left:30%"></i></a></div><hr>  
                  
                  
                  
            
        
      </div>
      <div class="col-sm-10" style="background-color:lightcyan">
        <div class="row mt-4 ">
        <div class="col-sm-3">
            <h5>Change Password</h5>
          </div>
          <div class="col-sm-9"><a href="studentpage.php" class="text-decoration-none ms-5">Dashboard</a> / View Notice
          </div>
          

        </div>

        <!-- ------------add from here--------------------------- -->


        <?php
        $conn=mysqli_connect('localhost','root','','sms');
$error1='';
$error2='';

if(isset($_REQUEST['submit'])){
$curr=$_REQUEST['currentpassword'];
$new=$_REQUEST['newpassword'];
$cnew=$_REQUEST['confirmpassword'];
$stunum=$_SESSION['studentname'];

$sql="select * from student_login where StudentName='$stunum'";
$res=mysqli_query($conn,$sql);
mysqli_num_rows($res);
    $row=mysqli_fetch_array($res);
    $pwd = $row['Password'];
    $stuname = $row['StudentName'];
    if($pwd==$curr){
        if($new==$cnew){
            $query="update student_login set Password='$cnew' where StudentName ='$stunum'";
            mysqli_query($conn,$query);
            header('location:studentpage.php');
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
                      <div class="form-group">
                        <label for="exampleInputPassword4">Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" value="" class="form-control" required="true">
                        <span class="text-danger"><?php echo $error2;?></span>
                      </div>
                      
                      <button type="submit" class="btn btn-primary ms-2 mt-2" name="submit">Change</button>
                     
                    </form>
                  </div>
                </div>
              </div>
     

<!-- -----------------col-sm-10----------div below close--- -->
      </div>

    </div>
    <div class="row">
    <div class="col-sm-2 bg-dark p-4"></div>
 <div class="col-sm-10 text-secondary " style="background-color: lightcyan;">Student Management System</div>
       
                 

    </div>


  </div>

</body>

</html>





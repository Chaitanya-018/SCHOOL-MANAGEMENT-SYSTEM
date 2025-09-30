<?php
session_start();
?>
<?php


$conn=mysqli_connect('localhost','root','','sms');
$usname=$_SESSION['user'];
$sql= "select * from admin_login where user_name='$usname'";
$view= mysqli_query($conn,$sql);

if(mysqli_num_rows($view)==1){
$row= mysqli_fetch_array($view);
$admin=$row['Admin_name'];
$user=$row['user_name'];
$con=$row['ContactNumber'];
$em=$row['email'];
$date=$row['creation_date'];


}





if(isset($_REQUEST['submit'])){
    
  $name = $_REQUEST['adminname'];
  $email = $_REQUEST['email'];
//    $User = $_REQUEST['username'];
  $num = $_REQUEST['mobilenumber'];
//   $reg = $_REQUEST['credate'];

  $query= "UPDATE admin_login SET Admin_name ='$name', email='$email',ContactNumber='$num' WHERE user_name='$usname'";

if(mysqli_query($conn,$query)){
    header('location:admin_profile.php');
 
}
else{
  echo"something fishy";
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
            <h5>Add Notice</h5>
          </div>
          <div class="col-sm-10"><a href="admindash.php" class="text-decoration-none ms-5">Dashboard</a> / Students
          </div>

        </div>

        <!-- ------------add from here--------------------------- -->
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Admin Profile</h4>
                   
                    <form class="forms-sample" method="post" action="" >
                        <div class="form-group">
                        <label for="exampleInputName1">Admin Name</label>
                        <input type="text" name="adminname" value="<?php Echo $admin ;?>" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">User Name</label>
                        <input type="text" name="username" value="<?php Echo $user ;?>" class="form-control" readonly="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Contact Number</label>
                        <input type="text" name="mobilenumber" value="<?php Echo $con ;?>" class="form-control" maxlength="10" required="true" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Email</label>
                         <input type="email" name="email" value="<?php Echo $em ;?>" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Admin Registration Date</label>
                         <input type="text" name="credate" value="<?php Echo $date ;?>" class="form-control">
                      </div> 
                      <button type="submit" class="btn btn-primary ms-2 mt-2" name="submit">Update</button>
                      
                     
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
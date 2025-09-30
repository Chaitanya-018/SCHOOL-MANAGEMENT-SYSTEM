<?php
session_start();
$conn=mysqli_connect('localhost','root','','sms');
if(isset($_POST['login'])){
    $stuname =$_REQUEST['studentname'];
    $pass=$_REQUEST['pass'];
    $sql="select * from student_login where StudentName='$stuname' and Password='$pass'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)==1){
        $row = mysqli_fetch_array($res);
            $em=$row['StudentEmail'];
            $class=$row['StudentClass'];
        header('location:studentpage.php');
    }
    else{
        echo "user doesn't exits";
    }
    $_SESSION['studentname']=$stuname;
    $_SESSION['Email']=$em;
    $_SESSION['cls']=$class;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body style="background-color:whitesmoke;">
    <section class="vh-100" style="background-color: rgb(84, 73, 241);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://cdn.britannica.com/35/230835-131-63152980/School-children-wearing-school-uniforms.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action=""   enctype="multipart/form-data">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="bi bi-boxes me-3" style="color: #ff6219;font-size:50px;"></i>
                    <span class="h1 fw-bold mb-0">Student Login</span>
                  </div>

                  <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;">JB Educational Society</h5>

                  <div class="form-outline mb-3">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" name="studentname">
                    <label class="form-label" for="form2Example17">User name</label>
                  </div>

                  <div class="form-outline mb-3">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="pass">
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-3 d-grid">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="login" >Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-1 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                      <div class="d-grid mb-3 mt-3">
                    <button type="submit" class="btn btn-success btn-lg  btn-block"><a href="../home_Page.php" style="text-decoration:none;color:white;">Back to home</a></button>
                    </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    


</body>

</html>
<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'sms');
if(isset($_GET['log'])){
  session_destroy();
  header("location:adminlogin.php");
}
$get = "select * from schclass";
$data = mysqli_query($conn,$get);
$Num=mysqli_num_rows($data);
?>
<?php
$sql="select * from student_login where hide=0";
$data1=mysqli_query($conn,$sql);
$num1=mysqli_num_rows($data1);
?>
<?php
$sql="select * from notice_stu where hide=0";
$data2=mysqli_query($conn,$sql);
$num2=mysqli_num_rows($data2);
?>
<?php
$sql="select * from tbpublice_notice where hide=0";
$data3=mysqli_query($conn,$sql);
$num3=mysqli_num_rows($data3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System|||Dashboard</title>
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
    <div class="row">
      <div class="col-sm-2 bg-dark text-white" style="height:620px;">
        <?php include_once('includes/aside.php');?>
      </div>
      <div class="col-sm-10" style="background-color:lightcyan">
        <!-- <div class="row mt-5">

          <div class="col-md-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-sm-flex align-items-baseline report-summary-header">
                      <h5 class="font-weight-semibold">Report Summary</h5> <span class="ms-auto">Updated Report</span>
                      <button class="btn btn-icons border-0 p-2"><i class="bi bi-arrow-clockwise"></i></button>
                    </div>
                  </div>
                </div>
                <div class="row report-inner-cards-wrapper">
                  <div class=" col-md -6 col-xl report-inner-card">
                    <div class="inner-card-text">
                      <span class="report-title">Total Class</span>
                      <h4>9</h4>
                      <a href=""><span class="report-count"> View Classes</span></a>
                    </div>
                    <div class="inner-card-icon bg-success">
                      <i class="icon-rocket"></i>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl report-inner-card">
                    <div class="inner-card-text">
                      <span class="report-title">Total Students</span>
                      <h4>5</h4>
                      <a href="#"><span class="report-count"> View Students</span></a>
                    </div>
                    <div class="inner-card-icon bg-danger">
                      <i class="icon-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl report-inner-card">
                    <div class="inner-card-text">
                      <span class="report-title">Total Class Notice</span>
                      <h4>4</h4>
                      <a href="$#"><span class="report-count"> View Notices</span></a>
                    </div>
                    <div class="inner-card-icon bg-warning">
                      <i class="icon-doc"></i>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl report-inner-card">
                    <div class="inner-card-text">
                      <span class="#">Total Public Notice</span>
                      <h4>2</h4>
                      <a href="#"><span class="report-count"> View PublicNotices</span></a>
                    </div>
                    <div class="inner-card-icon bg-primary">
                      <i class="icon-doc"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div> -->



        
                <div class="card m-4">
                    <div class="card-body ">
                        <div class="row p-1 mb-3 border-bottom">
                            <div class="col-lg-3 ">
                                <p style="font-size:19px;font-weight:bold;">Report Summary</p>
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-2" style="position: relative; bottom: 0px;">
                                <P>Updated Report<a type="button" class="btn btn-icons border-0 p-2">
                                        <i class="bi bi-arrow-clockwise"></i></a></P>
                            </div>
                            <!-- <hr> -->
                        </div>
                        <div class="row report-inner-cards-wrapper px-3 mb-2">
                            <div class="col-lg-3 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <strong>Total Class</strong>
                                        <h6><?php echo $Num; ?></h6>
                                        <a href="adminmngcls.php" class="text-decoration-none text-info">View Classes</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inner-card-icon bg-success" style="width:62px; height: 62px;">
                                            <i class="bi bi-rocket-takeoff d-flex justify-content-center pt-3 text-white"
                                                style="font-size: 25px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <strong>Total Students</strong>
                                        <h6><?php echo $num1; ?></h6>
                                        <a href="admngstu.php" class="text-decoration-none text-info">View Students</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inner-card-icon bg-danger" style="width:62px; height: 62px;">
                                            <i class="bi bi-person d-flex justify-content-center pt-3 text-white"
                                                style="font-size: 25px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <strong>Total Class Notice</strong>
                                        <h6><?php echo $num2;?></h6>
                                        <a href="noti_mang.php" class="text-decoration-none text-info">View Notice</a>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="inner-card-icon bg-warning" style="width:62px; height: 62px;">
                                            <i class="bi bi-file-earmark d-flex justify-content-center pt-3 text-white"
                                                style="font-size: 25px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <strong>Total Public Notice</strong>
                                        <h6><?php echo $num3;?></h6>
                                        <a href="man_pub_not.php" class="text-decoration-none text-info">View PublicNotice</a>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="inner-card-icon bg-info" style="width:62px; height: 62px;">
                                            <i class="bi bi-file-earmark d-flex justify-content-center pt-3 text-white"
                                                style="font-size: 25px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
     
    </div>
    <div class="row">
      <?php include_once('includes/footer.php');?>

    </div>
  </div>

</body>

</html>
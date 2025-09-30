<?php
session_start();
?>

<?php
$conn=mysqli_connect('localhost','root','','sms');
if($_GET['id']){
    $id = $_GET['id'];
    $view="select * from  tbpublice_notice where id='$id'";
    $v = mysqli_query($conn,$view);
    if(mysqli_num_rows($v)==1){
        $row=mysqli_fetch_array($v);
       
}else{
  echo "we have dublicate values";
}
}
if(isset($_REQUEST['submit'])){
    $nottitle=$_POST['nottitle'];
    $notmsg=$_POST['notmsg'];
    $update ="update tbpublice_notice set NoticeTitle='$nottitle',NoticeMessage='$notmsg' where id='$id'";

  
  if(mysqli_query($conn,$update)){
    // echo  "updated Successfully";
    header('location:man_pub_not.php');
  }

  else{
    echo "something wrong";}
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>notice manage</title>
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
      <div class="col-sm-2 bg-dark text-white" ">
        <?php include_once('includes/aside.php');?>
      </div>
      <div class="col-sm-10" style="background-color:lightcyan">
        <div class="row mt-4">
          <div class="col-sm-2">
            <h5>Update Notice</h5>
          </div>
          <div class="col-sm-10"><a href="admindash.php" class="text-decoration-none ms-5">Dashboard</a> / Students
          </div>

        </div>

        <!-- ------------add from here--------------------------- -->
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Update Notice</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                        <label for="exampleInputName1">Notice Title</label>
                        <input type="text" name="nottitle" value="School will re-open" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Notice Message</label>
                        <textarea name="notmsg" value="" class="form-control" required="true">Consult your class teacher.</textarea>
                      </div>
                    <button type="submit" class="btn btn-primary mt-2 ms-2" name="submit">Update</button>
                     
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
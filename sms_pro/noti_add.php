<?php
session_start();
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'sms');

if(isset($_POST['submit'])){
    $nottitle=$_POST['nottitle'];
    $classid=$_POST['classid'];
    $notmsg=$_POST['notmsg'];


$ins="INSERT INTO notice_stu (Notice_title, class, notice_mess) VALUES ('$nottitle','$classid','$notmsg')";
if(mysqli_query($conn,$ins)){
    header('location:noti_mang.php');
  }


else{
  echo "something wrong";
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
      <div class="col-sm-2 bg-dark text-white" ">
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
                    <h4 class="card-title" style="text-align: center;">Add Notice</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Notice Title</label>
                        <input type="text" name="nottitle" value="" class="form-control" required="true">
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputEmail3">Notice For</label>
                        <select name="classid" class="form-control" required="true">
                          <option value="">Select Class</option>
                           
<option value="8 B">8 B</option>
   
<option value="10 B">10 B</option>
   
<option value="10 C">10 C</option>
   
<option value="11 A">11 A</option>
   
<option value="11 B">11 B</option>
   
<option value="11 C">11 C</option>
   
<option value="11 D">11 D</option>
   
<option value="12 A">12 A</option>
  
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Notice Message</label>
                        <textarea name="notmsg" value="" class="form-control" required="true"></textarea>
                      </div>
                   
                      <button type="submit" class="btn btn-success mt-2 btn-lg" name="submit">Add</button>
                     
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
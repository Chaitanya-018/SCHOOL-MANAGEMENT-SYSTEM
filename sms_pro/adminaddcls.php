<?php
session_start();
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'sms');
$nerr="";
if(isset($_REQUEST['submit'])){
  $class=$_REQUEST['cname'];
  $section=$_REQUEST['section'];
  //class name validation
  
  if (is_numeric($class)) {
    $ins = "insert into schclass (class_name,section) values('$class','$section')";
    if(mysqli_query($conn,$ins)){
      header('location:adminmngcls.php');
    }
    else{
      echo "something wrong";
  
  }
 
} else {
   $nerr= "The number is invalid.";
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
    <div class="row">
      <div class="col-sm-2 bg-dark text-white" style="height:620px;">
        <?php include_once('includes/aside.php');?>
      </div>
      <div class="col-sm-10" style="background-color:lightcyan">
      <div class="row mt-4"><div class="col-sm-2"><h5>Add class</h5></div>
      <div class="col-sm-10"><a href="admindash.php" class="text-decoration-none ms-5">Dashboard</a> / Students</div>

    </div>
      <div class="col-12 grid-margin stretch-card mt-5">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Add Class</h4>
                   
                    <form class="forms-sample" method="post" action="" >
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Class Name</label>
                        <input type="text" name="cname" value="" class="form-control" required="true">
                        <span><?php echo $nerr; ?></span><br>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Section</label>
                        <select name="section" class="form-control" required="true">
                          <option name="section" value="">Choose Section</option>
                          <option name="section" value="A">A</option>
                          <option name="section" value="B">B</option>
                          <option name="section" value="C">C</option>
                          <option name="section" value="D">D</option>
                          <option name="section" value="E">E</option>
                          <option name="section" value="F">F</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary mt-2" name="submit">Add</button>
                     
                    </form>
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
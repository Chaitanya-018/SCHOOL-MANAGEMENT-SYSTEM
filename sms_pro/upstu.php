<?php
session_start();
?>
<?php
$conn=mysqli_connect('localhost','root','','sms');
if($_GET['Sno']){
    $id = $_GET['Sno'];
    $view="select * from student_login where Sno='$id'";
    $v = mysqli_query($conn,$view);
    if(mysqli_num_rows($v)==1){
        $row=mysqli_fetch_array($v);
       
}else{
  echo "we have dublicate values";
}
}
if(isset($_REQUEST['submit'])){
    $stuname=$_POST['stuname'];
    $stuemail=$_POST['stuemail'];
    $stuclass=$_POST['stuclass'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $stuid=$_POST['stuid'];
    $img = $_FILES['image']['name'];
    // $tmpname= $_FILES['image']['tmp_name'];
    // $file_size= $_FILES['image']['size'];
    $imag = "images/" .$img;
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $connum=$_POST['connum'];
    $altconnum=$_POST['altconnum'];
    $address=$_POST['address'];
    $uname=$_POST['uname'];
    $password=$_POST['password'];
  $update = "UPDATE `student_login` SET `StudentName`='$stuname',`StudentEmail`='$stuemail',`StudentClass`='$stuclass',`Gender`='$gender',`DOB`='$dob',`StuID`='$stuid',`image`='$img',`FatherName`='$fname',`MotherName`='$mname',`ContactNumber`=' $connum',`AlternateNumber`='$altconnum',`Address`='$address',`UserName`='$uname',`Password`='$password' WHERE Sno='$id'";
  if(mysqli_query($conn,$update)){
    // echo  "updated Successfully";
    header('location:admngstu.php');
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
      <div class="col-sm-2 bg-dark text-white" style="height:1200px;">
        <?php include_once('includes/aside.php');?>
      </div>
      <div class="col-sm-10" style="background-color:lightcyan">
        <div class="row mt-4">
          <div class="col-sm-2">
            <h5>Manage class</h5>
          </div>
          <div class="col-sm-10"><a href="admindash.php" class="text-decoration-none ms-5">Dashboard</a> / Students
          </div>

        </div>

        <!-- ------------add from here--------------------------- -->
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Update Students</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                        <label for="exampleInputName1">Student Name</label>
                        <input type="text" name="stuname" value="<?php  echo $row['StudentName'] ?>" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Student Email</label>
                        <input type="text" name="stuemail" value="<?php  echo $row['StudentEmail'] ?>" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Student Class</label>
                        <select name="stuclass" class="form-control" required="true">
                        <option name="stuclass" value="<?php  echo $row['StudentClass'] ?>"><?php  echo $row['StudentClass'] ?></option>
                           
                        <option value="8B">8 B</option>
   
                        <option value="10B">10 B</option>
   
                        <option value="10C">10 C</option>
   
                        <option value="11A">11 A</option>
   
                        <option value="11B">11 B</option>
   
                        <option value="11C">11 C</option>
   
                        <option value="11D">11 D</option>
   
                        <option value="12A">12 A</option>
  
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Gender</label>
                        <select name="gender" value="<?php  echo $row['Gender'] ?>" class="form-control" required="true">
                          <option value="Male">Male</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Date of Birth</label>
                        <input type="date" name="dob" value="<?php  echo $row['DOB'] ?>"  class="form-control" required="true">
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">Student ID</label>
                        <input type="text" name="stuid" value="<?php  echo $row['StuID'] ?>" class="form-control" readonly="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Student Photo</label>
                        <input type="file" name="image" value="<?php  echo $row['image'] ?>" class="form-control"  accept="image/*" required="true">
                        <?php  echo $row['image'] ?>
                       </div>
                      <h3>Parents/Guardian's details</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">Father's Name</label>
                        <input type="text" name="fname" value="<?php  echo $row['FatherName'] ?>" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mother's Name</label>
                        <input type="text" name="mname" value="<?php  echo $row['MotherName'] ?>" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact Number</label>
                        <input type="text" name="connum" value="<?php  echo $row['ContactNumber'] ?>" class="form-control" required="true" maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Alternate Contact Number</label>
                        <input type="text" name="altconnum" value="<?php  echo $row['AlternateNumber'] ?>" class="form-control" required="true" maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <textarea name="address" class="form-control" required="true"> <?php  echo $row['Address'] ?></textarea>
                      </div>
<h3>Login details</h3>
<div class="form-group">
                        <label for="exampleInputName1">User Name</label>
                        <input type="text" name="uname" value="<?php  echo $row['UserName'] ?>" class="form-control" readonly="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="Password" name="password"  value="<?php  echo $row['Password'] ?>" class="form-control" readonly="true">
                      </div>                      
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                     
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
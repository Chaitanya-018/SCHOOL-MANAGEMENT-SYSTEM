<?php
session_start();
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'sms');
$stu_err1=$stu_err2=$con_err=$alt_err=$img_err1=$img_err2="";
if(isset($_POST['submit'])){
  $stuname=$_POST['stuname'];
 $stuemail=$_POST['stuemail'];
 $stuclass=$_POST['stuclass'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $stuid=$_POST['stuid'];
 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $connum=$_POST['connum'];
 $altconnum=$_POST['altconnum'];
 $address=$_POST['address'];
 $uname=$_POST['uname'];
 $password=$_POST['password'];
 
 $img = $_FILES['image']['name'];
$tmpname= $_FILES['image']['tmp_name'];
$file_size= $_FILES['image']['size'];
$imag = "images/" .$img;
move_uploaded_file($tmpname,$imag);
$file_exit= pathinfo($img, PATHINFO_EXTENSION);
$extensions= array("jpeg","jpg","png");

$ins="INSERT INTO `student_login`(`StudentName`, `StudentEmail`, `StudentClass`, `Gender`, `DOB`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AlternateNumber`, `Address`, `UserName`, `Password`, `image`)
 VALUES ('$stuname','$stuemail','$stuclass','$gender',' $dob','$stuid','$fname','$mname','$connum',' $altconnum','$address',' $uname','$password',' $img')";
if($stuname =='' && $stuname == null){
  $stu_err1="Student name must be fill";
}
elseif(strlen($stuname)<3){
  $stu_err2="Student name must be more than 3 char";
}
elseif(strlen($connum)==10){
  $con_err="mobile number must be 10 digits";
  }
elseif(strlen( $altconnum)==10){
  $alt_err="mobile number must be 10 digits";
  }  
elseif(!in_array($file_exit,$extensions)){
  $img_err1="file not support";
}
if($file_size > 2097152){
   $img_err2="File less than 2MB";
 }

elseif(mysqli_query($conn,$ins)){
  header('location:admngstu.php');

}

else{
  echo "fuckoff chaitu";
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
      <div class="col-sm-2 bg-dark text-white" style="height:1250px;">
        <?php include_once('includes/aside.php');?>
      </div>
      <div class="col-sm-10" style="background-color:lightcyan">
      <div class="row"><div class="col-sm-2"><h5>Add Students</h5></div>
      <div class="col-sm-10"><a href="admindash.php" class="text-decoration-none ms-5">Dashboard</a> / Students</div>

    </div>
      <div class="card mt-4">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Add Students</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Student Name</label>
                        <input type="text" name="stuname" value="" class="form-control" required="true"><span><?php echo $stu_err1; ?></span><span><?php echo $stu_err2; ?></span><br>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Student Email</label>
                        <input type="text" name="stuemail" value="" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Student Class</label>
                        <select name="stuclass" class="form-control" required="true">
                          <option value="">Select Class</option>
                           
<option value="10 A">10 A</option>
   
<option value="10 B">10 B</option>
   
<option value="10 C">10 C</option>
   
<option value="11 A">11 A</option>
   
<option value="11 B">11 B</option>
   
<option value="11 C">11 C</option>
   
<option value="11 D">11 D</option>
   
<option value="12 A">12 A</option>
   
<option value="12 B">12 B</option>
  
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Gender</label>
                        <select name="gender" value="" class="form-control" required="true">
                          <option value="">Choose Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Date of Birth</label>
                        <input type="date" name="dob" value="" class="form-control" required="true">
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">Student ID</label>
                        <input type="text" name="stuid" value="" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Student Photo</label>
                        <input type="file" name="image" value="" class="form-control"  accept="image/*" required="true">
                        <span><?php echo $img_err1; ?></span><span><?php echo $img_err2; ?></span><br>
                      </div>
                      <h3>Parents/Guardian's details</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">Father's Name</label>
                        <input type="text" name="fname" value="" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mother's Name</label>
                        <input type="text" name="mname" value="" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact Number</label>
                        <input type="text" name="connum" value="" class="form-control" required="true" maxlength="10" pattern="[0-9]+"><span><?php echo $con_err; ?></span><br>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Alternate Contact Number</label>
                        <input type="text" name="altconnum" value="" class="form-control" required="true" maxlength="10" pattern="[0-9]+"><span><?php echo $alt_err; ?></span><br>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <textarea name="address" class="form-control" required="true"></textarea>
                      </div>
<h3>Login details</h3>
<div class="form-group">
                        <label for="exampleInputName1">User Name</label>
                        <input type="text" name="uname" value="" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="Password" name="password" value="" class="form-control" required="true">
                      </div>
                      <button type="submit" class="btn btn-primary mt-2" name="submit">Add</button>
                     
                    </form>
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
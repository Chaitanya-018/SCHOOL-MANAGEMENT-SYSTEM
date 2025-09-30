<?php
session_start();
?>
<?php
$conn=mysqli_connect('localhost','root','','sms');
$sql="select * from  pages where PageType='aboutus'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
// echo $row['PageDescription'];
?>

<?php

if(isset($_REQUEST['submit'])){
    $title= $_REQUEST['pagetitle'];
    $desc=$_REQUEST['pagedes'];
    $ins ="update pages set PageTitle='$title', PageDescription='$desc' where PageType='aboutus'";
    if(mysqli_query($conn,$ins)){
   echo "updated successfully";
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
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include_once('includes/nav.php');?>
    </div>
    <div class="row">
      <div class="col-sm-2 bg-dark text-white" style="height:800px;">
        <?php include_once('includes/aside.php');?>
      </div>
      <div class="col-sm-10" style="background-color:lightcyan">
        <div class="row mt-4 mb-3">
          <div class="col-sm-4">
            <h5>Update About Us</h5>
          </div>
          <div class="col-sm-8"><a href="admindash.php" class="text-decoration-none ms-auto">Dashboard</a> / Students
          </div>

        </div>

        <!-- ------------add from here--------------------------- -->
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Update About Us</h4>
                   
                    <form class="forms-sample" method="post">
                            
                      <div class="form-group">
                        <label for="exampleInputName1">Page Title:</label>
                        <input type="text" name="pagetitle" value="<?php echo $row['PageTitle'];?>" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Page Description:</label>
                        <textarea type="text" name="pagedes" class="form-control" required='true'>
                        <?php echo $row['PageDescription'];?>

                        </textarea>
                      </div>
                       
                    <button type="submit" class="btn btn-primary ms-2 mt-1" name="submit">Update</button>
                     
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
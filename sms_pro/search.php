<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Student</title>
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
        <div class="row mt-4 mb-4">
          <div class="col-sm-2">
            <h5>Search Student</h5>
          </div>
          <div class="col-sm-10"><a href="admindash.php" class="text-decoration-none ms-5">Dashboard</a> / Search Student
          </div>

        </div>

        <!-- ------------add from here--------------------------- -->
        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form method="post">
                                <div class="form-group">
                                   <strong>Search Student:</strong>
                                   
                                    <input id="searchdata" type="text" name="stuid" required="true" class="form-control" placeholder="Search by Student ID"></div>
                               
                                <button type="submit" class="btn btn-info mt-2 btn-lg mt-4 mb-5 text-white" name="search" id="submit">Search</button>
                            </form>
                            <?php
              if(isset($_REQUEST['search'])){
                $id=$_REQUEST['stuid'];
                echo "<h5>Your Search Result is $id</h5>";
                $conn=mysqli_connect('localhost','root','','sms');
                $sql="select * from student_login where StuID='$id' && hide='0'";
                $data=mysqli_query($conn,$sql);
                $i=1;
                if(mysqli_num_rows($data)==1){
                    while($row=mysqli_fetch_array($data)){
                Echo "<table class='table table-responsive'>";
                echo"<tr>";
                echo"<th> Sno </th>";
                echo"<th> Student Id</th>";
                echo"<th> Student Class </th>";
                echo"<th> Student Name</th>";
                echo"<th> Student Email</th>";
                echo"<th> Admission date</th>";
                echo"<th >Action</th>";
                echo"</tr>";

                echo"<tr>";
                echo"<td>".$i."</td>";
                echo"<td>".$row['StuID']."</td>";
                echo"<td>".$row['StudentClass']."</td>";
                echo"<td>".$row['StudentName']."</td>";
                echo"<td>".$row['StudentEmail']."</td>";
                echo"<td>".$row['date_add']."</td>";
                echo "<td>";
                echo '<a href="upstu.php?Sno='.$row['Sno'].'"><i class="bi bi-pencil-square"></i></a>' .""."||";
                echo '<a href="delstu.php?Sno='.$row['Sno'].'"><i class="bi bi-trash3"></i></a>';
                echo "</td>";
                echo"</tr>";
                echo"</table>";
                $i++;

                    }
                }
                else{
                    echo "<h2> No Result Found </h2>";

                }
              }





?>
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
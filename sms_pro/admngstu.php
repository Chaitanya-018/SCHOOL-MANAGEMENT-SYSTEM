<?php
session_start();

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
            <h5>Manage Students</h5>
          </div>
          <div class="col-sm-10"><a href="admindash.php" class="text-decoration-none ms-5">Dashboard</a> / Students
          </div>

        </div>

        <!-- ------------add from here--------------------------- -->
        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Students</h4>
                      <a href="#" class="text-dark ms-auto mb-3 mb-sm-0"> View all Students</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Student ID</th>
                            <th class="font-weight-bold">Student Class</th>
                            <th class="font-weight-bold">Student Name</th>
                            <th class="font-weight-bold">Student Email</th>
                            <th class="font-weight-bold">Admissin Date</th>
                            <th class="font-weight-bold">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php  
                        $conn = mysqli_connect('localhost', 'root', '', 'sms');
                        $get = "select * from student_login where hide='0'";
                        $data = mysqli_query($conn,$get);
                        $i=1;
                        if(mysqli_num_rows($data)>0){
                          while($row=mysqli_fetch_array($data)){
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$row['StuID']."</td>";
                            echo "<td>".$row['StudentClass']."</td>";
                            echo "<td>".$row['StudentName']."</td>";
                            echo "<td>".$row['StudentEmail']."</td>";
                            echo "<td>".$row['date_add']."</td>";
                      
                            echo"<td>";
                            echo '<a href="upstu.php?Sno='.$row['Sno'].'"><i class="bi bi-pencil-square"></i></a>' .""."||";
                            echo '<a href="delstu.php?Sno='.$row['Sno'].'"><i class="bi bi-trash3"></i></a>';
                            echo "</td>";
                            $i++;
                           
                          }
                        }else{
                          echo "no records";
                        }
                    
                        ?>
                              
                        </tbody>
                      </table>
                    </div>
               
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
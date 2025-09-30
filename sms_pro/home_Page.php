<?php
    $conn=mysqli_connect('localhost','root','','sms');
    $data="select * from  pages where PageType='Contactus'";
    $qr=mysqli_query($conn,$data);
    $details=mysqli_fetch_array($qr);
     ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css\homenav.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
        @import url('https://fonts.googleapis.com/css?family=Courgette');
        @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,700');
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans'); 
        .backk{
    background-image: url('https://images7.alphacoders.com/945/945116.jpg');
    width:100%;
    height: 640px;
    background-repeat: no-repeat;
    background-size: cover;
}

    </style>
</head>

<body class="p-0 ms-0 me-0">
    <div class="container-fluid" style="overflow-x: hidden;--bs-gutter-x: 0rem;">
        <div class="row">

            <nav class="navbar navbar-expand-lg bg-tertiary m-0 p-0">
                <div class="container-fluid chaitu m-0 p-0">
                    <a class="navbar-brand p-4 text-white" href="#" style="font-size: 45px;margin-left: 100px; font-family: 'Tangerine', serif;
  font-size: 48px;
  text-shadow: 4px 4px 4px #aaa;">Jubilee
                        School</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav navdis">
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#aboutus">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#contactus">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="adminlogin.php">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="student\studentlogin.php">Student</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="backk">
                <div class="imm">
                    <h1 class="text-white">JB Educational Society</h1>
                    <p class="text-white">Registered Students can Login Here</p>
                    <button class="btn btn-primary"><a href="student\studentlogin.php" class="text-white"
                            style="text-decoration: none;">Student Login <i
                                class="bi bi-arrow-through-heart"></i></a></button>
                </div>
            </div>
        </div>
        
            <div class="container">
                <div class="row mt-3">
                    <h1 class="text-center mt-5 text-secondary " id="aboutus">About Us</h1>
                    <h3 class="text-secondary mt-4 mb-5">
                        <?php

    $sql="select * from  pages where PageType='aboutus'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res);
    echo $row['PageDescription'];
     ?>
                    </h3>
                </div>
            </div>
        

        <div class="row" style="background-image: url('https://images.alphacoders.com/700/700442.jpg');
        width:100%;
        background-size:cover;
        height: 455px;
        margin-left:0px;">
        <h2 class="text-white text-center p-2"> Public Notice</h2>
        <p class="text-white text-center">
<marquee width="60%" direction="up" height="100px">
<?php
 $query="select * from tbpublice_notice";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
      echo "<h5>".$row['NoticeTitle']."(".$row['NoticeMessage'].")"."</h5>".$row['CreationDate']."<hr>";
    }
     ?>
</marquee>
</p>
        </div>
        <!-- ------------------------- -->
        <div class="row">
            <footer>
                <div class="row bg-dark text-white m-0 p-0 py-5" id="contactus">
                    <div Class="col-sm-6">
                        <ul class="list-unstyled d-flex justify-content-around">
                            <li><a href="home_Page.php" class="text-decoration-none text-white">Home</a></li>
                            <li><a href="#aboutus" class="text-decoration-none text-white">About</a></li>
                            <li><a href="#contactus" class="text-decoration-none text-white">Contact</a></li>
                            <li><a href="adminlogin.php" class="text-decoration-none text-white">Admin</a></li>
                            <li><a href="student\studentlogin.php" class="text-decoration-none text-white">Student</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="row">
                            <div class="col-sm-4">
                                <h3>ADDRESS</h3>
                                <span><i class="bi bi-geo-alt-fill"></i></span>
                                <p>
                                    <?php echo  $details['PageDescription'];?>
                                </p>
                                <span><i class="bi bi-telephone-fill"></i></span>
                                <p>
                                    <?php  echo $details['MobileNumber'];?>
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <h3>Jubilee School</h3>

                                <p style="font-size: 13px;" class="text-secondery">You cannot dream of becoming
                                    something you do not know about.You have to learn to
                                    dream
                                    big.
                                    Education exposes you to what the world has to offer,to the possibilities open to
                                    you.
                                </p>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>





                    </div>




                </div>
                
                <div class="row bg-secondary m-0 p-0 py-3">
                    <p class="col-sm-6 text-center  text-white  ">&copy 2025 Student Management System</p>
                    <ul class="col-sm-6 list-unstyled d-flex justify-content-evenly soc">
                        <li><a href="https://www.facebook.com/login/" class=" text-white"><i
                                    class="bi bi-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/home" class=" text-white"><i
                                    class="bi bi-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/login" class=" text-white"><i
                                    class="bi bi-twitter"></i></a></li>
                        <li><a href="https://www.google.com/" class=" text-white"><i class="bi bi-google"></i></a></li>
                        <li><a href="https://in.pinterest.com/login/" class=" text-white"><i
                                    class="bi bi-pinterest"></i></a></li>
                        <li><a href="https://www.whatsapp.com/" class=" text-white"><i class="bi bi-whatsapp"></i></a>
                        </li>
                    </ul>

                </div>
                

            </footer>
        </div>


    </div>









</body>

</html>
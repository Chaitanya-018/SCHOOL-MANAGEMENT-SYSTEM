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
                    <h4 class="card-title" style="text-align: center;">Update Contact Us</h4>
                   
                    <form class="forms-sample" method="post">
                          
                      <div class="form-group">
                        <label for="exampleInputName1">Page Title:</label>
                        <input type="text" name="pagetitle" value="Contact Us" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Page Description:</label>
                        <div unselectable="on" style="width: 1171px;"><div class=" nicEdit-panelContain" unselectable="on" style="overflow: hidden; width: 100%; border: 1px solid rgb(204, 204, 204); background-color: rgb(239, 239, 239);"><div class=" nicEdit-panel" unselectable="on" style="margin: 0px 2px 2px; zoom: 1; overflow: hidden;"><div style="float: left; margin-top: 2px; display: none;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -432px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -54px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -126px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -342px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -162px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -72px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -234px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -144px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -180px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -324px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin: 2px 1px 0px;"><div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;"><div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);"><div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -450px 0px;"></div><div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Size...</div></div></div></div><div unselectable="on" style="float: left; margin: 2px 1px 0px;"><div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;"><div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);"><div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -450px 0px;"></div><div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Family...</div></div></div></div><div unselectable="on" style="float: left; margin: 2px 1px 0px;"><div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;"><div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);"><div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -450px 0px;"></div><div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Format...</div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -108px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -198px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -360px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -468px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -378px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -396px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -36px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -18px 0px;"></div></div></div></div></div></div></div><div style="width: 1171px; border-width: 0px 1px 1px; border-top-style: initial; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: rgb(204, 204, 204); border-bottom-color: rgb(204, 204, 204); border-left-color: rgb(204, 204, 204); border-image: initial; overflow: hidden auto;"><div class=" nicEdit-main" contenteditable="true" style="width: 1163px; margin: 4px; min-height: 57px; overflow: hidden;">890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)</div></div><textarea type="text" name="pagedes" class="form-control" required="true" style="display: none;">890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email:</label>
                        <input type="text" name="email" id="email" required="true" value="infodata@gmail.com" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mobile Number:</label>
                        <input type="text" name="mobnum" id="mobnum" required="true" value="7896541236" class="form-control" maxlength="10" pattern="[0-9]+">
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
<div class="col-sm-2  bg-dark text-white ">
  <h4 class="mt-3 ms-2">SMS</h4>
</div>
<div class="col-sm-8 mt-4 mb-4  ">
  <h6>
    <?php echo $_SESSION['user'];?>, Welcome dashboard!
  </h6>
</div>
<div class="col-sm-2 mt-3 mb-3">
  <div class="dropdown">
    <button class="btn btn-white dropdown-toggle ms-5" type="button" data-bs-toggle="dropdown" >
    <img class="img rounded-circle ml-2" src="images\face8 (1).jpg " width="30" height="30">
      <?php echo $_SESSION['user'];?>
    </button>
    <ul class="dropdown-menu">
      
      
        <div class="dropdown-header text-center">
          <img class="img-md rounded-circle" src="images\face8.jpg" >
          <p class="mb-1 mt-3"><?php echo $_SESSION['user'];?></p>
          <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['email'];?></p>
        </div> <a class="dropdown-item" href="admin_profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My
          Profile</a>
        <a class="dropdown-item" href="admin_settings.php"><i class="dropdown-item-icon icon-energy text-primary"></i>
          Setting</a>
        <a class="dropdown-item" href="admindash.php?log='1'"><i class="dropdown-item-icon icon-power text-primary"></i>Sign
          Out</a>
      
    </ul>
  </div>

</div>
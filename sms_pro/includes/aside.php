
           
                <div class="row mt-1 ">
                  <div class="col-sm-1"></div>
                <div class="col-sm-2"><img class="img rounded-circle me-3 mt-2" src="images\face8 (1).jpg " width="35" height="35"></div>
                  <div class="col-sm-8">
                    <?php echo $_SESSION['user'];?>
                    <span style="font-size:12px" class="text-secondary"><?php echo $_SESSION['email'];?></span>
                </div>
                    
                  </div>
                  <div class="row mt-1 ">
                    <h6 class="text-success mt-3 ms-3"> DASHBOARD</h6>
                    <hr>
                  </div>
                  
                  <div class="row"><a href="admindash.php " class="text-decoration-none text-white  ms-3">Dashboard<i class="bi bi-laptop "style="margin-left:36%"></i></a></div><hr>
                    
                  
                  <div class="row">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item bg-dark text-white">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed bg-dark text-white pt-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" >
                            Class <i class="bi bi-database-fill " style="margin-left:63%"></i>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <p><a href="adminaddcls.php" class="text-decoration-none text-white">Add Class</a></p>
                            <p><a href="adminmngcls.php" class="text-decoration-none text-white">Manage Class</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item bg-dark text-white">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Students <i class="bi bi-people" style="margin-left:49%"></i>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <p><a href="adminaddstu.php" class="text-decoration-none text-white">Add Students</a></p>
                            <p><a href="admngstu.php" class="text-decoration-none text-white">Manage Students</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item bg-dark text-white">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Notice <i class="bi bi-file-earmark" style="margin-left:56%"></i></i>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body ">
                            <p><a href="noti_add.php" class="text-decoration-none text-white">Add Notice</a></p>
                            <p><a href="noti_mang.php" class="text-decoration-none text-white">Manage Notice</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item bg-dark text-white">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapsefour" >
                            Public Notice <i class="bi bi-file-earmark" style="margin-left:31%"></i></i>
                          </button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body ">
                            <p><a href="ad_pub_noy.php" class="text-decoration-none text-white">Add Public Notice</a></p>
                            <p><a href="man_pub_not.php" class="text-decoration-none text-white">Manage Public Notice</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item bg-dark text-white">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapsefive" >
                            Pages <i class="bi bi-file-earmark" style="margin-left:59%"></i></i>
                          </button>
                        </h2>
                        <div id="flush-collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <p><a href="pagee_ab_us.php" class="text-decoration-none text-white">About Us</a></p>
                            <p><a href="page_cony.php" class="text-decoration-none text-white">Contact Us</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="row bg-dark"><a href="reports.php" class="text-decoration-none text-white mt-3 ms-3 ">Reports <i class="bi bi-journal" style="margin-left:43%"></i></a></div><hr>
                      <div class="row"><a href="search.php" class="text-decoration-none text-white  ms-3 mb-3">Search <i class="bi bi-search" style="margin-left:46%"></i></a></div>
                      
                      
                      
                      
                     </div>
                  </div>
            
        
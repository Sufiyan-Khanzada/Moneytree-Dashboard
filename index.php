<?php 
session_start();
$name=$_SESSION['name'];
if($name!=""){
?>
<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>
  <head>
    
  <?php
include 'header.php';
include 'connection.php';

?>
  </head>

  <body>
    <div id="root">
      

          <!-- Mobile Buttons Start -->
          <div class="mobile-buttons-container">
            <!-- Menu Button Start -->
            <a href="#" id="mobileMenuButton" class="menu-button">
              <i data-cs-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
          </div>
          <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
      </div>

      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-12 col-md-7">
                <a class="muted-link pb-2 d-inline-block hidden" href="#">
                  <span class="align-middle lh-1 text-small">&nbsp;</span>
                </a>
                <h1 class="mb-0 pb-0 display-4" id="title">Welcome, Zayn!</h1>
              </div>
              <!-- Title End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Stats Start -->
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                        <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-expanded="false" aria-haspopup="true">
                            <span class="small-title"></span>
                        </a>
                        <div class="dropdown-menu font-standard">
                            <div class="nav flex-column" role="tablist">
                                <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                                <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                   role="tab">Weekly</a>
                                <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                   role="tab">Monthly</a>
                                <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                   role="tab">Yearly</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="small-title">Stats</h2>
                </div>
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <?php
                    $sql = "SELECT SUM(amount) as total FROM wallet WHERE tranaction_type='add' OR tranaction_type='subtract'";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    }
                    ?>
                    
                     <?php  
                     
                while($row = mysqli_fetch_assoc($result)){
                ?>

                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                        Total Deposits
                                    </div>
                                    <div class="text-primary cta-4"><?php echo  $row['total'] ?></div>
                                </div>
                            </div>
                        
                          </div>
 <?php 
                    }
                  
                      ?>
                          
                       <!-- Post Profit  -->
                       
                          <div class="col-6 col-md-4 col-lg-4">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="basket" class="text-primary"></i>
                                    </div>
                                  
                                  <a href="plan_posting.php"> <div class="mb-1 d-flex align-items-center text-alternate text-mid lh-1-25">
                                        Post Profit
                                    </div></a>
                                    <!-- <div class="text-primary cta-4">16</div> -->
                                </div>  
                            </div>
                        </div>

                        <!-- Post Profit end -->
                        

                        <!-- NEW Customer -->
                        <div class="col-6 col-md-4 col-lg-4">
                                  
                 <?php
                    $sql = "SELECT COUNT(id) as Total FROM  users ";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    }
                    ?>
                    
                     <?php  
                     
                while($row = mysqli_fetch_assoc($result)){
                ?>

                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="server" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                        Total Customers
                                    </div>
                                    <div class="text-primary cta-4"><?php echo $row['Total'];?></div>
                                </div>
                            
                              </div>
                            
                        </div>
     <!-- END Customer -->

                        <!-- <div class="col-6 col-md-4 col-lg-2">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="user" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                        Customer Deposits
                                    </div>
                                    <div class="text-primary cta-4">2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="arrow-top-left" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                        Requests(Withdrawal & Deposit)
                                    </div>
                                    <div class="text-primary cta-4">5</div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-6 col-md-4 col-lg-2">
                        <!--    <div class="card h-100 hover-scale-up cursor-pointer">-->
                        <!--        <div class="card-body d-flex flex-column align-items-center">-->
                        <!--            <div-->
                        <!--                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">-->
                        <!--                <i data-cs-icon="message" class="text-primary"></i>-->
                        <!--            </div>-->
                        <!--            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">-->
                        <!--                COMMENTS-->
                        <!--            </div>-->
                        <!--            <div class="text-primary cta-4">5</div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
             
                  </div>
            </div>
        </div>
        
        <!-- Stats End -->

          <div class="row">
            <!-- Recent Orders Start -->
            <?php
                    $sql = "SELECT * FROM wallet  WHERE tranaction_type='withdraw' OR tranaction_type='credit' ORDER BY id ASC LIMIT 10";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {

                    ?>
            <div class="col-xl-12 mb-5">
                <h2 class="small-title">Recent Orders</h2>
                <div class="card mb-2 sh-15 sh-md-6">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <!-- <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                        <a href="/Orders/Detail" class="body-link stretched-link">Id</a>
                                    </div> -->
                                    <div
                                class="col-12 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                ID	
                            </div>
                                    <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                User_ID	
                            </div>
                               
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Name	
                            </div>
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Tranaction_type	
                            </div>
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Amount	
                            </div>
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Image	
                            </div>
                            <div
                                class="col-6 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Status	
                            </div>
                                
                                </div>
                            </div>
                        </div>
                        <?php
                while($row = mysqli_fetch_assoc($result)){
                  $uid = $row['user_id'];
                  $sql2 = "SELECT name from users where id = $uid";
                      $result2 = mysqli_query($conn, $sql2);
                      if(mysqli_num_rows($result) > 0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                    ?>
                <div class="mb-n2 scroll-out">
                    <div class="scroll-by-count">
                        
                        <div class="card mb-2 sh-15 sh-md-6">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <!-- <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                        <a href="/Orders/Detail" class="body-link stretched-link"><?php echo $row['id'];?></a>
                                    </div> -->
                                    <div
                                    class="col-2 col-md-1 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['id'];?></div>
                                </div>
                                    <div
                                    class="col-2 col-md-2 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <div class="text-muted text-small d-lg-none"></div>
                                  
            <a href='All_userDetails.php?id=<?php echo $row['id']; ?>' target="_blank" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['id'];?></a>    
          
                                    <!-- <div class="text-alternate"><?php echo $row['user_id'];?></div> -->
                                </div>

                                
                                <div
                                class="col-2 col-md-2 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row2['name'];?></div>
                                </div>
                                <div
                                class="col-2 col-md-2 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['tranaction_type'];?></div>
                                </div>
                                <div
                                class="col-2 col-md-2 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['amount'];?></div>
                                </div>
                                <div
                                class="col-2 col-md-2 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <?php 
                                    
                                    $images ="wallet_Pics/".$row['image'];
              
                                    ?>
                                    <div class="text-alternate"><?php echo '<a href='.$images.'><img src='.$images. ' width=50 height=50></a>'?></div>
                                </div>
                                <div       
                                class="col-2 col-md-1 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['status'];?></div>
                                </div>
                                    
                                    <!-- <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                  <span style="margin-left:20px;">
                    <span class="" style="margin-left:20px;"><?php echo $row['id'];?></span>
                    
                    
                  </span>
                                    </div> -->
                                    <!-- <div
                                        class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                        Today - 13:20
                                    </div> -->
                                </div>
                            </div>
                        </div>

  
                        <?php 
                    }
                  }
                      
                }}} 
                      ?>

                
                               </div>
                 
            <!-- Recent Orders End -->

            <!-- Performance Start -->
            <!-- <div class="col-xl-6 mb-5">
                <div class="d-flex">
                    <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                        <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-expanded="false" aria-haspopup="true">
                            <span class="small-title"></span>
                        </a>
                        <div class="dropdown-menu font-standard">
                            <div class="nav flex-column" role="tablist">
                                <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                                <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                   role="tab">Weekly</a>
                                <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                   role="tab">Monthly</a>
                                <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                   role="tab">Yearly</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="small-title">Performance</h2>
                </div>
                <div class="card sh-45 h-xl-100-card">
                    <div class="card-body h-100">
                        <div class="h-100">
                            <canvas id="horizontalTooltipChart"></canvas>
                            <div
                                class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition"
                            >
                                <div
                                    class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3"
                                >
                                    <span class="icon"></span>
                                </div>
                                <div>
                                    <span class="text d-flex align-middle text-alternate align-items-center text-small">Bread</span>
                                    <span
                                        class="value d-flex align-middle text-body align-items-center cta-4">300</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Performance End -->
        </div>
<br>
          
      <!-- Layout Footer Start -->
      <footer>
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6">
                <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
              </div>
              <div class="col-sm-6 d-none d-sm-block">
                <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Review</a></li>
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Purchase</a></li>
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Docs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Layout Footer End -->
    </div>

    <!-- Theme Settings Modal Start -->
    <div
      class="modal fade modal-right scroll-out-negative"
      id="settings"
      data-bs-backdrop="true"
      tabindex="-1"
      role="dialog"
      aria-labelledby="settings"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="scroll-track-visible">
              <div class="mb-5" id="color">
                <label class="mb-3 d-inline-block form-label">Color</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT BLUE</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK BLUE</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT RED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK RED</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT GREEN</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK GREEN</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PURPLE</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PINK</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PINK</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="navcolor">
                <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DEFAULT</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-secondary figure-light top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-muted figure-dark top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="behaviour">
                <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left large"></div>
                      <div class="figure figure-secondary right small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">PINNED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left"></div>
                      <div class="figure figure-secondary right"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">UNPINNED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="layout">
                <label class="mb-3 d-inline-block form-label">Layout</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLUID</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">BOXED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="radius">
                <label class="mb-3 d-inline-block form-label">Radius</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
                    <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">ROUNDED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
                    <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">STANDARD</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
                    <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLAT</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn settings-button btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
      <i data-cs-icon="paint-roller" class="position-relative"></i>
    </button>
    <!-- Theme Settings Modal End -->

    <!-- Search Modal Start -->
    <div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0 p-0">
            <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ps-5 pe-5 pb-0 border-0">
            <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off" />
          </div>
          <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-cs-icon="arrow-bottom" data-cs-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Navigate</span>
            </span>
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-cs-icon="arrow-bottom-left" data-cs-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Select</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Modal End -->

    <!-- Vendor Scripts Start -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/OverlayScrollbars.min.js"></script>
    <script src="js/vendor/autoComplete.min.js"></script>
    <script src="js/vendor/clamp.min.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="font/CS-Line/csicons.min.js"></script>
    <script src="js/base/helpers.js"></script>
    <script src="js/base/globals.js"></script>
    <script src="js/base/nav.js"></script>
    <script src="js/base/search.js"></script>
    <script src="js/base/settings.js"></script>
    <script src="js/base/init.js"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->
    <script src="js/cs/charts.extend.js"></script>
    <script src="js/pages/dashboard.js"></script>
    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Page Specific Scripts End -->
  </body>
</html>
<?php
}
else{
echo "
<script type='text/javascript'>
  
window.location.replace('Auth/index.php');


</script>";
session_unset();
}
?>
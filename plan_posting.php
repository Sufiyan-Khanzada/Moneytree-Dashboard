<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>
  <head>
  <?php
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" src="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
<?php include 'connection.php'; ?>
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
            <div class="row g-0">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="index.php" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-cs-icon="chevron-left" data-cs-size="13"></i>
                            <span class="text-small align-middle">Home</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">Plan-Post Profits</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="w-100 d-md-none"></div>
                <div
                    class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                    <button
                        type="button"
                        class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#discountAddModal"
                    >
                        <i data-cs-icon="plus"></i>
                        <span>Add Profits</span>
                    </button>
                 
                    
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" name="class" onchange="ajax_change(this.value)"/>
                    <span class="search-magnifier-icon">
                  <i data-cs-icon="search"></i>
                </span>
                    <span class="search-delete-icon d-none">
                  <i data-cs-icon="close"></i>
                </span>
                </div>
            </div>

            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                <div class="d-inline-block">
                   
                  

                  
                </div>
            </div>
        </div>
        <!-- Controls End -->

        <!-- Discount List Start -->
        <div class="row">
        <?php
                    $sql = "SELECT * FROM  plan_posting ";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    ?>
            <div class="col-12 mb-5">
                <div class="card mb-2 bg-transparent no-shadow d-none d-lg-block">
                    <div class="card-body pt-0 pb-0 sh-3">
                        <div class="row g-0 h-100 align-content-center" id="example">
                            <div class="col-12 col-lg-1 d-flex align-items-center mb-2 mb-lg-0 text-muted text-small">
                                ID
                            </div>
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Plan ID	
                            </div>

                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Plan Title	
                            </div>
                            <!-- <div
                                class="col-12 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Enter Pin	
                            </div> -->
                            
                            <div
                                class="col-6 col-lg-3 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Date
                            </div>
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small text-center">
                                Profit Percent
                            </div>
                        </div>
                    </div>
                </div>
                <div id="checkboxTable">
                <?php
                while($row = mysqli_fetch_assoc($result)){
                  $uid = $row['id'];
                  $sql2 = "SELECT id from plan_posting where id = $uid";
              
                            
                      $result2 = mysqli_query($conn, $sql2);
                      if(mysqli_num_rows($result) > 0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                    
                      
                        $sql2 = "SELECT plan_mode from plans";
                            $result2 = mysqli_query($conn, $sql2);
                            if(mysqli_num_rows($result) > 0){
                          while($row2 = mysqli_fetch_assoc($result2)){
                          ?>

                    
                    <div class="card mb-2">
                        <div class="card-body py-4 py-lg-0 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div
                                    class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['id'];?></a>
                                </div>
                                <div
                                    class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['plan_id'];?></a>
                                </div>
                                <div
                                    class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row2['plan_mode'];?></a>
                                </div>
                                
                                <div
                                    class="col-6 col-lg-3 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-3">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['date'];?></div>
                                </div>
                                <div
                                    class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['profit_percent']."%";?></div>
                                </div>
                                <!-- <div
                                    class="col-2 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <a href='posting-edit.php?id=<?php echo $row['id']."&pid=".$row['id'];?>' class="text-truncate h-100 d-flex align-items-center"
                                     class="text-alternate">Edit</a>
                                </div> -->
                                <!-- <div
                                    class="col-4 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-5">
                                    <a href='deleteplan_posting.php?id=<?php echo $row['id']; ?>' class="text-truncate h-100 d-flex align-items-center"
                                     class="text-alternate">DELETE</a>
                                </div> -->
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <?php 
                    }
                  }
                      }
                      } 
                      ?>


<?php 
                    }
                  }
                      
                      
                      ?>
</div>

        
        <!-- Discount List End -->

      
        <div class="modal modal-right fade" id="discountAddModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Profit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                    </div>
                    <div class="modal-body">
                        <form class="post-form" action="addplan_posting.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3 w-100">
                                <!-- <label class="form-label">User</label>
                                <select  name="plan_type" class="select-single-no-search">
                                  <?php
                                    $sql = "SELECT * FROM plan_posting ";
                                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
                                  <?php } ?>
                                </select> -->
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Plan Id</label>
                                <input type="text"name="plan_id"class="form-control mask-text"/>
                            </div>
                            <label class="form-label">Plan Title</label>
                                <br>
                               <div class="form-label" data-childselector="span">
                               <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="plan_title">
  <option selected="">Select Plans</option>
  <option value="3 Months">3 Months</option>
  <option value="6 Months">6 Months</option>
  <option value="1 Year">  1 Year</option>
  <option value="3 Year Plus">3 Year Plus</option>
  <option value="Regular Savings">Regular Savings</option>
  <option value="BC_6Months">BC_6Months</option>
  <option value="BC_10Months">BC_10Months</option>
</select>
                    </div>
                    <br>
                    

                            <!-- <div class="mb-3">
                                <label class="form-label">Plan Title</label>
                                <input type="text"name="plan_title"class="form-control mask-text"/>
                            </div> -->
                            <div class="mb-3">
                                <label class="form-label">Enter Pin</label>
                                <input type="text"name="enter_pin "class="form-control mask-text"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="datetime-local" name="date"class="form-control mask-text"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Profit Percentage</label>
                                <input type="text"name="profit_percent"class="form-control mask-text"/>
                            </div>
                            <button type="submit" value="Save" class="btn btn-icon btn-icon-end btn-primary" >
                            <span>Add</span>
                            <i data-cs-icon="send"></i>
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer border-0">
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Discount Add Modal End -->
    </div>
      </main>


  



             <!-- Theme Start -->



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
      
    <script>
       $(document).ready(function () {
    $('#example').DataTable();
});
        </script>

    <!-- Vendor Scripts Start -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/OverlayScrollbars.min.js"></script>
    <script src="js/vendor/autoComplete.min.js"></script>
    <script src="js/vendor/clamp.min.js"></script>
    <script src="js/vendor/imask.js"></script>
    <script src="js/vendor/quill.min.js"></script>
    <script src="js/vendor/quill.active.js"></script>
    <script src="js/vendor/select2.full.min.js"></script>
    <script src="js/vendor/tagify.min.js"></script>
    <script src="js/vendor/dropzone.min.js"></script>
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
    <script src="js/cs/dropzone.templates.js"></script>
    <script src="js/pages/products.detail.js"></script>
    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Page Specific Scripts End -->
  </body>
  
</html>

<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>
  <head>
  <script type="text/javascript">
  function CheckUsers(val){
 var element=document.getElementById('user');
 if(val=='Single User')
 
   element.style.display='block';
 else  
   element.style.display='none';
}



</script> 
<style>

.col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%;
    float: right;
    margin-left: 264px;
}
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">   
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >  
  <?php
include 'header.php';
?>
<?php include 'connection.php'; ?>
  </head>
<style type="text/css">
    .autoShowHide {
  white-space: nowrap; 
  width: 200px; 
  overflow: hidden;
  text-overflow: ellipsis;
}

.autoShowHide:hover {
  white-space: normal; 
  overflow: visible;
  width: 100%; 
}


</style>
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
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-cs-icon="chevron-left" data-cs-size="13"></i>
                            <span class="text-small align-middle">Home</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">Notification</h1>
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
                        <span>Add Notification</span>
                    </button>
                    <div class="dropdown d-inline-block d-xl-none">
                        <!-- <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-only ms-1"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i data-cs-icon="sort"></i>
                        </button> -->
                        <!-- <div class="dropdown-menu dropdown-menu-end custom-sort">
                            <a class="dropdown-item sort" data-sort="code" href="#">Code</a>
                            <a class="dropdown-item sort" data-sort="type" href="#">Type</a>
                            <a class="dropdown-item sort" data-sort="date" href="#">Date</a>
                            <a class="dropdown-item sort" data-sort="usage" href="#">Usage</a>
                            <a class="dropdown-item sort" data-sort="status" href="#">Status</a>
                        </div> -->
                    <!-- </div>
                    <div class="btn-group ms-1 check-all-container">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                             data-target="#checkboxTable">
                    <span class="form-check float-end">
                      <input type="checkbox" class="form-check-input" id="checkAll"/>
                    </span>
                        </div>
                        <button
                            type="button"
                            class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-offset="0,3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        ></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" id="deleteChecked" type="button">Delete</button>
                        </div> -->
                    </div>
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <!-- <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search"/>
                    <span class="search-magnifier-icon">
                  <i data-cs-icon="search"></i>
                </span>
                    <span class="search-delete-icon d-none">
                  <i data-cs-icon="close"></i>
                </span>
                </div>
            </div> -->
            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                <div class="d-inline-block">
                    <!-- Print Button Start -->
                    <!-- <button
                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-delay="0"
                        title="Print"
                        type="button"
                    >
                        <i data-cs-icon="print"></i>
                    </button> -->
                    <!-- Print Button End -->

                    <!-- Export Dropdown Start -->
                    <div class="d-inline-block">
                        <!-- <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                    <span
                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                        data-bs-delay="0"
                        data-bs-placement="top"
                        data-bs-toggle="tooltip"
                        title="Export"
                    >
                      <i data-cs-icon="download"></i>
                    </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <button class="dropdown-item export-copy" type="button">Copy</button>
                            <button class="dropdown-item export-excel" type="button">Excel</button>
                            <button class="dropdown-item export-cvs" type="button">Cvs</button>
                        </div> -->
                    </div>
                    <!-- Export Dropdown End -->

                    <!-- Length Start -->
                    <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                        <!-- <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-bs-offset="0,3">
                    <span
                        class="btn btn-foreground-alternate dropdown-toggle"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-delay="0"
                        title="Item Count"
                    >
                      10 Items
                    </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <a class="dropdown-item" href="#">5 Items</a>
                            <a class="dropdown-item active" href="#">10 Items</a>
                            <a class="dropdown-item" href="#">20 Items</a>
                        </div>
                    </div> -->
                    <!-- Length End -->
                </div>
            </div>
        </div>
        <!-- Controls End -->

        <!-- Discount List Start -->
        <div class="row">
        <?php
                    $sql = "SELECT * FROM  notifications";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                      ?>
                       <table  class="table table-striped table-LIGHT tabel-bordered">  
                       <thead class="thead-dark">
          <tr>  
            <th scope="col"> Id </th>  
            <th scope="col"> User </th>  
            <th scope="col"> Title </th>  
            <th scope="col"> Message </th>  
            <th scope="col"> Date</th> 
            <th scope="col"> Action</th> 
             
          </tr>  
        </thead>
        <tbody> 
          
          <?php
                      while($row = mysqli_fetch_assoc($result)){
                        $uid = $row['userid'];
                        $sql2 = "SELECT email from users where id = $uid";
                            $result2 = mysqli_query($conn, $sql2);
                            if(mysqli_num_rows($result) > 0){
                          while($row2 = mysqli_fetch_assoc($result2)){
                          
                    ?>
                    
              
         
         
          <tr>  
          <td > <?php echo $row['id'];?></td>  
            <td> <?php echo $row2['email'];?> </td> 
            <td> <?php echo $row['title'];?></td>  
            <td> <?php echo $row['message'];?> </td>  
            <td> <?php echo $row['date'];?> </td>  
           <td><a href='notification-edit.php?id=<?php echo $row['id']; ?>' class="text-truncate h-100 d-flex align-items-center"
                                     class="text-alternate">Edit</a></td>
            
          </tr>  
       
       
          
    
                    
            
                      <?php 
                    }
                  }}}
                      ?>
                        </tbody>  
                       </tfoot>  
      </table>
        </div>


        <!-- Discount List End -->

        <!-- Discount Detail Modal Start -->
        <div class="modal modal-right fade" id="discountDetailModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Discount Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Code</label>
                                <input type="text" class="form-control" value="SUMMERSALE"/>
                            </div>
                            <div class="mb-3 w-100">
                                <label class="form-label">Type</label>
                                <select class="select-single-no-search">
                                    <option label="&nbsp;"></option>
                                    <option value="Fixed Amount">Fixed Amount</option>
                                    <option value="Free Shipping">Free Shipping</option>
                                    <option value="Percentage" selected>Percentage</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Start</label>
                                <input type="text" class="form-control date-picker-close" value="06/01/2020"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">End</label>
                                <input type="text" class="form-control date-picker-close" value="07/01/2020"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Limit</label>
                                <input type="text" class="form-control" value="5000"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Usage</label>
                                <input type="text" class="form-control" value="2723" readonly/>
                            </div>
                            <div class="mb-3 w-100">
                                <label class="form-label">Status</label>
                                <select class="select-single-no-search">
                                    <option label="&nbsp;"></option>
                                    <option value="Active" selected>Active</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Expired">Expired</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer border-0">
                        <a
                            href="#"
                            class="btn btn-icon btn-icon-only btn-outline-primary"
                            data-delay='{"show":"500", "hide":"0"}'
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Delete"
                            data-bs-dismiss="modal"
                        >
                            <i data-cs-icon="bin"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-icon-end btn-primary" data-bs-dismiss="modal">
                            <span>Save</span>
                            <i data-cs-icon="save"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discount Detail Modal End -->

        <div class="modal modal-right fade" id="discountAddModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Notification</h5>
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="post-form" action="addnotification.php" method="post" enctype="multipart/form-data">
                            <!-- <div class="mb-3 w-100">
                                <label class="form-label">User</label>
                                <select  name="user_type" class="select-single-no-search">
                                  <?php
                                    $sql = "SELECT * FROM users";
                                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
                                  <?php } ?>
                                </select>
                            </div> -->
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control mask-text"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Messages</label>
                                <input type="text"  name="message"  class="form-control mask-text"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="datetime-local"  name="date"  class="form-control mask-text"/>
                            </div>
                            <label class="form-label">Send To</label>
                                <br>
                               <div class="form-label" data-childselector="span">

<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="user" onchange='CheckUsers(this.value);'>
<!-- <select name="user" onchange='CheckColors(this.value);'>  -->
   
<option>Select Users</option>  
    <option value="Single User">Single User</option>
    <option value="Send To All">Send To All</option>

  </select>
  <br>
  <div class="mb-3">
    <!-- <label class="form-label">User Id</label> -->
    <input type="text"  name="user"  id="user" class="form-control mask-text" style='display:none;' placeholder="Enter User_ID"/>
                            </div>





                    </div>
                  
                    <br>
                            <!-- <div class="mb-3">
                                <label class="form-label">User Id</label>
                                <input type="text"  name="date"  class="form-control mask-text"/>
                            </div> -->

                            
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
    <script>  
$('table').DataTable();  
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
		
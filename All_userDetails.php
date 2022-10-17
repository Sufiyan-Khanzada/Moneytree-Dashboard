<?php
if(!$_GET['id']==''){
?>
<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php
include 'header.php';
?>
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
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-cs-icon="chevron-left" data-cs-size="13"></i>
                            <span class="text-small align-middle">Home</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">All user Details</h1>
                    </div>
                </div>
                <br>
                <br>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="w-100 d-md-none"></div>
                <!-- <div
                    class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                    <button
                        type="button"
                        class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#discountAddModal"
                    >
                        <i data-cs-icon="plus"></i>
                        <span>Add New Users </span>
                    </button>
                    <div class="dropdown d-inline-block d-xl-none">
                        <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-only ms-1"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i data-cs-icon="sort"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end custom-sort">
                            <a class="dropdown-item sort" data-sort="code" href="#">Code</a>
                            <a class="dropdown-item sort" data-sort="type" href="#">Type</a>
                            <a class="dropdown-item sort" data-sort="date" href="#">Date</a>
                            <a class="dropdown-item sort" data-sort="usage" href="#">Usage</a>
                            <a class="dropdown-item sort" data-sort="status" href="#">Status</a>
                        </div> -->
                    </div>
                    <div class="btn-group ms-1 check-all-container">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                             data-target="#checkboxTable">
                    <!-- <span class="form-check float-end">
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
                        ></button> -->
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" id="deleteChecked" type="button">Delete</button>
                        </div>
                    </div>
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
                    <input class="form-control" placeholder="Search"/>
                    <span class="search-magnifier-icon">
                  <i data-cs-icon="search"></i>
                </span>
                    <span class="search-delete-icon d-none">
                  <i data-cs-icon="close"></i>
                </span>
                </div>
                
            </div>
</div>
            
            <!-- Search End -->


            <div class="row">
            
                  <h2  class="small-title"  style="padding-top:10px;">User Details</h2>

<div class="col-12 col-md-4 col-lg-5 ">
<div class="card h-100 hover-scale-up cursor-pointer" >
 <div class="card-body d-flex flex-column align-items-center">
 <?php
                    $sql = "SELECT * FROM  users where id=".$_GET['id'];
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    }
                    ?>
                    
                     <?php
                     
                while($row = mysqli_fetch_assoc($result)){
                ?>
                  
                  
                  
                  
  <div class="card-body mb-n5">
<div class="d-flex align-items-center flex-column">
<div class="mb-5 d-flex align-items-center flex-column">
<div class="sw-6 sh-6 mb-3 d-inline-block bg-primary d-flex justify-content-center align-items-center rounded-xl">
<div class="text-white">RS</div>
</div>
<div class="h5 mb-1"><?php echo $row['name'];?></div>
<!-- <div class="h5 mb-1">Roshan Savings</div> -->
<div class="text-muted">
<!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-pin text-muted"><path d="M3.5 8.49998C3.5 -0.191432 16.5 -0.191368 16.5 8.49998C16.5 12.6585 12.8256 15.9341 11.0021 17.3036C10.4026 17.7539 9.59777 17.754 8.99821 17.3037C7.17467 15.9342 3.5 12.6585 3.5 8.49998Z"></path></svg> -->
<span class="align-middle">Cus_id:023251</span>

</div>
</div>
</div>
<div class="d-flex justify-content-center">
<div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100 mb-5">
<a href="add-kyc.php"> <button  type="button" class="btn btn-primary w-100 me-2">View KYC</button></a>
&nbsp;&nbsp;
<button type="button" class="btn btn-outline-primary w-100 me-2">Block</button>

<button type="button" class="btn btn-primary"   class="btn btn-icon btn-icon-only btn-outline-primary" > 
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-more-horizontal undefined"><path d="M9 10C9 9.44772 9.44772 9 10 9V9C10.5523 9 11 9.44772 11 10V10C11 10.5523 10.5523 11 10 11V11C9.44772 11 9 10.5523 9 10V10zM2 10C2 9.44772 2.44772 9 3 9V9C3.55228 9 4 9.44772 4 10V10C4 10.5523 3.55228 11 3 11V11C2.44772 11 2 10.5523 2 10V10zM16 10C16 9.44772 16.4477 9 17 9V9C17.5523 9 18 9.44772 18 10V10C18 10.5523 17.5523 11 17 11V11C16.4477 11 16 10.5523 16 10V10z"></path></svg>
</button>
</div>
</div>
<div class="mb-5">
<div class="row g-0 align-items-center mb-2">
<div class="col-auto">

</div>
<div class="col ps-3">
<div class="row g-0">
<div class="col">

</div>

<div class="row g-0 align-items-center mb-2">
<div class="col-auto">

</div>
<div class="col ps-3">
<div class="row g-0">
<div class="col">

</div>

<div class="row g-0 align-items-center mb-2">
<div class="col-auto">

</div>


<div class="mb-5">
<div>
<p class="text-small text-muted mb-2">ADDRESS</p>
<!-- <div class="row g-0 mb-2">
<div class="col-auto">
<div class="sw-3 me-1">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user text-primary"><path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path><path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path></svg>
</div>
</div>
<div class="col text-alternate align-middle">Roshan </div>
</div> -->


<div class="row g-0 mb-2">
<div class="col-auto">
<div class="sw-3 me-1">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user text-primary"><path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path><path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path></svg>
</div>
</div>
<div class="col text-alternate align-middle"><?php echo $row['bankname'];?> </div>
</div>


<div class="row g-0 mb-2">
<div class="col-auto">
<div class="sw-3 me-1">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-phone text-primary"><path d="M2.36839 7.02416C2.12354 6.39146 2.25595 5.68011 2.67976 5.15035L4.20321 3.24603C5.07388 2.1577 6.76286 2.27131 7.47994 3.46644L8.71763 5.52926C8.89353 5.82244 8.90746 6.18516 8.75456 6.49097L8.10563 7.78883C8.0362 7.92769 7.99726 8.08102 8.00921 8.2358C8.15129 10.0757 9.92438 11.8487 11.7642 11.9908C11.919 12.0028 12.0723 11.9638 12.2112 11.8944L13.5091 11.2455C13.8149 11.0926 14.1776 11.1065 14.4708 11.2824L16.5336 12.5201C17.7287 13.2372 17.8423 14.9262 16.754 15.7968L14.8497 17.3203C14.3199 17.7441 13.6086 17.8765 12.9759 17.6317C7.87729 15.6586 4.34147 12.1228 2.36839 7.02416Z"></path></svg>
</div>
</div>

<div class="col text-alternate"><?php echo $row['iban'];?></div>
<br>
<br>
  <!-- <div class="row g-0 mb-2">
  <div class="col-auto">
  <div class="sw-3 me-1">
  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-pin text-primary"><path d="M3.5 8.49998C3.5 -0.191432 16.5 -0.191368 16.5 8.49998C16.5 12.6585 12.8256 15.9341 11.0021 17.3036C10.4026 17.7539 9.59777 17.754 8.99821 17.3037C7.17467 15.9342 3.5 12.6585 3.5 8.49998Z"></path></svg>
  </div>
  </div>
  <div class="col text-alternate">4 Glamis Avenue, Strathmore Park, Wellington 6022, New Zealand</div>

  </div> -->

<div class="row g-0 mb-2">
<div class="col-auto">
<div class="sw-3 me-1">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-phone text-primary"><path d="M2.36839 7.02416C2.12354 6.39146 2.25595 5.68011 2.67976 5.15035L4.20321 3.24603C5.07388 2.1577 6.76286 2.27131 7.47994 3.46644L8.71763 5.52926C8.89353 5.82244 8.90746 6.18516 8.75456 6.49097L8.10563 7.78883C8.0362 7.92769 7.99726 8.08102 8.00921 8.2358C8.15129 10.0757 9.92438 11.8487 11.7642 11.9908C11.919 12.0028 12.0723 11.9638 12.2112 11.8944L13.5091 11.2455C13.8149 11.0926 14.1776 11.1065 14.4708 11.2824L16.5336 12.5201C17.7287 13.2372 17.8423 14.9262 16.754 15.7968L14.8497 17.3203C14.3199 17.7441 13.6086 17.8765 12.9759 17.6317C7.87729 15.6586 4.34147 12.1228 2.36839 7.02416Z"></path></svg>
</div>
</div>

<div class="col text-alternate"><?php echo $row['phone_number'];?></div>
</div>
<br>



<div class="row g-0 mb-2">
<div class="col-auto">
<div class="sw-3 me-1">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-email text-primary"><path d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path></svg>
</div>
</div>
<div class="col text-alternate"><?php echo $row['email'];?></div>
</div>
</div>
</div>
<div class="mb-5">
<div>
<!-- <p class="text-small text-muted mb-2">BILLING ADDRESS</p> -->
<!-- <div class="col text-alternate align-middle">Blaine Cottrell</div> -->
</div>
</div>

  
<?php
}
                
?>

</div>
</div>

</div>
</div>
</div>

</div>

</div>

</div>
</div>

</div>
</div>

</div>

</div>

</div>


</div>
<br>

<h4>Details</h4>
  



          


<!-- end details -->
<div class="col-12 mb-5">
<?php
                    $sql = "SELECT * FROM  committee_user where id=".$_GET['id'];
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                              ?>
                    
                     <?php
                     
                while($row = mysqli_fetch_assoc($result)){
                           ?>  
                  
                  
                  
              <div class="card mb-2 bg-transparent no-shadow d-none d-lg-block">
                  <div class="card-body pt-0 pb-0 sh-3">
                      <div class="row g-0 h-100 align-content-center">
                          <div class="col-6 col-lg-1 d-flex align-items-center mb-2 mb-lg-0 text-muted text-small">
                              Id
                          </div>
                          <div
                              class="col-6 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">
                              Title
                          </div>
                          <div
                              class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                              Committe Ref#
                          </div>
                          <div
                              class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                           Start Month
                          </div>
                          <div
                              class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                              Maturity Month
                          </div>
                          <!-- <div
                              class="col-6 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">
                              6M/10M
                          </div> -->
                         
                          <div
                              class="col-6 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">
                          Amount
                          </div>
                          <div
                              class="col-6 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">
                          Payment no
                          </div>
                          <div
                              class="col-6 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">
                        Payment Month
                          </div>
                      </div>
                  </div>
              </div>
              <div id="checkboxTable">
            
              <div class="mb-n2 scroll-out">
                    <div class="scroll-by-count">
                        
                        <div class="card mb-2 sh-15 sh-md-6">
                            <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                           
                             <div
                                    class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['id'];?></a>
                                </div>

                                <div
                                    class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['title'];?></a>
                                </div>
                              
                                <div
                                    class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['committee_num'];?> </a>
                                </div>
                                <div
                                    class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['committee_start_month'];?></a>
                                </div>
                                <div
                                    class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" >dummy</a>
                                </div>
                                <!-- <div
                                    class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['committe_id'];?></a>
                                </div> -->
                                <div
                                    class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['amount'];?></a>
                                </div>
                                <div
                                    class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['payment_no'];?></a>
                                </div>
                                <div
                                    class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <a href="#" class="text-truncate h-100 d-flex align-items-center"
                                       data-bs-toggle="modal" ><?php echo $row['months'];?></a>
                                </div>
                              <!-- <div
                                  class="col-2 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                  <a href='ViewDetails.php' class="text-truncate h-100 d-flex align-items-center"
                                   class="text-alternate">View Details</a>
                              </div> -->


                              <!-- <div
                                  class="col-4 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-5">
                                  <a href='deletenotification.php?id=' class="text-truncate h-100 d-flex align-items-center"
                                   class="text-alternate">DELETE</a>
                              </div> -->
                          </div>
                      </div>
                  </div>
                  </div>
 </div>
 </div> 
 </div>
  
                  
                  <?php
}
}else {

         echo "<center>No Record Founds</center>";
         
}

                
?>
                 
      </div>

      </div>
 
</div>



<!-- end details -->

            
                                 <!-- Start Plan Box  -->
              <div class="row">
             
                  
              <?php
                    $sql = "SELECT * FROM  wallet where id=".$_GET['id'];
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    }
                    ?>
                    
                     <?php
                     
                while($row = mysqli_fetch_assoc($result)){
                ?>
              <h2 class="small-title"  style="padding-top:10px">Total Investment</h2>
              <div class="col-6 col-md-4 col-lg-4">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                      Wallet Balance
                                    </div>
                                    <div class="text-primary cta-4"></div>
                                </div>
                            </div>
                            
                        
                                    </div>
                                   <div class="col-6 col-md-4 col-lg-4">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                   Total Investment
                                    </div>
                                    <div class="text-primary cta-4">Rs.9000</div>
                                </div>
                            </div>
                            
                        
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-4">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                  Total gain
                                    </div>
                                    <div class="text-primary cta-4">Rs.9000</div>
                                </div>
                            </div>
                            
                        
                                    </div>

              </div>
               
                
              <?php
}
                
?>


              <div class="row">

              <!-- Start Lumpsum Plan -->
                          <h1 class="small-title" style="padding-top:10px "> Lumpsum Plan</h1>
                            <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                3 Months
                                    </div>
                                    <?php
                    $sql = "SELECT SUM(amount)  as total1 FROM wallet  where plan_name ='3Months' AND tranaction_type='add' AND user_id =".$_GET['id'];
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    
                while($row = mysqli_fetch_assoc($result)){
                 
                  $sql2 = "SELECT SUM(amount)  as total2 FROM wallet  where plan_name ='3Months' AND tranaction_type='withdraw' AND user_id =".$_GET['id'];

                      $result2 = mysqli_query($conn, $sql2);
                      if(mysqli_num_rows($result) > 0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                    ?>
                                    <div class="text-primary cta-4"><?php  echo $row['total1']-$row2['total2']; ?></div>
                                </div>
                            </div>
                        
                          </div>
                       <?php 
                    }
                  }
                      }
                      } 
                      ?>

                          <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                    6 Months
                                    </div>
                                    <?php
                    $sql = "SELECT SUM(amount)  as total1 FROM wallet  where plan_name ='6Months' AND tranaction_type='add' AND user_id =".$_GET['id'];
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    
                while($row = mysqli_fetch_assoc($result)){
                 
                  $sql2 = "SELECT SUM(amount)  as total2 FROM wallet  where plan_name ='6Months' AND tranaction_type='withdraw' AND user_id =".$_GET['id'];

                      $result2 = mysqli_query($conn, $sql2);
                      if(mysqli_num_rows($result) > 0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                    ?>
                                   <div class="text-primary cta-4"><?php  echo $row['total1']-$row2['total2']; ?></div>
                                </div>
                            </div>
                        
                          </div>
                          <?php 
                    }
                  }
                      }
                      } 
                      ?>
                          <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                    1 Year
                                    </div>
                                
                                    <?php
                    $sql = "SELECT SUM(amount)  as total1 FROM wallet  where plan_name ='1Year' AND tranaction_type='add' AND user_id =".$_GET['id'];
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    
                while($row = mysqli_fetch_assoc($result)){
                 
                  $sql2 = "SELECT SUM(amount)  as total2 FROM wallet  where plan_name ='1Year' AND tranaction_type='withdraw' AND user_id =".$_GET['id'];

                      $result2 = mysqli_query($conn, $sql2);
                      if(mysqli_num_rows($result) > 0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                    ?>
                                   <div class="text-primary cta-4"><?php  echo $row['total1']-$row2['total2']; ?></div>
                                </div>
                            </div>
                        
                          </div>
                          <?php 
                    }
                  }
                      }
                      } 
                      ?>
                          <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                    3 Year Plus
                              </div>
                              
                              <?php
                    $sql = "SELECT SUM(amount)  as total1 FROM wallet  where plan_name ='3YearPlus' AND tranaction_type='add' AND user_id =".$_GET['id'];
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    
                while($row = mysqli_fetch_assoc($result)){
                 
                  $sql2 = "SELECT SUM(amount)  as total2 FROM wallet  where plan_name ='3YearPlus' AND tranaction_type='withdraw' AND user_id =".$_GET['id'];

                      $result2 = mysqli_query($conn, $sql2);
                      if(mysqli_num_rows($result) > 0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                    ?>
                                   <div class="text-primary cta-4"><?php  echo $row['total1']-$row2['total2']; ?></div>
                                </div>
                            </div>
                        
                          </div>

              </div>
              <?php 
                    }
                  }
                      }
                      } 
                      ?>
                          
                     <!-- end Lumpsum plan -->
                          
                      
                    <!-- Bonus committe -->
                    <div class="row">
                    <h2 class="small-title"  style="padding-top:10px ">Bonus Committe</h2>
                            <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                 6 Months
                                    </div>
                                    <div class="text-primary cta-4">Rs.9000</div>
                                </div>
                            </div>
                        
                          </div>
                       

                          <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary" ></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                     10 Months
                                    </div>
                                    <div class="text-primary cta-4">Rs. 50000</div>
                                </div>
                            </div>
                        
                          </div> 

                  </div>
                      
                          
                       <div class="row">
                             <h2  class="small-title"  style="padding-top:10px " >Regular Savings</h2>
                            <div class="col-6 col-md-4 col-lg-5">
                            <div class="card h-100 hover-scale-up cursor-pointer">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div
                                        class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                        <i data-cs-icon="dollar" class="text-primary"></i>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">
                                    Regular Savings
                                    </div>
                                    <div class="text-primary cta-4">Rs.10000</div>
                                </div>
                            </div>

                            
                        
                          </div>
                          </div>

                     <!-- Bonus committte end  -->

                  
            <!-- Regular Savings end  --> 
            
            

             <!-- End Plan Box  -->

         
        <!-- Controls End -->

        <!-- Discount List Start -->

      <!-- Regular Savings -->

      <!-- Start details -->
                                </div>
                            </div>

                            
                          </div>
        <!-- <div class="row">
        <?php
                    $sql = "SELECT * FROM  faqs";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    ?>
            <div class="col-12 mb-5">
                <div class="card mb-2 bg-transparent no-shadow d-none d-lg-block">
                    <div class="card-body pt-0 pb-0 sh-3">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-lg-1 d-flex align-items-center mb-2 mb-lg-0 text-muted text-small">
                                Id
                            </div>
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Question
                            </div>
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Answer
                            </div>
                            <div
                                class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">
                                Date
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div id="checkboxTable">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
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
                                    class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-3">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['question'];?></div>
                                </div>
                                <div
                                    class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['answer'];?></div>
                                </div>
                                <div
                                    class="col-6 col-lg-3 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none"></div>
                                    <div class="text-alternate"><?php echo $row['time'];?></div>
                                </div>
                                <div
                                    class="col-2 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <a href='faqs-edit.php?id=<?php echo $row['id']; ?>' class="text-truncate h-100 d-flex align-items-center"
                                     class="text-alternate">Edit</a>
                                </div>
                                <div
                                    class="col-4 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-5">
                                    <a href='deletefaqs.php?id=<?php echo $row['id']; ?>' class="text-truncate h-100 d-flex align-items-center"
                                     class="text-alternate">DELETE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
              
                      <?php 
                    }
                  }
                       
                      ?>
        </div> -->

   <!-- popup -->

   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification screen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send </button>
      </div>
    </div>
  </div>
</div>
   <!-- popend -->


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
                        <h5 class="modal-title">Add New User</h5>
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="post-form" action="addfaqs.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">question</label>
                                <input type="text" name="question" class="form-control mask-text"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">answer</label>
                                <input type="text"  name="answer"  class="form-control mask-text"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">time</label>
                                <input type="datetime-local"  name="time"  class="form-control mask-text"/>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification screen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <!-- <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div> -->
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send </button>
      </div>
    </div>
  </div>
</div>
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
<?php
}
else {


  echo "<script>alert('ID Not Found');</script>";
}

?>

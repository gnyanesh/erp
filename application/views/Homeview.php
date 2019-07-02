<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url()?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/tbstyles.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>

<div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html"><img src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="" style="width: 20%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        
                    
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url()?>assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="<?php echo base_url()?>Login/logout""><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper" style="margin-left:0px;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                        <!-- ============================================================== -->
                        <!-- four widgets   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total views   --> 
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/Product.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Products</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">10</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total views   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total followers   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <a href="<?php echo base_url()?>Stock">  
                                            <img src="<?php echo base_url()?>assets/icon2/stock.png" alt="" style="width: 70%;">
                                        </a>
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Stock</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">912</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total followers   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- partnerships   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/orders.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Orders</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">524</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end partnerships   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total earned   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/dealers.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Dealers</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">19</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    <!-- ============================================================== -->
                        <!-- end total followers   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- partnerships   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                     <a href="<?php echo base_url()?>Sales">  
                                        <img src="<?php echo base_url()?>assets/icon2/sales.png" alt="" style="width: 70%;">
                                            </a>
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Sales</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">823</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end partnerships   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total earned   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/purchase.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Purchase</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">756</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    
                    
                    
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/ASP.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">ASPs</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">23</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    
                    
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/employee.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Employees</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">22</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    
                    
                    
                    
                        <!-- ============================================================== -->
                        <!-- end total earned   -->
                        <!-- ============================================================== -->
                    
                    
                    
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/expenses.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Expenses</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">3200</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end partnerships   -->
                        <!-- ============================================================== -->
                    
                    
                    
                    
                        <!-- ============================================================== -->
                        <!-- total earned   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/reports.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Reports</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">3</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    
                    
                    
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/alerts.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted p-tb-18">Alerts</h5>
<!--                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10"> 10,28,056</h2>-->
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    
                    
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                        <img src="<?php echo base_url()?>assets/icon2/setting.png" alt="" style="width: 70%;">
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted p-tb-18">Setting</h5>
<!--                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10"> 10,28,056</h2>-->
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    
                    
                    </div>
            </div>
 
        </div>
    </div>
<a href="<?php echo base_url()?>Login/logout"> Logout </a>

<script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url()?>assets/libs/js/main-js.js"></script>
</body>
 
</html>

<!--  <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script> -->
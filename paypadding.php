<?php
include "isset/script.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <?php include "style/style.php"; ?>
    <style>
        .pointer {
            cursor: pointer;
        }
    </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image ">
                        <img src="image/<?php echo $_SESSION['login']['image'] ?>" style="height: 37px;;" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['login']['employee_name'] ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="pos.php" class="nav-link ">
                                <i class="fa-solid nav-icon fa-cart-plus"></i>

                                <p>
                                    POS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Purchase
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="product_list.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Purchase Order</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="purchase_order.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Purchase Order</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fa-regular nav-icon  fa-address-book"></i>

                                <p>
                                    Employee
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="listemployee.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Products</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="addemployeephp.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Employee</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="employee_details.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Employee Details</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fa-brands nav-icon fa-product-hunt"></i>
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                <p>
                                    Products
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="productlist.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product List </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="product_list_padding.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product List Padding</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="product_list_complete.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product List Complete</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="addproduct.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Product</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="product_details.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Detail</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a href="customer.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Customer
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Repaid</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Payment</a></li>
                                <li class="breadcrumb-item active">Repaid</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?php
                    // print_r($_POST);

                    ?>
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">

                                    <!-- jquery validation -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Information Order Details <small></small></h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->

                                        <div class="card-body">
                                            <div class="col-12">
                                                <div class="row">
                                                    <!-- <div class="addimage rounded bg-secondary">
                                                        <img src="image/" class="rounded" id="image-preview" alt="">
                                                    </div> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <?= $invalidMoney ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="name">Customer Name</label>
                                                        <input type="text" value="<?php echo isset($_GET['paddingdetail']) ? $paddingdetail['firstname'] . " " . $paddingdetail['lastname'] : ''; ?>" class="form-control" id="name" placeholder="Enter name">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="email">Customer Email</label>
                                                        <input type="text" value="<?php echo isset($_GET['paddingdetail']) ? $paddingdetail['email'] : ''; ?>" class="form-control" id="email" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Customer Phone</label>
                                                        <input type="text" value="<?php echo isset($_GET['paddingdetail']) ? $paddingdetail['tel'] : ''; ?>" class="form-control" id="phone" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="dob"> Order Date</label>
                                                        <input type="date" value="<?php echo  isset($_GET['paddingdetail']) ? date('Y-m-d', strtotime($paddingdetail['create_at'])) : ''; ?>" class="form-control" id="dob" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Order Invoice</label>
                                                        <input type="text" value="<?php echo isset($_GET['paddingdetail']) ? "VN-" . $paddingdetail['paymentID'] : ''; ?>" class="form-control" id="phone" placeholder="Phone">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="email">Payment Status</label>
                                                        <input type="text" value="<?php echo isset($_GET['paddingdetail']) ? $paddingdetail['payment_method'] : ''; ?>" class="form-control" id="email" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Paid Amount</label>
                                                        <input type="text" value="<?php echo isset($_GET['paddingdetail']) ? $paddingdetail['paid_amount'] : ''; ?>" class="form-control" id="phone" placeholder="Phone">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Due Amount</label>
                                                        <input type="text" value="<?php echo isset($_GET['paddingdetail']) ? $paddingdetail['total_amount'] - $paddingdetail['paid_amount'] : ''; ?>" class="form-control " id="phone" disabled placeholder="due money">
                                                        <input type="hidden" name="duemoney" value="<?php echo isset($_GET['paddingdetail']) ? $paddingdetail['total_amount'] - $paddingdetail['paid_amount'] : ''; ?>">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="paid">Repaid</label>
                                                        <input name="repaid" type="text" class="form-control" id="paid" placeholder="input your due money">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="completeorder" name="completeOrder" class="btn btn-success">Complete Order</button>
                                            <!-- <button type="submit" name="ordercancel" class="btn btn-danger">Cancel</button> -->
                                            <button type="submit" name="orderback" class="btn btn-secondary">back</button>
                                        </div>

                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="card">
                            <div class="col-12">
                                <?= $pleaseinsert ?>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body table-responsive p-0">

                                <table class="table  table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Photo</th>
                                            <th class="">Name</th>
                                            <th class="">Product Code</th>
                                            <th>quantity</th>
                                            <th>Price</th>

                                        </tr>
                                    </thead>

                                    <tbody class="productsearch tabel_show">
                                        <?php foreach ($paylist as $key => $val) { ?>
                                            <tr>
                                                <td class="align-middle "><?= $key + 1 ?>
                                                    <input type="hidden" name="payID[]" value="<?= $val['id'] ?>">
                                                </td>
                                                <td class="align-middle ">
                                                    <div class="listimage">
                                                        <img src="productimage/<?= $val['image'] ?>" alt="">
                                                    </div>
                                                </td>
                                                <td class="align-middle ">
                                                    <?= $val['product_name'] ?>
                                                </td>
                                                <td class="align-middle ">
                                                    <?= $val['barcode'] ?>
                                                </td>
                                                <td class="align-middle ">
                                                    <?= $val['qty'] ?>
                                                </td>
                                                <td class="align-middle ">
                                                    <?= $val['price'] ?>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>


                                    </tfoot>
                                </table>
                                <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
</body>
<script>
    $(document).ready(function() {
        // Handle image selection
        $('#image-input').change(function() {
            var file = $(this)[0].files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(file);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#quickForm').submit(function(e) {
            var isValid = true;

            // Loop through each required input field
            $(this).find('input[required], select[required], textarea[required]').each(function() {
                if ($(this).val() === '') {
                    isValid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            // Prevent form submission if any required field is empty
            if (!isValid) {
                e.preventDefault();
            }
        });
        $('#quickForm').submit(function(e) {
            var isValid = true;

            // Check if the select element has a selected option
            if ($('#gender').val() === '0') {
                isValid = false;
                $('#gender').addClass('is-invalid');
            } else {
                $('#gender').removeClass('is-invalid');
            }

            // Prevent form submission if the select element is not valid
            if (!isValid) {
                e.preventDefault();
            }
        });
    });
</script>

</html>
<?php include "isset/script.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS | Products List</title>
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

            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Point of Sale</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">POS</a></li>
                                <li class="breadcrumb-item active">Point of Sale</li>
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
                    print_r($_POST);
                    // print_r($_SESSION['customerId']);
                    ?>

                    <div class="row">

                        <!-- /.card-header -->
                        <div class="col-md-6">

                            <div class="card">
                                <div class="col-12">
                                    <?= $pleaseinsert ?>
                                </div>
                                <!-- /.card-header -->

                                <div class="card-body table-responsive p-0">
                                    <form method="POST">
                                        <table class="table  table-head-fixed text-nowrap">
                                            <thead>
                                                <tr>

                                                    <th class="">Name</th>
                                                    <th class="">QTY</th>
                                                    <th>Price</th>
                                                    <th>SubTotal</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody class="tabel_show">
                                                <?php foreach ($invoice_details as $key => $val) { ?>
                                                    <tr>
                                                        <td class="align-middle "><?= $val['product_name'] ?></td>
                                                        <td class="align-middle ">
                                                            <div class="d-flex justify-content-between border w-120">
                                                                <div class="d-flex justify-content-between border w-120">
                                                                    <span><i data-minus="<?php echo $val['productId'] ?>" class="fa-solid  iconminus fonticon fa-minus"></i></span>
                                                                    <span class="qty" data-qty="<?= $val['id'] ?>"><?= $val['qty'] ?></span>
                                                                    <span><i data-plus="<?php echo $val['productId'] ?>" class="fa-solid iconplus  fonticon fa-plus"></i></span>
                                                                    <input type="hidden" class="productId" value="<?= $val['productId'] ?>">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle price"><?= $val['price'] ?></td>
                                                        <td class="align-middle">$ <span class="total"><?php $totalqty = $val['price'] * $val['qty'];
                                                                                                        echo number_format($totalqty, 2);
                                                                                                        $total += $totalqty; ?></span>
                                                            <p class="order_id" style="display: none;"><?= $val['id'] ?></p>

                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <i data-posdelete="<?php echo $val['id'] ?>" class="fa-solid fa-trash p-1 pointer iconhover icondelete"></i>
                                                            </a>
                                                            <input type="hidden" name="idproduct[]" value="<?= $val['id'] ?>">
                                                        </td>
                                                        <!-- <td>
                                                           
                                                        </td> -->
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4">Total</td>
                                                    <td><span class="finaltotal"></span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">
                                                        <select required name="gender" id="gender" class="custom-select col-md-12">
                                                            <option selected value="0">select customer</option>
                                                            <?php foreach ($mycustomerlist as $key => $val) { ?>
                                                                <option value="<?= $val['id'] ?>"><?= $val['firstname'] . " " . $val['lastname'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-center">
                                                        <a href="customer"><button type="button" class="btn btn-primary">Add Customer</button></a>
                                                        <button type="submit" name="btninvoice" class="btn btninvoice btn-success">Create Invoice</button>
                                                        <!-- <button class="btn btn-primary">Helo</button> -->
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <!-- /.card-body -->
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <!-- <h3 class="card-title d-flex align-items-center p-0 m-0 ">
                                        <span style="padding-right: 5px;">Row</span>
                                        <select name="row" id="row" class="custom-select-sm m-0 p-0 col-md-12">
                                            <option value="5">4</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>

                                        </select>
                                    </h3> -->

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control listsearch float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table  table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th class="">Name</th>
                                                <th>Price</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="possearch">
                                            <?php foreach ($listproduct as $key => $val) { ?>
                                                <form method="POST">
                                                    <tr>
                                                        <td class="align-middle "><?= $key + 1 ?></td>
                                                        <td>
                                                            <div class="listimage">
                                                                <img src="productimage/<?= $val['image'] ?>" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="align-middle product_name"><?= $val['product_name'] ?></td>
                                                        <td class="align-middle pro_price"><?= $val['price'] ?></td>

                                                        <td class="align-middle text-center ">
                                                            <!-- <i class="fa-solid fa-square-plus"></i> -->
                                                            <?php if (!$val['qty'] == 0) { ?>
                                                                <button class="border-0" name="addrowsub" style="background: none;" type="submit"><i class="fa-solid  fa-square-plus p-1 pointer iconhover iconpos"></i></button>
                                                            <?php  } else {
                                                                echo "no qty";
                                                            } ?>
                                                            <!-- <button class="btn btn-primary" name="addrowsub" type="submit">ljdfs</button> -->
                                                        </td>
                                                        <td><input type="hidden" name="price" value="<?= $val['price'] ?>">
                                                            <input type="hidden" name="myid" value="<?= $val['id'] ?>">
                                                            <input type="hidden" value="<?= $val['qty'] ?>">

                                                        </td>
                                                    </tr>
                                                </form>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="pos-show"></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>


                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <div class="show"></div>
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
        $(".listsearch").keyup(function() {
            var search = $(this).val();
            $.ajax({
                method: 'post',
                url: 'isset/possearch.php',
                data: {
                    search: search
                },
                success: function(response) {
                    $(".possearch").html(response);
                }
            })
        })
    })
</script>
<script>
    $(document).ready(function() {
        function calculateAndUpdateTotal(row) {
            var qtyElement = row.find(".qty");
            var qty = parseInt(qtyElement.text());
            var priceElement = row.find(".price");
            var price = parseFloat(priceElement.text());
            var total = qty * price;
            row.find(".total").text(total.toFixed(2));

            // updateFinalTotal(); 
        }

        function updateFinalTotal() {
            var finalTotal = 0;
            $(".total").each(function() {
                var total = parseFloat($(this).text());
                finalTotal += total;
            });
            $(".finaltotal").text("$ " + finalTotal.toFixed(2));
        }

        // Event delegation for iconplus
        $(document).on("click", ".iconplus", function() {
            var row = $(this).closest("tr");
            var plus = $(this).data("plus");
            var qtyElement = row.find(".qty");
            var qty = parseInt(qtyElement.text());
            var idqty = qtyElement.attr("data-qty");
            qty += 1;
            qtyElement.text(qty);
            var numbershow = parseInt($(".shopnumber").text()) || 0;
            var numberplus = 1;
            numberplus += numbershow;
            $(".shopnumber").text(numberplus);
            $.ajax({
                url: "isset/posAddRow.php",
                method: "post",
                data: {
                    plus: plus,
                    qtys: qty
                },
                success: function(response) {
                    console.log(row);
                    $(".pos-show").html(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
            calculateAndUpdateTotal(row);
            updateFinalTotal();
            // Your AJAX code
        });


        // Event delegation for iconminus
        $(document).on("click", ".iconminus", function() {
            var minus = $(this).data("minus");
            var row = $(this).closest("tr");
            var qtyElement = row.find(".qty");
            var qty = parseInt(qtyElement.text());
            var idqty = qtyElement.attr("data-qty");
            if (qty > 1) {
                qty -= 1;
                qtyElement.text(qty);
                calculateAndUpdateTotal(row);
                updateFinalTotal();
                var numbershow = parseInt($(".shopnumber").text()) || 0;
                var numberplus = 1;
                numberplus = numberplus - numbershow;
                $(".shopnumber").text(Math.abs(numberplus));

                $.ajax({
                    url: "isset/posAddRow.php",
                    method: "post",
                    data: {
                        minus: minus,
                        qtys: qty
                    },
                    success: function(response) {
                        console.log(row);
                        $(".pos-show").html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            }

            // Your AJAX code
        });
        $(document).on("click", ".icondelete", function() {
            $(this).closest("tr").remove();
            var icondelete = $(this).data("posdelete");
            var icondelete1 = $(this).data("posdelete1");
            var qtyElement = $(this).closest("tr").find('.qty');
            var qty = parseInt(qtyElement.text());
            var qtyValue = $('.possearch').find('.qty').attr('data-qty');

            $.ajax({
                url: "isset/posDeleteRow.php",
                method: 'post',
                data: {
                    icondelete: icondelete,

                },
                success: function(response) {
                    // console.log(response);
                    $(".pos-show").html(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
            $.ajax({
                url: "isset/posAddRow.php",
                method: 'post',
                data: {
                    icondelete1: icondelete1,
                    qty12: qty
                },
                success: function(response) {
                    console.log(icondelete1);
                    $(".pos-show").html(response);

                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });

            updateFinalTotal();
        });
        $(document).on("click", ".iconpos", function() {
            var rowlist = $(this).closest("tr");
            var pro_name = rowlist.find(".product_name").text();
            var pro_price = parseFloat(rowlist.find(".pro_price").text());
            pro_price = pro_price.toFixed(2);
            var id = rowlist.find(".iconpos").data("pos");
            // Check if a row with the same identifier exists
            var existingRow = $('.tabel_show').find('.qty[data-qty="' + id + '"]').closest('tr');
            if (existingRow.length > 0) {
                // Update the quantity in the existing row
                var qtyElement = existingRow.find('.qty');
                var qty = parseInt(qtyElement.text());
                qtyElement.text(qty + 1);

                // Update the total value in the existing row
                var priceElement = existingRow.find('.price');
                var totalElement = existingRow.find('.total');
                var price = parseFloat(priceElement.text());
                var total = (qty + 1) * price;
                totalElement.text(total.toFixed(2));
            } else {
                // Append a new row
                // var htmlCode = '<tr>' +
                //     '<td>' + pro_name + '</td>' +
                //     '<td class="align-middle">' +
                //     '<div class="d-flex justify-content-between border w-120">' +
                //     '<div class="d-flex justify-content-between border w-120">' +
                //     '<span><i data-minus="<?php echo $val['id'] ?>" class="fa-solid  iconminus fonticon fa-minus"></i></span>' +
                //     '<span class="qty" data-qty="' + id + '">1</span>' +
                //     '<span><i data-plus="<?php echo $val['id'] ?>" class="fa-solid iconplus  fonticon fa-plus"></i></span>' +
                //     '</div>' +
                //     '</div>' +
                //     '</td>' +
                //     '<td class="align-middle price">' + pro_price + '</td>' +
                //     '<td class="align-middle">$ <span class="total">' + pro_price + '</span></td>' +
                //     '<td class="align-middle text-center">' +
                //     '<i data-posdelete="' + id + '" data-posdelete1="<?php echo $val['id'] ?>" class="fa-solid fa-trash p-1 pointer iconhover icondelete"></i>' +
                //     '</a>' +
                //     '</td>' +
                //     '</tr>';

                // $('.tabel_show').append(htmlCode);
            }
            $.ajax({
                url: "isset/posAddRow.php",
                method: 'post',
                data: {
                    id: id,
                    pro_price: pro_price
                },
                success: function(response) {
                    console.log(id);
                    $(".pos-show").html(response);
                }
            });
            updateFinalTotal();
        });
        // Append the HTML code dynamically

        updateFinalTotal();
        calculateAndUpdateTotal();

    });
</script>
<script>
    $(document).ready(function() {
        // $(document).on("click", ".invoice", function() {

        // })
    })
</script>
<script>
    $(document).ready(function() {
        $(document).on("click", ".btninvoice", function() {
            var productIdArray = []; // Empty array to store productIds
            var customer = $("#gender").val();

            $(".productId").each(function() {
                var productId = $(this).val();
                productIdArray.push(productId); // Push productId into the array
            });

            // Send the arrays in the AJAX request
            $.ajax({
                url: "isset/invoice_pos.php",
                method: "post",
                data: {
                    productIdArray: productIdArray,
                    customer: customer
                },
                success: function(response) {
                    $(".pos-show").html(response); // Display the response in the .pos-show element
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });
</script>
<!-- <script>
    $(document).ready(function() {
        $("#gender").change(function() {
            var gender = $(this).val();
            $.ajax({
                url: 'isset/supp_change_pos.php',
                method: 'post',
                data: {
                    gender: gender
                },
                success: function(response) {
                    console.log(response);
                }
            })
        })
    })
</script> -->

</html>
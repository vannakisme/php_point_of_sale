<?php include_once "isset/script.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <?php include "style/style.php"; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

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
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
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
            <li class="nav-item ">
              <a href="index.php" class="nav-link ">
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
            <li class="nav-item menu-open ">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Purchase
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="product_list.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Purchase Order</p>
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
                  <a href="purchase_order.php" class="nav-link active">
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
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Purchase Order</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Project Add</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <form action="" method="POST">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Purchase Information</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="inputName">Supplier Name</label>
                      <input type="text" placeholder="supplier" class="form-control form-control-sm supplier-search">
                      <div class="col-12 table-hide">
                        <div class="card  position-relative" style="box-shadow: none;">
                          <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap ">
                              <tbody class="supplier-show-search">
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">PO#</label>
                      <input type="text" class="form-control form-control-sm rounded-0">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="">Payment Method</label>
                      <select name="" id="" class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option>Cash</option>
                        <option>Bank</option>
                        <option>Visa Card</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table table-striped table-bordered" id="item-list">
                        <colgroup>
                          <col width="5%">
                          <col width="10%">
                          <col width="25%">
                          <col width="15%">
                          <col width="10%">
                          <col width="20%">
                          <col width="15%">
                        </colgroup>
                        <thead>
                          <tr class="bg-navy disabled">
                            <th class="px-1 py-1 text-center">Act.</th>
                            <th class="px-1 py-1 text-center">Barcode</th>
                            <th class="px-1 py-1 text-center">Product Name</th>
                            <th class="px-1 py-1 text-center">Unit</th>
                            <th class="px-1 py-1 text-center">Qty</th>
                            <th class="px-1 py-1 text-center">Price</th>
                            <th class="px-1 py-1 text-center">Total</th>
                          </tr>
                        </thead>
                        <tbody class="table_show">
                          <?php foreach ($orderdetails as $key) { ?>
                            <tr>
                              <td class="align-middle p-0 text-center"><button class="btn btn-sm btn-remove btn-danger py-0" type="button" data-deleterow="<?php echo $key['id'] ?>" onclick="rem_item($(this))"><i class="fa fa-times"></i></button></td>
                              <td class="align-middle p-1"><input type="text" class="text-center w-100 border-0 item_id" required></td>
                              <td class="align-middle p-1 item-description"></td>
                              <td class="align-middle p-1"><input type="text" class="text-center w-100 border-0"></td>
                              <td class="align-middle p-0 text-center"><input type="number" class="text-center w-100 border-0 qty"></td>
                              <td class="align-middle p-1"><input type="number" class="text-right w-100 border-0 price"></td>
                              <td class="align-middle p-1 text-right total-price"></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                          <tr class="bg-lightblue">
                          <tr>
                            <th class="p-1 text-right" colspan="6"><span><button class="btn btn btn-addrow btn-primary py-1" type="button" id="add_row">Add Row</button></span> Sub Total</th>
                            <th class="p-1 text-right" id="sub_total">0</th>
                          </tr>
                          <tr>
                            <th colspan="5"></th>
                            <th class="p-1 text-right text-nowrap d-flex">Discount (%)
                              <input type="number" class="border-light " style="width: 100px;" value="">
                            </th>
                            <th class="p-1"><input type="text" class="w-100 border-0 text-right" value=""></th>
                          </tr>
                          <tr>
                            <th class="p-1 text-right" colspan="6">Total</th>
                            <th class="p-1 text-right final-total" id="total">0</th>
                          </tr>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNoted">Noted</label>
                    <textarea id="" class="form-control" rows="4"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

          </div>

          <div class="row">
            <div class="col-12">
              <input type="submit" value="Create" class="btn btn-success">
              <a href="#" class="btn btn-danger">Cancel</a>
              <button class="btn btn-primary" type="submit">asdf</button>
            </div>
          </div>
        </form>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2024 Advence Database.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>
<script>
  function rem_item(_this) {
    _this.closest('tr').remove()
  }
  $(document).ready(function() {
    var dd = $(".supplier-search").val();
    if (dd === '' || isNaN(parseFloat(dd))) {
      $(".table-hide").hide();
    }

    function updateFinalTotal() {
      var finalTotal = 0;
      $('.total-price').each(function() {
        var subtotal = parseFloat($(this).text());
        if (!isNaN(subtotal)) {
          finalTotal += subtotal;
        }
      });
      $('.final-total').text(finalTotal.toFixed(2));
    }


    console.log(updateFinalTotal());
    $(document).on("click", ".btn-addrow", function() {
      var item_id = $(this).text();
      var rows = $(this);
      var addrow = '<tr>' +
        '<td class="align-middle p-0 text-center"><button class="btn btn-sm btn-remove btn-danger py-0" type="button"  onclick="rem_item($(this))"><i class="fa fa-times"></i></button></td>' +
        '<td class="align-middle p-1"><input type="text" class="text-center w-100 border-0 item_id" required></td>' +
        '<td class="align-middle p-1 item-description"></td>' +
        '<td class="align-middle p-1"><input type="text" class="text-center w-100 border-0"></td>' +
        '<td class="align-middle p-0 text-center"><input type="number" class="text-center w-100 border-0 qty"></td>' +
        '<td class="align-middle p-1"><input type="number" class="text-right w-100 border-0 price"></td>' +
        '<td class="align-middle p-1 text-right total-price"></td>' +
        '</tr>';
      $('.table_show').append(addrow);
      $.ajax({
        url: "isset/addrowSupplier.php",
        method: "post",
        data: {
          item_id: item_id
        },
        success: function(response) {
          // Handle the response from the server
          // console.log(response);
        },
        error: function(xhr, status, error) {
          // Handle any errors that occur during the Ajax request
          console.log(error);
        }
      })
      // Retrieve values and perform Ajax request
      $('.table_show').on('keyup', '.qty, .price, .item_id', function() {

        var row = $(this).closest('tr');
        var item_id = row.find('.item_id').val();
        var qty = parseFloat(row.find('.qty').val());
        var price = parseFloat(row.find('.price').val());

        // Calculate the total price
        var total = qty * price;
        row.find('.total-price').text(total.toFixed(2));

        // Perform your Ajax request using the retrieved values
        // $.ajax({
        //   url: "isset/addrowSupplier.php",
        //   method: "post",
        //   data: {},
        // })
        updateFinalTotal();
      });
    });
    $('.table_show').on('keyup', '.qty, .price, .item_id', function() {
      var row = $(this).closest('tr');
      var item_id = row.find('.item_id').val();
      var qty = parseFloat(row.find('.qty').val());
      var price = parseFloat(row.find('.price').val());

      // Calculate the total price
      var total = qty * price;
      row.find('.total-price').text(total.toFixed(2));

      // Perform your Ajax request using the retrieved values
      $.ajax({
        url: 'isset/addrowSupplier.php',
        method: 'post',
        data: {
          item_id: item_id,
          qty: qty,
          price: price
        },
        success: function(response) {
          // Handle the response from the server
          console.log(response);
          updateFinalTotal();
        },
        error: function(xhr, status, error) {
          // Handle any errors that occur during the Ajax request
          console.log(error);
        }
      });
      updateFinalTotal();
    });
    $(document).on("click", ".supp", function() {
      var supplierName = $(this).text();
      console.log(supplierName);
      $('.supplier-search').val(supplierName);
      $(".table-hide").hide(); // Hide the table with class "table-hide"
    });


  });
</script>
<script>
  $(document).ready(function() {
    $(document).on('click', ".btn-remove", function() {
      var item_delete = $(this).data('deleterow');
      console.log(item_delete);
      $.ajax({
        url: 'isset/deleterow_supplier.php',
        method: 'post',
        data: {
          item_delete: item_delete
        },
        success: function(respone) {
          console.log(respone);
        }
      })

    })
  });
</script>
<script>
  $(document).ready(function() {
    $(document).on("click", ".supp", function() {
      var supplierName = $(this).text();
      console.log(supplierName);
      $('.supplier-search').val(supplierName);
      $(".table-hide").hide(); // Hide the table with class "table-hide"
    });
    $(document).on("keyup", ".supplier-search", function() {
      var search = $(this).val();
      $.ajax({
        url: 'isset/supplierSearch.php',
        method: 'post',
        data: {
          search: search
        },
        success: function(response) {
          $(".supplier-show-search").html(response);
          if (search !== "") {
            $(".table-hide").show(); // Hide the table when search is not empty
          } else {
            $(".table-hide").hide(); // Show the table when search is empty
          }
          console.log(response);
        },
        error: function(xhr, status, error) {
          console.log(error);
        }
      });
    });
  })
</script>

</html>
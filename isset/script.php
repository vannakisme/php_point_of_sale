<?php
include_once "isset/connection.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$Subtotal = 0;
$already = '';
$total = 0;
$check = 'check';
date_default_timezone_set('Asia/Phnom_Penh');
$today = date('Y-m-d H:i:s');
$today1 = date('Y-m-d');
$create_by = $_SESSION['login']['id'];
$loged = '';
$sql = "SELECT * FROM employee";
$stmt = $conn->prepare($sql);
$stmt->execute();
$employee = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['addemp'])) {
    $image = $_FILES['image']['name'];
    $target = 'image/' . $image;
    isset($_GET['idedit']);
    if (isset($_GET['idedit'])) {
        if ($image != '') {
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
            $sql = "UPDATE employee SET employee_name=:name, userid=:userid, gender=:gender, dob=:dob, address=:address, phone=:phone, position=:position, email=:email, password=:password, update_at=:update_at, script=:script, city_id=:city, salary=:salary, image=:image WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
            $stmt->bindParam(":userid", $_POST['userid'], PDO::PARAM_STR);
            $stmt->bindParam(":gender", $_POST['gender'], PDO::PARAM_STR);
            $stmt->bindParam(":dob", $_POST['dob'], PDO::PARAM_STR);
            $stmt->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
            $stmt->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
            $stmt->bindParam(":position", $_POST['role'], PDO::PARAM_STR);
            $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
            $stmt->bindParam(":update_at", $today, PDO::PARAM_STR);
            $stmt->bindParam(":script", $_POST['script'], PDO::PARAM_STR);
            $stmt->bindParam(":city", $_POST['city'], PDO::PARAM_STR);
            $stmt->bindParam(":salary", $_POST['salary'], PDO::PARAM_STR);
            $stmt->bindParam(":id", $_GET['idedit'], PDO::PARAM_INT);
            $stmt->bindParam(":image", $image, PDO::PARAM_STR);
            $stmt->execute();
            header("location: listemployee.php");
            exit();
        } else {

            $sql = "UPDATE employee SET employee_name=:name, userid=:userid, gender=:gender, dob=:dob, address=:address, phone=:phone, position=:position, email=:email, password=:password, update_at=:update_at, script=:script, city_id=:city, salary=:salary WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
            $stmt->bindParam(":userid", $_POST['userid'], PDO::PARAM_STR);
            $stmt->bindParam(":gender", $_POST['gender'], PDO::PARAM_STR);
            $stmt->bindParam(":dob", $_POST['dob'], PDO::PARAM_STR);
            $stmt->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
            $stmt->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
            $stmt->bindParam(":position", $_POST['role'], PDO::PARAM_STR);
            $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
            $stmt->bindParam(":update_at", $today, PDO::PARAM_STR);
            $stmt->bindParam(":script", $_POST['script'], PDO::PARAM_STR);
            $stmt->bindParam(":city", $_POST['city'], PDO::PARAM_STR);
            $stmt->bindParam(":salary", $_POST['salary'], PDO::PARAM_STR);
            $stmt->bindParam(":id", $_GET['idedit'], PDO::PARAM_INT);
            $stmt->execute();
            header("location: listemployee.php");
            exit();
        }
    } else {
        $sql = "SELECT * FROM employee WHERE email=:email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
        $stmt->execute();
        $employee1 = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($employee1['email']) {
            $already = '<div class="alert alert-warning" role="alert">
            Your email has already! please try another.
</div>';
        } else {

            $total10 = 10;
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
            $sql = "INSERT INTO employee (employee_name, userid, gender, dob, address, phone, image, position, email, password, create_at, script, city_id, salary, row)
VALUES (:name, :userid, :gender, :dob, :address, :phone, :image, :position, :email, :password, :create_at, :script, :city, :salary, :row)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
            $stmt->bindParam(":userid", $_POST['userid'], PDO::PARAM_STR);
            $stmt->bindParam(":gender", $_POST['gender'], PDO::PARAM_STR);
            $stmt->bindParam(":dob", $_POST['dob'], PDO::PARAM_STR);
            $stmt->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
            $stmt->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
            $stmt->bindParam(":image", $image, PDO::PARAM_STR);
            $stmt->bindParam(":position", $_POST['role'], PDO::PARAM_STR);
            $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
            $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
            $stmt->bindParam(":script", $_POST['script'], PDO::PARAM_STR);
            $stmt->bindParam(":city", $_POST['city'], PDO::PARAM_STR);
            $stmt->bindParam(":salary", $_POST['salary'], PDO::PARAM_STR);
            $stmt->bindParam(":row", $total10, PDO::PARAM_INT);

            $stmt->execute();
            header("location: listemployee.php");
            exit();
        }
    }
}

$sql = "SELECT * FROM city";
$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT row FROM employee WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $create_by, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$rowlist = $row['row'];



$sql = "SELECT employee.id, employee.salary, employee.employee_name, employee.userid, employee.gender, employee.dob, employee.city_id, employee.phone,
employee.address, employee.image, employee.email, employee.`password`, employee.position, city.city
FROM employee
JOIN city ON employee.city_id = city.id LIMIT $rowlist ";
if (isset($_GET['pageemployee'])) {
    if ($_GET['pageemployee'] > 1) {
        $sql .= " OFFSET " . ($_GET['pageemployee'] - 1) * $rowlist;
    }
}
$stmt = $conn->prepare($sql);
$stmt->execute();
$listemp = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT count(*) as countRecord FROM employee ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$tempPage = $stmt->fetch(PDO::FETCH_ASSOC);
$maxpage = 1;
if ($tempPage) {
    $maxpage = ceil($tempPage['countRecord'] / $rowlist);
}

if (isset($_GET['idedit'])) {
    $sql = "SELECT * FROM employee WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET['idedit'], PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
}

$sql = "SELECT products.image,products.id,products.qty,products.price, products.product_name, category.category FROM `products`
JOIN category ON products.category_id = category.id  ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$listproduct = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM products WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $_GET['ideditpro'], PDO::PARAM_INT);
$stmt->execute();
$productEdit = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['addproduct'])) {
    $imageproduct = $_FILES['image']['name'];
    $imagetarget = 'productimage/' . $imageproduct;
    if (isset($_GET['ideditpro'])) {
        if ($imageproduct != '') {
            move_uploaded_file($_FILES['image']['tmp_name'], $imagetarget);
            $sql = "UPDATE products SET product_name=:product_name, barcode=:barcode, qty=:qty, cost=:cost, price=:price, category_id=:category_id, create_by=:create_by, create_at=:create_at, supplier_id=:supplier_id, buy_date=:buy_date, expire_date=:expire_date, image=:image WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":product_name", $_POST['name'], PDO::PARAM_STR);
            $stmt->bindParam(":barcode", $_POST['barcode'], PDO::PARAM_STR);
            $stmt->bindParam(":category_id", $_POST['category'], PDO::PARAM_INT);
            $stmt->bindParam(":create_by", $create_by, PDO::PARAM_INT);
            $stmt->bindParam(":id", $_GET['ideditpro'], PDO::PARAM_INT);
            $stmt->bindParam(":supplier_id", $_POST['supplier'], PDO::PARAM_INT);
            $stmt->bindParam(":qty", $_POST['store'], PDO::PARAM_INT);
            $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
            $stmt->bindParam(":price", $_POST['price'], PDO::PARAM_STR);
            $stmt->bindParam(":cost", $_POST['cost'], PDO::PARAM_STR);
            $stmt->bindParam(":buy_date", $_POST['buydate'], PDO::PARAM_STR);
            $stmt->bindParam(":expire_date", $_POST['expire'], PDO::PARAM_STR);
            $stmt->bindParam(":image", $imageproduct, PDO::PARAM_STR);

            $stmt->execute();
            header('location: productlist.php');
            exit();
        } else {

            $sql = "UPDATE products SET product_name=:product_name, barcode=:barcode, qty=:qty, cost=:cost, price=:price, category_id=:category_id, create_by=:create_by, create_at=:create_at, supplier_id=:supplier_id, buy_date=:buy_date, expire_date=:expire_date WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":product_name", $_POST['name'], PDO::PARAM_STR);
            $stmt->bindParam(":barcode", $_POST['barcode'], PDO::PARAM_STR);
            $stmt->bindParam(":category_id", $_POST['category'], PDO::PARAM_INT);
            $stmt->bindParam(":create_by", $create_by, PDO::PARAM_INT);
            $stmt->bindParam(":id", $_GET['ideditpro'], PDO::PARAM_INT);
            $stmt->bindParam(":supplier_id", $_POST['supplier'], PDO::PARAM_INT);
            $stmt->bindParam(":qty", $_POST['store'], PDO::PARAM_INT);
            $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
            $stmt->bindParam(":price", $_POST['price'], PDO::PARAM_STR);
            $stmt->bindParam(":cost", $_POST['cost'], PDO::PARAM_STR);
            $stmt->bindParam(":buy_date", $_POST['buydate'], PDO::PARAM_STR);
            $stmt->bindParam(":expire_date", $_POST['expire'], PDO::PARAM_STR);
            // $stmt->bindParam(":image", $imageproduct, PDO::PARAM_STR);

            $stmt->execute();
            header('location: productlist.php');
            exit();
        }
    } else {

        move_uploaded_file($_FILES['image']['tmp_name'], $imagetarget);
        $sql = "INSERT INTO products(product_name, barcode, qty, cost, price, category_id, create_by, create_at, supplier_id, buy_date, expire_date, image)
            VALUES(:product_name, :barcode, :qty, :cost, :price, :category_id, :create_by, :create_at, :supplier_id, :buy_date, :expire_date, :image)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":product_name", $_POST['name'], PDO::PARAM_STR);
        $stmt->bindParam(":barcode", $_POST['barcode'], PDO::PARAM_STR);
        $stmt->bindParam(":category_id", $_POST['category'], PDO::PARAM_INT);
        $stmt->bindParam(":create_by", $create_by, PDO::PARAM_INT);
        $stmt->bindParam(":supplier_id", $_POST['supplier'], PDO::PARAM_INT);
        $stmt->bindParam(":qty", $_POST['store'], PDO::PARAM_INT);
        $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
        $stmt->bindParam(":price", $_POST['price'], PDO::PARAM_STR);
        $stmt->bindParam(":cost", $_POST['cost'], PDO::PARAM_STR);
        $stmt->bindParam(":buy_date", $_POST['buydate'], PDO::PARAM_STR);
        $stmt->bindParam(":expire_date", $_POST['expire'], PDO::PARAM_STR);
        $stmt->bindParam(":image", $imageproduct, PDO::PARAM_STR);

        $stmt->execute();
        header('location: productlist.php');
        exit();
    }
}

$sql = "SELECT * FROM category";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categoryList = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM supplier";
$stmt = $conn->prepare($sql);
$stmt->execute();
$supplierList = $stmt->fetchAll(PDO::FETCH_ASSOC);
$statusadd = 'add';
$sql = "SELECT * FROM orderdetails WHERE status like '%$statusadd%' AND employee like '$create_by'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$orderdetails = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT invoice_details.id, invoice_details.qty, invoice_details.price,invoice_details.productId, products.product_name,products.barcode FROM invoice_details
JOIN products ON invoice_details.productId = products.id
 WHERE status like '%$statusadd%'  AND employeeId like '$create_by' and status not like '$check' ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$invoice_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
$statusActive = 'active';
$sql = "SELECT * FROM mycustomer";
$stmt = $conn->prepare($sql);
$stmt->execute();
$mycustomerlist = $stmt->fetchAll(PDO::FETCH_ASSOC);
$mycustomer = $stmt->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['addcustomer'])) {
    // echo "<script> alert(1)</script>";
    if (!$mycustomer) {
        $sql = "INSERT INTO mycustomer(firstname, lastname, gender, dob, tel, email, address, status, create_at, create_by)
        VALUES(:firstname, :lastname, :gender, :dob, :tel, :email, :address, :status, :create_at, :create_by)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":firstname", $_POST['firstname'], PDO::PARAM_STR);
        $stmt->bindParam(":lastname", $_POST['lastname'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
        $stmt->bindParam(":gender", $_POST['gender'], PDO::PARAM_STR);
        $stmt->bindParam(":tel", $_POST['phone'], PDO::PARAM_STR);
        $stmt->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
        $stmt->bindParam(":status", $statusActive, PDO::PARAM_STR);
        $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
        $stmt->bindParam(":create_by", $create_by, PDO::PARAM_INT);
        $stmt->bindParam(":dob", $_POST['dob'], PDO::PARAM_STR);

        $stmt->execute();
    } else {
        $loged = '<div class="alert alert-warning" role="alert">
    Your email has already! please try another.
</div>';
    }
}
$pleaseinsert = '';
if (isset($_POST['btninvoice'])) {

    $p = 'p';
    if (empty($_POST['idproduct']) || $_POST['gender'] == 0) {
        $pleaseinsert = '<div class="alert alert-warning" role="alert">
        Please Select Product or Supplier.
    </div>';
    } else {
        $sql = "SELECT * FROM mycustomer WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $_POST['gender'], PDO::PARAM_INT);
        $stmt->execute();
        $customerId = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($customerId) {
            $_SESSION['customerId'] = $customerId;
            header("location: createPos.php");
            exit();
        }
    }
}


if (isset($_POST['btninvoicefinal'])) {

    $p = 'p';
    if (empty($_POST['idproduct']) || $_POST['gender'] == 0) {
        $pleaseinsert = '<div class="alert alert-warning" role="alert">
        Please Select Product or Supplier.
    </div>';
    } else {

        $sql = "INSERT INTO customer(customer_name, create_at) VALUES(:customer_name, :create_at)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":customer_name", $p, PDO::PARAM_STR);
        $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
        $stmt->execute();
        $sql = "SELECT MAX(id) AS max_id FROM customer";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $max_id = $stmt->fetch(PDO::FETCH_ASSOC);
        $maxID = $max_id['max_id'];
        // 

        $count = $_POST['idproduct'];
        $countthis = count($count);
        for ($i = 0; $i < $countthis; $i++) {
            $id = $_POST['idproduct'][$i];
            $sql = "SELECT * FROM invoice_details WHERE id = :id AND status LIKE :statusadd";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":statusadd", $statusadd, PDO::PARAM_STR);
            $stmt->execute();
            $checkorder = $stmt->fetch(PDO::FETCH_ASSOC);
            $totalamount = $checkorder['price'] * $checkorder['qty'];

            $sql2 = "UPDATE invoice_details SET status = :status WHERE id = :id";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bindParam(":status", $check, PDO::PARAM_STR);
            $stmt2->bindParam(":id", $checkorder['id'], PDO::PARAM_INT);
            $stmt2->execute();

            $sql1 = "INSERT INTO `order` (customer_id, employee_id, order_id, total_amount, create_at)
                 VALUES (:customer_id, :employee_id, :order_id, :totalamount, :create_at)";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->bindParam(":customer_id", $maxID, PDO::PARAM_INT);
            $stmt1->bindParam(":employee_id", $create_by, PDO::PARAM_INT);
            $stmt1->bindParam(":order_id", $checkorder['id'], PDO::PARAM_INT);
            $stmt1->bindParam(":totalamount", $totalamount, PDO::PARAM_STR);
            $stmt1->bindParam(":create_at", $today, PDO::PARAM_STR);
            $stmt1->execute();
        }
        header("location: pos.php");
        exit();
    }
}

if (isset($_POST['addrowsub'])) {

    // $statusadd

    $sql = "SELECT * FROM invoice_details WHERE productId = :productId and status like '%$statusadd%' and employeeId=:emp ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":productId", $_GET['addp'], PDO::PARAM_INT);
    $stmt->bindParam(":emp", $create_by, PDO::PARAM_INT);

    $stmt->execute();
    $invoice_detail = $stmt->fetch(PDO::FETCH_ASSOC);
    $invoice_product_id = $invoice_detail['productId'];
    $sql = "SELECT * FROM products WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['myid'], PDO::PARAM_INT);
    $stmt->execute();
    $productqty = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($invoice_product_id) {
        // echo "<script> alert(1)</script>";
        $prodcutminus = $productqty['qty'] -= 1;
        print_r($productqty['qty']);
        $totalqty = $invoice_detail['qty'] += 1;
        $sql = "UPDATE products SET qty=:qty WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $prodcutminus, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_POST['myid'], PDO::PARAM_INT);
        $stmt->execute();
        $sql = "UPDATE invoice_details SET qty=:qty WHERE productId=:id and status like '%$statusadd%'";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $totalqty, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_POST['myid'], PDO::PARAM_INT);
        $stmt->execute();
        header('location: pos.php');
        exit();
    } else {
        $prodcutminus = $productqty['qty'] - 1;
        $qty = 1;
        $sql = "UPDATE products SET qty=:qty WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $prodcutminus, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_POST['myid'], PDO::PARAM_INT);
        $stmt->execute();
        $sql = "INSERT INTO invoice_details(productId, qty, price, status, employeeId)
                    VALUES(:productId, :qty, :price, :status, :employeeId)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":productId", $_POST['myid'], PDO::PARAM_INT);
        $stmt->bindParam(":qty", $qty, PDO::PARAM_INT);
        $stmt->bindParam(":employeeId", $create_by, PDO::PARAM_INT);
        $stmt->bindParam(":price", $_POST['price'], PDO::PARAM_STR);
        $stmt->bindParam(":status", $statusadd, PDO::PARAM_STR);
        $stmt->execute();
        header('location: pos.php');
        exit();
    }
}

// productlist
$sql = "SELECT products.barcode, products.product_name, `order`.create_at, `order`.total_amount, `order`.status, `order`.employee_id FROM `order`
JOIN invoice_details on order.order_id = invoice_details.id
JOIN products on invoice_details.productId=products.id WHERE `order`.employee_id=:id 
";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $create_by, PDO::PARAM_INT);
$stmt->execute();
$productList = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM employee WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $create_by, PDO::PARAM_INT);
$stmt->execute();
$employeeId12 = $stmt->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['btnorder12'])) {
    $count = $_POST['productId'];
    $countthis1 = count($count);
    echo $countthis1;
    for ($i = 0; $i < $countthis1; $i++) {
    }
}
if (isset($_POST['btnorder'])) {
    $count = $_POST['productId'];
    $countthis1 = count($count);
    $customerId = $_SESSION['customerId']['id'];
    if ($_POST['inputTotal'] <= $_POST['inputValue']) {

        $count = $_POST['productId'];
        $countthis = count($count);
        $sql = "INSERT INTO payment_method(payment_method, create_at)
                    VALUES(:payment_method, :create_at)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":payment_method", $_POST['payment'], PDO::PARAM_STR);
        $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
        $stmt->execute();
        $sql = "SELECT MAX(id) AS max_id FROM payment_method";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $max_id = $stmt->fetch(PDO::FETCH_ASSOC);
        $maxID = $max_id['max_id'];


        for ($i = 0; $i < $countthis1; $i++) {
            $order_id = $_POST['productId'][$i];
            $totalAmount = $_POST['catchtotal'];
            $totalAmount1 = $_POST['inputValue'];

            $complete = "complete";
            $check = "check";
            $sql = "INSERT INTO `order` (customer_id, order_id, employee_id, payment_id, total_amount, create_at, paid_amount, status)
                    VALUES (:customer_id, :order_id, :employee_id, :payment_id, :total_amount, :create_at, :paid_amount, :status)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":customer_id", $customerId, PDO::PARAM_INT);
            $stmt->bindParam(":order_id", $order_id, PDO::PARAM_INT);
            $stmt->bindParam(":employee_id", $create_by, PDO::PARAM_INT);
            $stmt->bindParam(":payment_id", $maxID, PDO::PARAM_INT);
            $stmt->bindParam(":total_amount", $totalAmount, PDO::PARAM_STR);
            $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
            $stmt->bindParam(":paid_amount", $totalAmount1, PDO::PARAM_STR);
            $stmt->bindParam(":status", $complete, PDO::PARAM_STR);
            $stmt->execute();

            $sql = "UPDATE invoice_details SET status=:status WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $order_id, PDO::PARAM_INT);
            $stmt->bindParam(":status", $check, PDO::PARAM_STR);
            $stmt->execute();
        }

        header("location: product_list_complete.php");
        exit();
    } else {

        $count = $_POST['productId'];
        $countthis = count($count);
        $sql = "INSERT INTO payment_method(payment_method, create_at)
                    VALUES(:payment_method, :create_at)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":payment_method", $_POST['payment'], PDO::PARAM_STR);
        $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
        $stmt->execute();
        $sql = "SELECT MAX(id) AS max_id FROM payment_method";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $max_id = $stmt->fetch(PDO::FETCH_ASSOC);
        $maxID = $max_id['max_id'];


        for ($i = 0; $i < $countthis1; $i++) {
            $order_id = $_POST['productId'][$i];
            $totalAmount = $_POST['catchtotal'];
            $totalAmount1 = $_POST['inputValue'];

            $padding = "padding";
            $check = "check";
            $sql = "INSERT INTO `order` (customer_id, order_id, employee_id, payment_id, total_amount, create_at, paid_amount, status)
                    VALUES (:customer_id, :order_id, :employee_id, :payment_id, :total_amount, :create_at, :paid_amount, :status)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":customer_id", $customerId, PDO::PARAM_INT);
            $stmt->bindParam(":order_id", $order_id, PDO::PARAM_INT);
            $stmt->bindParam(":employee_id", $create_by, PDO::PARAM_INT);
            $stmt->bindParam(":payment_id", $maxID, PDO::PARAM_INT);
            $stmt->bindParam(":total_amount", $totalAmount, PDO::PARAM_STR);
            $stmt->bindParam(":create_at", $today, PDO::PARAM_STR);
            $stmt->bindParam(":paid_amount", $totalAmount1, PDO::PARAM_STR);
            $stmt->bindParam(":status", $padding, PDO::PARAM_STR);
            $stmt->execute();

            $sql = "UPDATE invoice_details SET status=:status WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $order_id, PDO::PARAM_INT);
            $stmt->bindParam(":status", $check, PDO::PARAM_STR);
            $stmt->execute();
        }

        header("location: product_list_padding.php");
        exit();
    }
}

$sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at
FROM invoice_details
JOIN `order` ON  invoice_details.id=`order`.order_id
JOIN payment_method ON `order`.payment_id = payment_method.id
JOIN mycustomer ON `order`.customer_id = mycustomer.id
WHERE `order`.`status` like 'padding' and `order`.employee_id=:create_by GROUP BY `order`.payment_id
";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":create_by", $create_by, PDO::PARAM_INT);
$stmt->execute();
$invoicepadding = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at
FROM invoice_details
JOIN `order` ON  invoice_details.id=`order`.order_id
JOIN payment_method ON `order`.payment_id = payment_method.id
JOIN mycustomer ON `order`.customer_id = mycustomer.id
WHERE `order`.`status` like 'complete' and `order`.employee_id=:create_by GROUP BY `order`.payment_id
";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":create_by", $create_by, PDO::PARAM_INT);
$stmt->execute();
$invoicepcomplete = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at
FROM invoice_details
JOIN `order` ON  invoice_details.id=`order`.order_id
JOIN payment_method ON `order`.payment_id = payment_method.id
JOIN mycustomer ON `order`.customer_id = mycustomer.id
";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":create_by", $create_by, PDO::PARAM_INT);
$stmt->execute();
$invoicepcomplete33 = $stmt->fetchAll(PDO::FETCH_ASSOC);


$sql = "SELECT MAX(id) AS max_id FROM payment_method";
$stmt = $conn->prepare($sql);
$stmt->execute();
$max_id1 = $stmt->fetch(PDO::FETCH_ASSOC);
$maxID1 = $max_id1['max_id'];
$sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at
FROM invoice_details
JOIN `order` ON  invoice_details.id=`order`.order_id
JOIN payment_method ON `order`.payment_id = payment_method.id
JOIN mycustomer ON `order`.customer_id = mycustomer.id
WHERE `order`.employee_id=:create_by GROUP BY `order`.payment_id
";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":create_by", $_GET['empdetails'], PDO::PARAM_INT);
$stmt->execute();
$invoicepcomplete131 = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['empdetails'])) {
    $sql = "SELECT * FROM employee WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET['empdetails'], PDO::PARAM_INT);
    $stmt->execute();
    $getempdetail = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at
FROM invoice_details
JOIN `order` ON  invoice_details.id=`order`.order_id
JOIN payment_method ON `order`.payment_id = payment_method.id
JOIN mycustomer ON `order`.customer_id = mycustomer.id
WHERE `order`.employee_id=:create_by GROUP BY `order`.payment_id
";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":create_by", $_GET['empdetails'], PDO::PARAM_INT);
    $stmt->execute();
    $invoicepcomplete13 = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT * FROM employee WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $create_by, PDO::PARAM_INT);
    $stmt->execute();
    $getempdetail = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at
FROM invoice_details
JOIN `order` ON  invoice_details.id=`order`.order_id
JOIN payment_method ON `order`.payment_id = payment_method.id
JOIN mycustomer ON `order`.customer_id = mycustomer.id
WHERE `order`.employee_id=:create_by GROUP BY `order`.payment_id
";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":create_by", $create_by, PDO::PARAM_INT);
    $stmt->execute();
    $invoicepcomplete13 = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


if (isset($_GET['paddingdetail'])) {
    $sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at,
    mycustomer.email,mycustomer.tel, `order`.payment_id
    FROM invoice_details
    JOIN `order` ON  invoice_details.id=`order`.order_id
    JOIN payment_method ON `order`.payment_id = payment_method.id
    JOIN mycustomer ON `order`.customer_id = mycustomer.id
     
    WHERE `order`.payment_id=:id order by `order`.payment_id
    
";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET['paddingdetail'], PDO::PARAM_INT);
    $stmt->execute();
    $paddingdetail = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT  products.barcode, products.product_name,products.image, `order`.create_at, `order`.total_amount,`order`.id, `order`.payment_id, `order`.status, `order`.employee_id,`invoice_details`.qty,`invoice_details`.price FROM `order`
    JOIN invoice_details on order.order_id = invoice_details.id
    JOIN products on invoice_details.productId=products.id WHERE `order`.employee_id=:id and `order`.payment_id=:idpay
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $create_by, PDO::PARAM_INT);
    $stmt->bindParam(":idpay", $_GET['paddingdetail'], PDO::PARAM_INT);
    $stmt->execute();
    $paylist = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_POST['orderback'])) {
    // echo "<script>alert(1)</script>";
    header("location: product_list_padding.php");
    exit();
}
if (isset($_POST['orderbackdetail'])) {
    // echo "<script>alert(1)</script>";
    header("location: list_purchas.php");
    exit();
}
if (isset($_POST['orderbackdetail1'])) {
    // echo "<script>alert(1)</script>";
    header("location: detailsbuyProduct.php");
    exit();
}
$invalidMoney = '';
if (isset($_POST['completeOrder'])) {
    if ($_POST['duemoney'] != $_POST['repaid']) {
        $invalidMoney = '<div class="alert text-light text-center alert-warning" role="alert">
        <h3> Please input valid money </h3>
    </div>';
    } else {
        $paycount = $_POST['payID'];
        $pay = count($paycount);
        $complete = 'complete';
        for ($i = 0; $i < $pay; $i++) {
            $paid = $_POST['payID'][$i];
            $sql = "SELECT * FROM `order` WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $paid, PDO::PARAM_INT);
            // $stmt->bindParam(":paid", $paid, PDO::PARAM_STR);
            $stmt->execute();
            $paid_amount = $stmt->fetch(PDO::FETCH_ASSOC);
            $paid_amountID = $paid_amount['id'];
            $paid_amount_money = $paid_amount['paid_amount'] + $_POST['repaid'];


            $sql = "UPDATE `order` SET paid_amount=:paid, status=:status WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $paid_amountID, PDO::PARAM_INT);
            $stmt->bindParam(":paid", $paid_amount_money, PDO::PARAM_STR);
            $stmt->bindParam(":status", $complete, PDO::PARAM_STR);

            $stmt->execute();
        }
        $sql = "UPDATE payment_method SET udate_at=:udate_at WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $_GET['paddingdetail'], PDO::PARAM_INT);
        $stmt->bindParam(":udate_at", $today, PDO::PARAM_STR);
        $stmt->execute();
        header("location: product_list_padding.php");
        exit();
    }
}

if (isset($_GET['pageProduct'])) {
    $sql = "SELECT products.image,products.buy_date,products.id,products.qty,products.price, products.product_name, category.category FROM `products`
JOIN category ON products.category_id = category.id WHERE products.id=:id ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET['pageProduct'], PDO::PARAM_INT);
    $stmt->execute();
    $listproduct12 = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($listproduct12);
}

if (isset($_GET['list_purchas'])) {
    $sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at,
    mycustomer.email,mycustomer.tel, `order`.payment_id
    FROM invoice_details
    JOIN `order` ON  invoice_details.id=`order`.order_id
    JOIN payment_method ON `order`.payment_id = payment_method.id
    JOIN mycustomer ON `order`.customer_id = mycustomer.id
     
    WHERE `order`.payment_id=:id order by `order`.payment_id
    
";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET['list_purchas'], PDO::PARAM_INT);
    $stmt->execute();
    $paddingdetail = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT  products.barcode, products.product_name,products.image, `order`.create_at, `order`.total_amount,`order`.id, `order`.payment_id, `order`.status, `order`.employee_id,`invoice_details`.qty,`invoice_details`.price FROM `order`
    JOIN invoice_details on order.order_id = invoice_details.id
    JOIN products on invoice_details.productId=products.id WHERE  `order`.payment_id=:idpay
    ";
    $stmt = $conn->prepare($sql);
    // $stmt->bindParam(":id", $create_by, PDO::PARAM_INT);
    $stmt->bindParam(":idpay", $_GET['list_purchas'], PDO::PARAM_INT);
    $stmt->execute();
    $paylist = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_POST['logout'])) {
    echo "<script>alert('logout');</script>";
    echo "<script>window.location = 'login.php';</script>";
    exit;
}

$sql = "SELECT  employee.id as myempID, city,employee_name,phone, image, userid, gender, email, position, salary, script, address FROM employee JOIN city ON employee.city_id = city.id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$contact = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['addcategory'])) {
    if (isset($_GET['idcategory'])) {
        $sql = "UPDATE category SET category=:category WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":category", $_POST['category'], PDO::PARAM_STR);
        $stmt->bindParam(":id", $_GET['idcategory'], PDO::PARAM_INT);
        $stmt->execute();
    } else {
        $sql = "INSERT INTO category(category) VALUES(:category)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":category", $_POST['category'], PDO::PARAM_STR);

        $stmt->execute();
    }
    header("location: categoryList.php");
    exit;
}
$sql = "SELECT * FROM category order by id desc";
$stmt = $conn->prepare($sql);
$stmt->execute();
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (isset($_GET['idcategory'])) {
    $sql = "SELECT * FROM category WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET['idcategory'], PDO::PARAM_INT);
    $stmt->execute();
    $idcategory = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_GET['addp'])) {

    // $statusadd

    $sql = "SELECT * FROM invoice_details WHERE productId = :productId and status like '%$statusadd%' and employeeId=:emp ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":productId", $_GET['addp'], PDO::PARAM_INT);
    $stmt->bindParam(":emp", $create_by, PDO::PARAM_INT);

    $stmt->execute();
    $invoice_detail = $stmt->fetch(PDO::FETCH_ASSOC);
    $invoice_product_id = $invoice_detail['productId'];
    $sql = "SELECT * FROM products WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET['addp'], PDO::PARAM_INT);
    $stmt->execute();
    $productqty = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($invoice_product_id) {
        // echo "<script> alert(1)</script>";
        $prodcutminus = $productqty['qty'] -= 1;
        print_r($productqty['qty']);
        $totalqty = $invoice_detail['qty'] += 1;
        $sql = "UPDATE products SET qty=:qty WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $prodcutminus, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_GET['addp'], PDO::PARAM_INT);
        $stmt->execute();
        $sql = "UPDATE invoice_details SET qty=:qty WHERE productId=:id and status like '%$statusadd%'";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $totalqty, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_GET['addp'], PDO::PARAM_INT);
        $stmt->execute();
        // header('location: pos.php');
        // exit();
        $message = " Update!";

        // Echo the JavaScript code to show the SweetAlert dialog

        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo '<script>
Swal.fire({
title: "Alert",
text: "' . $message . '",
icon: "info"
}).then(() => {
// Redirect after the alert is closed
window.location.href = "pos.php";
});
</script>';
    } else {
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $_GET['addp'], PDO::PARAM_INT);
        $stmt->execute();
        $productPrice = $stmt->fetch(PDO::FETCH_ASSOC);
        $productPrice1 = $productPrice['price'];
        $prodcutminus = $productqty['qty'] - 1;
        $qty = 1;
        $sql = "UPDATE products SET qty=:qty WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $prodcutminus, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_GET['addp'], PDO::PARAM_INT);
        $stmt->execute();
        $sql = "INSERT INTO invoice_details(productId, qty, price, status, employeeId)
                    VALUES(:productId, :qty, :price, :status, :employeeId)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":productId", $_GET['addp'], PDO::PARAM_INT);
        $stmt->bindParam(":qty", $qty, PDO::PARAM_INT);
        $stmt->bindParam(":employeeId", $create_by, PDO::PARAM_INT);
        $stmt->bindParam(":price", $productPrice1, PDO::PARAM_STR);
        $stmt->bindParam(":status", $statusadd, PDO::PARAM_STR);
        $stmt->execute();
        $message = "Add Successful!";

        // Echo the JavaScript code to show the SweetAlert dialog

        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo '<script>
Swal.fire({
title: "Alert",
text: "' . $message . '",
icon: "info"
}).then(() => {
// Redirect after the alert is closed
window.location.href = "pos.php";
});
</script>';
    }
}

if (isset($_POST['btnmessage'])) {
    $chat = "chat";
    $sql = "INSERT INTO contact(user_one, user_two, text, time, status)
                VALUES(:user_one, :user_two, :text, :time, :status)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":user_one", $create_by, PDO::PARAM_INT);
    $stmt->bindParam(":user_two", $_GET['contact'], PDO::PARAM_INT);
    $stmt->bindParam(":text", $_POST['message'], PDO::PARAM_STR);
    $stmt->bindParam(":time", $today, PDO::PARAM_STR);
    $stmt->bindParam(":status", $chat, PDO::PARAM_STR);
    $stmt->execute();
}

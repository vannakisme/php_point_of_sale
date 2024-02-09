<?php
include "connection.php";
session_start();
$create_by = $_SESSION['login']['id'];
print_r($_POST);
$qty = 1;
$statusAdd = 'add';


if (isset($_POST['qtys'])) {
    $sql = "SELECT * FROM invoice_details WHERE productId = :productId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":productId", $_POST['minus'], PDO::PARAM_INT);
    $stmt->execute();
    $invoice_detail = $stmt->fetch(PDO::FETCH_ASSOC);
    $invoice_product_id = $invoice_detail['productId'];
    if ($invoice_product_id) {
        $totalqty = $invoice_detail['qty'] += 1;
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $_POST['minus'], PDO::PARAM_INT);
        $stmt->execute();
        $productqty = $stmt->fetch(PDO::FETCH_ASSOC);
        $plusqty = $productqty['qty'] += 1;
        $sql = "UPDATE products SET qty=:qty WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $plusqty, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_POST['minus'], PDO::PARAM_INT);
        $stmt->execute();
        // echo "ID already exists." . $invoice_detail['productId'];
        $sql = "UPDATE invoice_details SET qty=:qty WHERE productId=:id and status like '%$statusAdd%'";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $_POST['qtys'], PDO::PARAM_INT);
        $stmt->bindParam(":id", $_POST['minus'], PDO::PARAM_INT);
        $stmt->execute();
    }
}
if (isset($_POST['plus'])) {
    $sql = "SELECT * FROM invoice_details WHERE productId = :productId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":productId", $_POST['plus'], PDO::PARAM_INT);
    $stmt->execute();
    $invoice_detail = $stmt->fetch(PDO::FETCH_ASSOC);
    $invoice_product_id = $invoice_detail['productId'];
    if ($invoice_product_id) {

        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $_POST['plus'], PDO::PARAM_INT);
        $stmt->execute();
        $productqty = $stmt->fetch(PDO::FETCH_ASSOC);
        $plusqty = $productqty['qty'] -= 1;
        $sql = "UPDATE products SET qty=:qty WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $plusqty, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_POST['plus'], PDO::PARAM_INT);
        $stmt->execute();

        $totalqty = $invoice_detail['qty'] += 1;
        // echo "ID already exists." . $invoice_detail['productId'];
        $sql = "UPDATE invoice_details SET qty=:qty WHERE productId=:id and status like '%$statusAdd%'";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $_POST['qtys'], PDO::PARAM_INT);
        $stmt->bindParam(":id", $_POST['plus'], PDO::PARAM_INT);
        $stmt->execute();
    }
}
if (isset($_POST['icondelete1'])) {
    $sql = "SELECT * FROM invoice_details WHERE productId = :productId ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":productId", $_POST['icondelete1'], PDO::PARAM_INT);
    $stmt->execute();
    $invoice_detail = $stmt->fetch(PDO::FETCH_ASSOC);
    $invoice_product_id = $invoice_detail['productId'];
    if ($invoice_product_id) {
        $totalqty = $invoice_detail['qty'] - $_POST['qty12'];
        // echo "ID already exists." . $invoice_detail['productId'];
        $sql = "UPDATE invoice_details SET qty=:qty WHERE productId=:id and status like '%$statusAdd%'";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":qty", $totalqty, PDO::PARAM_INT);
        $stmt->bindParam(":id", $_POST['icondelete1'], PDO::PARAM_INT);
        $stmt->execute();
    }
}

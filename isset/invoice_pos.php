<?php
include "connection.php";
session_start();
date_default_timezone_set('Asia/Phnom_Penh');
$today = date('Y-m-d H:i:s');
$create_by = $_SESSION['login']['id'];
$statusAdd = 'add';
$statuscheck = 'check';
// Retrieve the array of productId values from the AJAX request
$productIdArray = isset($_POST['productIdArray']) ? $_POST['productIdArray'] : [];

// Process the productIdArray
foreach ($productIdArray as $productId) {
    print_r($_POST);
    // $sql = "SELECT * FROM invoice_details WHERE productId=:id AND status like '%$statusAdd%' AND employeeId like '%$create_by%'";
    // $stmt = $conn->prepare($sql);
    // $stmt->bindParam(":id", $productId, PDO::PARAM_INT);
    // $stmt->execute();
    // $invoice_data = $stmt->fetch(PDO::FETCH_ASSOC);
    // $totalamount = $invoice_data['qty'] * $invoice_data['price'];
    // print_r($_POST);
    // $sql = "INSERT INTO invoices(customerId, employeeId,  totalqty, totalamount,  status, createAt)
    // VALUES(:customerId, :employeeId, :totalqty, :totalamount,:status, :createAt)
    // ";
    // $stmt = $conn->prepare($sql);
    // $stmt->bindParam(":customerId", $_POST['customer'], PDO::PARAM_INT);
    // $stmt->bindParam(":employeeId", $create_by, PDO::PARAM_INT);
    // $stmt->bindParam(":totalqty", $invoice_data['qty'], PDO::PARAM_INT);
    // $stmt->bindParam(":totalamount", $totalamount, PDO::PARAM_STR);
    // $stmt->bindParam(":status", $statusAdd, PDO::PARAM_STR);
    // $stmt->bindParam(":createAt", $today, PDO::PARAM_STR);
    // $stmt->execute();
    // $sql = "SELECT invoices.id as voiceId, invoice_details.id as detailsId
    // FROM invoices
    // JOIN invoice_details ON invoices.employeeId = invoice_details.employeeId
    // WHERE invoice_details.`status` LIKE '%$statusAdd%' and invoices.employeeId like '%$create_by%'";

    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $invoice_data_this = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $sql = "UPDATE  invoice_details SET invoiceId=:invoicedId , status=:status WHERE id=:id";

    // $stmt = $conn->prepare($sql);
    // $stmt->bindParam(":invoiceId", $invoice_data_this['voiceId'], PDO::PARAM_INT);
    // $stmt->bindParam(":status", $statuscheck, PDO::PARAM_STR);
    // $stmt->bindParam(":id", $invoice_data_this['detailsId'], PDO::PARAM_INT);
    // $stmt->execute();
}

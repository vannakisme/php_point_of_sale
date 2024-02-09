<?php
include "connection.php";
session_start();



if (isset($_POST['icondelete'])) {

    $sql = "SELECT * FROM invoice_details WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['icondelete'], PDO::PARAM_INT);
    $stmt->execute();
    $invoiceqty = $stmt->fetch(PDO::FETCH_ASSOC);

    $product_id = $invoiceqty['productId'];


    $sql = "SELECT * FROM products WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $product_id, PDO::PARAM_INT);
    $stmt->execute();
    $productqty = $stmt->fetch(PDO::FETCH_ASSOC);
    $plusqty = $productqty['qty'] + $invoiceqty['qty'];
    $sql = "UPDATE products SET qty=:qty WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":qty", $plusqty, PDO::PARAM_INT);
    $stmt->bindParam(":id", $product_id, PDO::PARAM_INT);
    $stmt->execute();



    $sql = "DELETE FROM invoice_details WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['icondelete'], PDO::PARAM_INT);
    $stmt->execute();
}

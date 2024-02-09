<?php
include "connection.php";
session_start();
$emp_id = $_SESSION['login']['id'];
if (isset($_POST['item_id'])) {
    $addrow = "add";
    $sql = "INSERT INTO orderdetails(status, employee) VALUES(:status, :employee)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":status", $addrow, PDO::PARAM_STR);
    $stmt->bindParam(":employee", $emp_id, PDO::PARAM_INT);
    $stmt->execute();
}

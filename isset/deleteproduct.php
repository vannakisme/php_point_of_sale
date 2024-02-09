<?php
include "connection.php";
$delete = $_POST['icondeletes'];
if (isset($_POST['icondeletes'])) {

    $sql = "DELETE FROM products WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $delete, PDO::PARAM_INT);
    $stmt->execute();
}

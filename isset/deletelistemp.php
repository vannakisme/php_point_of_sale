<?php
include "connection.php";

$icondelete = $_POST['icondeletes'];
if (isset($_POST['icondeletes'])) {
    $sql = "DELETE FROM employee WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['icondeletes'], PDO::PARAM_INT);
    $stmt->execute();
}

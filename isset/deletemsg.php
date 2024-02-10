<?php
include "connection.php";
if (isset($_POST['deletemsg'])) {
    $sql = "DELETE FROM contact WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['deletemsg'], PDO::PARAM_INT);
    $stmt->execute();
}

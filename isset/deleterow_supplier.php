<?php
include "connection.php";
if (isset($_POST['item_delete'])) {
    $sql = "DELETE FROM orderdetails WHERE id =:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['item_delete'], PDO::PARAM_INT);
    $stmt->execute();
}

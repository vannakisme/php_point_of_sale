<?php
include "connection.php";
$search = $_POST['search'];
$getempID = $_POST['getempID'];
print_r($search);
print_r($getempID);

$sql = "SELECT * FROM employee WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $getempID, PDO::PARAM_INT);
$stmt->execute();
$getempdetail = $stmt->fetch(PDO::FETCH_ASSOC);
$sql = "SELECT invoice_details.id AS invoicesID, `order`.id as orderID, payment_method.id as paymentID,mycustomer.id AS customerID, `order`.status, `order`.customer_id, `order`.employee_id, `order`.order_id, `order`.total_amount, `order`.paid_amount, `payment_method`.payment_method,payment_method.udate_at, mycustomer.firstname, mycustomer.lastname,payment_method.create_at
FROM invoice_details
JOIN `order` ON  invoice_details.id=`order`.order_id
JOIN payment_method ON `order`.payment_id = payment_method.id
JOIN mycustomer ON `order`.customer_id = mycustomer.id
WHERE `order`.employee_id=:create_by 
";
if (isset($_POST['search'])) {
    $sql .= " and payment_method.create_at like '%$search%' or `order`.status like '%$search%'";
}
$sql .= " GROUP BY `order`.payment_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":create_by", $getempID, PDO::PARAM_INT);
$stmt->execute();
$invoicepcomplete13 = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($invoicepcomplete13 as $Key => $val) { ?>
    <tr>
        <td class="align-middle"><?= $Key + 1 ?> </td>
        <td class="align-middle">VN-<?= $val['paymentID'] ?></td>
        <td class="align-middle"><?= $val['firstname'] . " " . $val['firstname'] ?></td>
        <td class="align-middle"><?= date("Y-m-d", strtotime($val['create_at'])); ?></td>
        <td class="align-middle"><?= $val['payment_method'] ?></td>
        <td class="align-middle"><?php if ($val['status'] == 'complete') {
                                        $totalcomp = $val['total_amount'];
                                        echo number_format($totalcomp, 2);
                                    } else {
                                        $totalpay = $val['total_amount'] - $val['paid_amount'];
                                        echo number_format($totalpay, 2);
                                    }
                                    ?></td>
        <td class="align-middle"><span class=" disabled  px-2 py-1 rounded
        <?php if ($val['status'] == 'complete') {
            echo 'bg-warning';
        } else {
            echo 'bg-danger';
        }
        ?>
        
        "><?= $val['status'] ?></span></td>
        <td class="align-middle"><a href="#"><button class="btn btn-primary">Detail</button></a></td>
    </tr>

<?php  }

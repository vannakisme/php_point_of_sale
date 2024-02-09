<?php
include "connection.php";
session_start();
$create_by = $_SESSION['login']['id'];
$search = $_POST['search'];
// $row  = $_POST['selectedValue'];
$sql = "SELECT * FROM `employee` WHERE id=:id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $create_by, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$rowlist = $row['row'];
$sql = "SELECT employee.id, employee.salary, employee.employee_name, employee.userid, employee.gender, employee.dob, employee.city_id, employee.phone,
employee.address, employee.image, employee.email, employee.`password`, employee.position, city.city
FROM employee
JOIN city ON employee.city_id = city.id ";
if (isset($_POST['search'])) {
    $sql .= " WHERE employee_name like '%$search%' OR userid like '%$search%'";
}
$sql .= " LIMIT $rowlist";
$stmt = $conn->prepare($sql);
$stmt->execute();
$listemp = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($listemp) { ?>
    <?php foreach ($listemp as $key => $val) { ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td>
                <div class="listimage">
                    <img src="image/<?= $val['image'] ?>" alt="">
                </div>
            </td>
            <td class="align-middle"><?= $val['employee_name'] ?></td>
            <td class="align-middle"><?= $val['email'] ?></td>
            <td class="align-middle"><?= $val['phone'] ?></td>
            <td class="align-middle"><?= $val['salary'] ?></td>
            <td class="align-middle"><?= $val['city'] ?></td>
            <td class="align-middle"><i data-listdelete="<?php echo $val['id'] ?>" class="fa-solid fa-trash pointer icondelete"></i>
                <a href="addemployeephp.php?idedit=<?php echo $val['id'] ?>"><i class="fa-solid fa-pencil"></i></a>
                <a href="employee_details.php?empdetails=<?= $val['id'] ?>"><i class="fa-solid fa-file-signature iconhover text-dark p-1"></i></a>
            </td>
        </tr>
    <?php } ?>
<?php
} else {
    echo "Data not found!";
}

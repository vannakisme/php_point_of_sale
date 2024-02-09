<?php
include "connection.php";
session_start();
$row  = $_POST['selectedValue'];
$create_by = $_SESSION['login']['id'];

if (isset($_POST['selectedValue'])) {
    $rowid = 1;
    $sql1 = "UPDATE employee SET row=:row WHERE id=:id";
    $stmt = $conn->prepare($sql1);
    $stmt->bindParam(":row", $row, PDO::PARAM_INT);
    $stmt->bindParam(":id", $create_by, PDO::PARAM_INT);
    $stmt->execute();
    $sql = "SELECT employee.id, employee.salary, employee.employee_name, employee.userid, employee.gender, employee.dob, employee.city_id, employee.phone,
    employee.address, employee.image, employee.email, employee.`password`, employee.position, city.city
    FROM employee
    JOIN city ON employee.city_id = city.id LIMIT $row ";
}
$stmt = $conn->prepare($sql);
$stmt->execute();
$listemp = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($listemp as $key => $val) { ?>
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
        </td>
    </tr>
<?php } ?>
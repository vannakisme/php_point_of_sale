<?php
include "connection.php";
include "script.php";
if (isset($_POST['icondeletes'])) {

    $sql = "DELETE FROM category WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['icondeletes'], PDO::PARAM_INT);
    $stmt->execute();
}
$sql1 = "SELECT * FROM category ";
$search = $_POST['search'];
if (isset($_POST['search'])) {
    $sql1 .= " WHERE category like '%$search%'";
}
$stmt = $conn->prepare($sql1);
$stmt->execute();
$category1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($category1 as $key => $val) { ?>
    <tr>
        <td><?= $key + 1 ?></td>

        <td class="align-middle "><?= $val['category'] ?></td>

        <td class="align-middle text-center">
            <i data-categorydelete="<?php echo $val['id'] ?>" data-toggle="modal" data-target="#modal-default" class="fa-solid fa-trash p-1 pointer iconhover icondelete"></i>
            <a href="addcategory.php?idcategory=<?php echo $val['id'] ?>"><i class="fa-solid p-1 iconhover fa-pencil"></i></a>
        </td>
    </tr>
<?php } ?>
<?php
include "connection.php";
session_start();
$sql = "SELECT products.image, products.id, products.qty, products.price, products.product_name, category.category FROM `products`
JOIN category ON products.category_id = category.id  ";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql .= " WHERE products.product_name like '%$search%' ";
}

$stmt = $conn->prepare($sql);
$stmt->execute();
$listproduct1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($listproduct1 as $key => $val) { ?>
    <form class="add-row-form" method="POST">
        <tr>
            <td class="align-middle "><?= $key + 1 ?></td>
            <td>
                <div class="listimage">
                    <img src="productimage/<?= $val['image'] ?>" alt="">
                </div>
            </td>
            <td class="align-middle product_name"><?= $val['product_name'] ?></td>
            <td class="align-middle pro_price"><?= $val['price'] ?></td>

            <td class="align-middle text-center">
                <?php if (!$val['qty'] == 0) { ?>
                    <button class="border-0 add-row-btn" style="background: none;" type="button">
                        <i class="fa-solid fa-square-plus p-1 pointer iconhover iconpos"></i>
                    </button>
                <?php } else {
                    echo "no qty";
                } ?>
            </td>
            <td>
                <input type="hidden" name="price" value="<?= $val['price'] ?>">
                <input type="hidden" name="myid" value="<?= $val['id'] ?>">
                <input type="hidden" name="qty" value="<?= $val['qty'] ?>">
            </td>
            <td><button class="btn btn-primary" type="submit" name="lsjf">Hello</button></td>
        </tr>
    </form>
<?php } ?>
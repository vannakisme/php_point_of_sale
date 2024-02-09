<?php
include "connection.php";

$search = $_POST['search'];

$sql = "SELECT products.id, products.product_name, category.category FROM `products`
JOIN category ON products.category_id = category.id ";
if (isset($_POST['search'])) {
    $sql .= " WHERE product_name like '%$search%' OR barcode like '%$search%'";
}
$stmt = $conn->prepare($sql);
$stmt->execute();
$listproduct = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($listproduct) { ?>
    <?php foreach ($listproduct as $key => $val) { ?>
        <tr>
            <td><?= $key + 1 ?></td>

            <td class="align-middle text-center"><?= $val['product_name'] ?></td>
            <td class="align-middle text-center"><?= $val['category'] ?></td>
            <td class="align-middle text-center"><i data-productdelete="<?php echo $val['id'] ?>" class="fa-solid fa-trash pointer icondelete"></i>
                <a href="addemployeephp.php?idedit=<?php echo $val['id'] ?>"><i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
    <?php } ?>
<?php
} else {
    echo "<tr>
    <td colspan='4' class='text-center'>
    Data not found!!
    </td>
    </tr>
    ";
}
?>
<script>
    $(document).ready(function() {
        $(".icondelete").click(function() {
            var icondelete = $(this).data('productdelete');
            var $deleteIcon = $(this); // Store the reference to $(this)

            console.log(icondelete);
            $.ajax({
                method: 'post',
                url: 'isset/deleteproduct.php',
                data: {
                    icondeletes: icondelete
                },
                success: function(response) {
                    $(".show").html(response);
                    $deleteIcon.closest('tr').remove(); // Use the stored reference
                }
            });
        });
    });
</script>
<?php
include_once "connection.php";

if (isset($_POST['search'])) {
    // print_r($_POST); 
    $search = $_POST['search'];
    $sql = "SELECT * FROM supplier WHERE supplier_name like '%$search%' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $search_supplier = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($search_supplier as $key) { ?>
        <tr>
            <td class="supp"><?php echo $key['supplier_name'] ?></td>
        </tr>
<?php }

    echo 'Supplier not found!';

    // print_r($search_supplier);

}
?>
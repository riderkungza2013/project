<?php

$type_id = $_GET['type_id'];
// echo $type_id;
// exit();


$query_product_type = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
WHERE p.type_id = $type_id
ORDER BY p_id ASC";
$result_pro = mysqli_query($con, $query_product_type) or die("Error in query: $query_product_type " . mysqli_error());
// echo ($query_product_type);
// exit()


?>
<div class="row">

    <?php foreach ($result_pro as $row_pro) { ?>
        <div class="card border-danger mb-2" style="width: 12rem; margin-top: 5px;">
            <img class="card-img-top" src="backend/p_img/<?php echo $row_pro['p_img']; ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row_pro['p_name']; ?></h5>
                <p class="card-text">
                    ประเภท: <?php echo $row_pro['type_name']; ?>
                </p>
                <a href="#" class="btn btn-primary"> รายละเอียด</a>
            </div>
        </div>
        &nbsp

    <?php } ?>




</div>
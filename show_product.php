
<?php

$query_product = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id

ORDER BY p_id ASC";
$result_pro = mysqli_query($con, $query_product) or die("Error in query: $query_product " . mysqli_error());
// echo($query_product);
// exit()

?>

<div class="row">

<?php foreach ($result_pro as $row_pro) { ?>
 <div class="card border-danger mb-3" style="width: 18rem; margin-top: 5px;">
 
 <img class="card-img-top" style=" height: 18rem; " src="backend/p_img/<?php echo $row_pro['p_img']; ?>" alt="Card image cap ">


 <div class="card-body">
     <h5 class="card-title"><?php echo $row_pro['p_name']; ?></h5>
     
     <p class="card-text">
    ประเภท:  <?php echo $row_pro['type_name']; ?>
     </p>
    
     <a href="#" class="btn btn-primary"> รายละเอียด</a>
     
 </div>
</div>
&nbsp

<?php } ?>

   
    

</div>
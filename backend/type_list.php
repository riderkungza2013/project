<?php
include('h.php');
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM tbl_type ORDER BY type_id ASC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
$row_am = mysqli_fetch_assoc($result);
?>

<script>
  $(document).ready(function() {
    $('#example1').DataTable({
      "aaSorting": [
        [2, 'ASC']
      ],
      //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
    });
  });
</script>




<table border="2" class="display table table-bordered" id="example1" align="center">
  <thead>
    <tr class="btn-secondary">
    <td>ID</td>
    <td>ประเภท</td>
    <td>แก้ไข</td>
    <td>ลบ</td>
    </tr>
  </thead>
  <?php do { ?>
    
    <tr>
    <td><?php echo $row_am['type_id']; ?></td>
    <!-- echo "<td>" .$row["type_id"] . "</td> "; -->
    <td><?php echo $row_am['type_name']; ?></td>
    <!-- echo "<td>" .$row["type_name"] . "</td> "; -->
    
    <td><a href="type.php?act=edit&ID=<?php echo $row_am['type_id']; ?>" class="btn btn-warning btn-sm"> แก้ไข </a> </td>
   
    <td><a href="type_form_delete_db.php?ID=<?php echo $row_am['type_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณต้แงการยันยันการลบหรือไม่?')">ลบ</a> </td>
    <!-- echo "<td><a href='type_form_delete_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้ หรือไม่? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> "; -->
    </tr>

  <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>

</table>
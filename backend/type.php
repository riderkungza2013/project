<!DOCTYPE html>
<html>

<head>
    <?php include('h.php');
    error_reporting(error_reporting() & ~E_WARNING);
    ?>
    <head>

    <body>
        <!-- ส่วนของ navber -->
        <div class="container">
            <?php include('navbar.php'); ?>
            <p></p>
            <div class="row">
                <div class="col-md-3">
                <i class='fas fa-cloud-sun' style='font-size:30px;color:orange'></i>
                สวัสดี คุณ <?php echo $a_name; ?>
                    <!-- Left side column. contains the logo and sidebar -->
                    <?php include('menu_left.php'); ?>
                </div>

                <div class="col-md-6">
                    <a href="type.php?act=add" class="btn-info btn-sm"> เพิ่ม </a>
                    <p></p>

                    <?php
                    //สร้างตัวเเปร Act รับค่า Get
                    $act = $_GET['act'];
                    //if ถ้า = add ให้ include หน้า add_product
                    if ($act == 'add') {
                        include('type_form_add.php');
                        //ถ้าเเก้ไขให้ไป เเก้ไข
                    } elseif ($act == 'edit') {
                        include('type_form_edit.php');
                        //ถ้าไม่มีการกระทำให้กลับไปหน้า หลัก
                    } else {
                        include('type_list.php');
                    }
                    ?>
                </div>

            </div>
        </div>
    </body>

</html>
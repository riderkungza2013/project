<!DOCTYPE html>
<html>
<head>
  <?php include('h.php'); ?>

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
          <!-- Content Wrapper. Contains page content -->
        </div>
      </div>
    </div>
  </body>

</html>
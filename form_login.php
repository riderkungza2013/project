<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>
<div class="container text-light bg-dar" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5" style="background-color:#708090">
      <h3 align="center" >
      <span class="glyphicon glyphicon-lock "> </span>
      ร้านขายยาวุฒิ เภสัช </h3>
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="a_user" class="form-control" required placeholder="ชื่อผู้ใช้" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="a_pass" class="form-control" required placeholder="รหัสผ่าน" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
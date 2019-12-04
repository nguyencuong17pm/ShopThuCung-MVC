<?php
  $hoten = $_SESSION["nguoidung"]["hoten"];
  $hinhanh=$_SESSION["nguoidung"]["anhdaidien"];
?>
<div class="dropdown" style="text-align: right;">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span><img  width="30px" height="30px"  class="img-circle" src="../<?php if(isset($_SESSION["nguoidung"])) echo $hinhanh; ?>"/></span> Chào 
    <?php if(isset($_SESSION["nguoidung"])) echo $hoten; ?>
    <span class="caret"></span>
  </a>
    
  <ul class="dropdown-menu dropdown-menu-right">
    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Thông báo</a></li>
    <li><a href="#" data-toggle="modal" data-target="#fcapnhatthongtin"><span class="glyphicon glyphicon-edit"></span> Hồ sơ cá nhân</a></li>
    <li><a href="#" data-toggle="modal" data-target="#fdoimatkhau"><span class="glyphicon glyphicon-wrench"></span> Đổi mật khẩu</a></li>
    <li class="divider"></li>
    <li><a href="../ktnguoidung/index.php?action=dangxuat"><span class="glyphicon glyphicon-log-out"></span> Thoát</a></li>
  </ul>
</div>

<!-- Form cập nhật thông tin ng dùng-->
  <div class="modal fade" id="fcapnhatthongtin" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Hồ sơ cá nhân</h3>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            <div class="text-center">
              <img class="img-circle" src="../<?php if(isset($_SESSION["nguoidung"])) echo $hinhanh; ?>" alt="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>" width="100px">
            </div>
            <input type="hidden" name="txtmand" value="<?php echo $_SESSION["nguoidung"]["mand"]; ?>">
            <div class="form-group">    
            <label>Email</label>    
            <input class="form-control" type="email" name="txtemail" placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>" required>
            </div>            
            <div class="form-group">
            <label>Họ tên</label>
            <input class="form-control"  type="text" name="txthoten" placeholder="Họ tên" value="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>" required></div>
            <div class="form-group">
              <label>Đổi hình đại diện</label>
              <input type="file" name="fhinh">
            </div>
            <div class="form-group">
            <input type="hidden" name="action" value="capnhat" >
            <input class="btn btn-primary"  type="submit" value="Lưu">
            <input class="btn btn-warning"  type="reset" value="Hủy"></div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
<!-- Form đổi mật khẩu -->
  <div class="modal fade" id="fdoimatkhau" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Đổi mật khẩu</h3>
        </div>
        <div class="modal-body">

          <form method="post" name="f">
            <input type="hidden" name="txtemail" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>">
            <div class="form-group">  
            <label>Mật khẩu mới</label>      
            <input class="form-control" type="password" name="txtmatkhaumoi" placeholder="Mật khẩu mới" required>
            </div>
            
            <div class="form-group">
            <input type="hidden" name="action" value="doimatkhau" >
            <input class="btn btn-primary"  type="submit" value="Lưu">
            <input class="btn btn-warning"  type="reset" value="Hủy"></div>
          </form>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>

    </div>
  </div>
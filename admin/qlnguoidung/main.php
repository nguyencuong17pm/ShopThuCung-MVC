<?php
//  $hoten = $_SESSION["nguoidung"]["hoten"];
?>

<?php include("../view/top.php"); ?>
<div>
  <h2>Quản lý người dùng</h2>
  <!-- Thông báo lỗi nếu có -->
  <?php
  if(isset($tb)){
  ?>
  <div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Lỗi!</strong> <?php echo $tb; ?>
  </div>
  <?php
  }
  ?>
  <!-- Nút mở hộp modal chứa form thêm mới -->
  <div><a class="btn btn-primary" data-toggle="modal" data-target="#fthemnguoidung"><span class="glyphicon glyphicon-plus"></span> Thêm người dùng</a></div>

  <br>

  <!-- Danh sách người dùng -->
  <table class="table table-hover">
        <tr><th>Email</th><th>Tên</th><th>Hình ảnh</th><th>Phân quyền</th><th>Trạng thái</th><th>Khóa</th><?php
            if($_SESSION["nguoidung"]["loaind"]==0){?><th style="text-align:center">Nâng quyền</th><?php } ?></tr>
      <?php foreach ($nguoidung as $nd): ?>
        <tr><td><?php echo $nd["email"]; ?></td>
        	<td><?php echo $nd["hoten"]; ?></td>
          <td><img width="50px" height="50px" src="../<?php echo $nd["anhdaidien"]; ?>"></td>
        	<td><?php if($nd["loaind"]==1) echo "Quản trị"; elseif($nd["loaind"]==2) echo "Nhân viên"; else echo "Admin"  ?></td>
          <td><?php if($nd["loaind"]!=0) {if($nd["trangthai"]==1) echo "Kích hoạt"; else echo "Khóa" ; }?></td>
          <td>
          <?php 
          if($_SESSION["nguoidung"]["loaind"]==0||$nd["loaind"]!=1&&$nd["loaind"]!=0) {
            if($nd["trangthai"]==1){ ?>
              <a href="?action=khoa&trangthai=0&mand=<?php echo $nd["mand"]; ?>">Khóa</a></td>
            <?php 
            }
            elseif($nd["trangthai"]==0) { ?>
              <a href="?action=khoa&trangthai=1&mand=<?php echo $nd["mand"]; ?>">Kích hoạt</a></td>
          <?php 
            }
            else{?>
              </td>
            <?php
            }
          }?>
          <td style="text-align:center">
            <?php
            if($_SESSION["nguoidung"]["loaind"]==0)
              if($nd["loaind"]==2) {
             ?>
              <a href="?action=nangcap&loaind=1&mand=<?php echo $nd["mand"]; ?>"><span class="glyphicon glyphicon-chevron-up"></span></a></td></tr>
            <?php 
              }
              elseif($nd["loaind"]==1){?>
                <a href="?action=nangcap&loaind=2&mand=<?php echo $nd["mand"]; ?>"><span class="glyphicon glyphicon-chevron-down"></span></a></td></tr>
                <?php 
                  }
                ?>
      <?php  endforeach; ?>
  </table>


  <!-- Hộp modal chứa form thêm mới -->
  <div class="modal fade" id="fthemnguoidung" role="dialog">
    <div class="modal-dialog">    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm người dùng</h4>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">        
            <input class="form-control" type="email" name="txtemail" placeholder="Email" required>
            </div>
            <div class="form-group"><input class="form-control"  type="text" name="txtmatkhau" placeholder="Mật khẩu" required></div>
            <div class="form-group">
            <input class="form-control"  type="text" name="txthoten" placeholder="Họ tên" required></div>
            <div class="form-group">
            <label>Chọn quyền</label>
            <select class="form-control" name="optloaind">
                
                <option value="1">Quản trị</option>
                <option value="2" selected>Thành viên</option>
            </select></div>
            <div class="form-group">
              <label>Hình đại diện</label>
              <input type="file" name="fhinh">
            </div>
            <div class="form-group">
            <input type="hidden" name="action" value="them" >
            <input class="btn btn-primary"  type="submit" value="Thêm">
            <input class="btn btn-warning"  type="reset" value="Hủy"></div>
          </form>

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
      
    </div>
  </div>

</div>
<?php include("../view/bottom.php"); ?>

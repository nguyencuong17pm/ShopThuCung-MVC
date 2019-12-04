<?php
//  $hoten = $_SESSION["nguoidung"]["hoten"];
?>

<?php include("../view/top.php"); ?>
<div>
  <h2>Quản đơn hàng</h2>
  <!-- Thông báo lỗi nếu có -->
  <!-- Nút mở hộp modal chứa form thêm mới -->

  <!-- Danh sách người dùng -->
  <table class="table table-hover">
        <tr><th>Mã số</th><th>Khách hàng</th><th>Số điện thoại</th><th>Tổng tiền<th style="text-align:center;">Trạng thái</th></tr>
      <?php foreach ($dsdonhang as $ds): ?>
        <tr><td><?php echo $ds["madh"]; ?></td>
        	<td><?php echo $ds["hoten"]; ?></td>
          <td><?php echo $ds["dienthoai"]; ?></td>
          <td><?php echo number_format($ds["tongtien"]) . " đ"; ?></td>
          <td style="text-align:center;">
            <?php
              if($ds["trangthai"]==0) { ?>
                <a href="?action=xacnhan&trangthai=1&madh=<?php echo $ds["madh"]; ?>"><i class="glyphicon glyphicon-ban-circle"></i></a></td></tr>
                <?php 
                  }else{
                ?>
                <a href="?action=xacnhan&trangthai=0&madh=<?php echo $ds["madh"]; ?>"><i class="glyphicon glyphicon-ok"></i></a></td></tr>
                <?php } ?>
      <?php endforeach; ?>
  </table>
</div>
<?php include("../view/bottom.php"); ?>
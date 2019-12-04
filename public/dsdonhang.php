<?php include("view/top.php"); ?>
<div class="container">    
  <div class="row" style="margin-top:50px;"> <!-- Hàng nổi bật -->
    <h3>Đơn hàng của bạn</h3>
    <form method="post">
    <input type="hidden" name="action" value="">
    <table class="table table-hover">
    <tr class="info">
    <th>Mã đơn hàng</th>
    <th>Khách hàng</th>
    <th>Tổng trị giá</th>
    <th>Tình trạng</th>
    </tr>
    <tr>
    <td><?php echo $dhcur["madh"]; ?></td>
    <td><?php echo $dhcur["hoten"]; ?></td>
    <td><?php echo number_format($dhcur["tongtien"]) . "đ"; ?></td>
    <td><?php if($dhcur["trangthai"]==0) echo "Chưa được xử lý" ?></td>
    </tr>
    <tr>
    <td colspan="2" align="left"><i>Để xóa một đơn hàng nhập số lượng = 0</i> | 
      <a href="">Xóa tất cả</a></td>
    <td colspan="2" align="right">
      <input class="btn btn-info" type="submit" value="Cập nhật">
    </td>
    </tr>
    </table>
    </form>
  </div>
  

</div>

<?php include("view/bottom.php"); ?>
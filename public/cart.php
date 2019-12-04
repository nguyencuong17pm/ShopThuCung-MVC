<?php include("view/top.php"); ?>
<div class="container">    
  <div class="row" style="margin-top:50px;"> <!-- Hàng nổi bật -->
    <h3>Giỏ hàng của bạn</h3>
    <?php 
    if(demhangtronggio() == 0):
        echo "<p>Không có sản phẩm nào trong giỏ hàng.</p>";
    else:
    ?>
    
    <form method="post">
    <input type="hidden" name="action" value="capnhatgiohang">
    <table class="table table-hover">
    <tr class="info">
    <th>Sản phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    </tr>
    <?php foreach($giohang as $mahang => $mh): ?>
    <tr>
    <td><?php echo $mh["tenhang"]; ?></td>
    <td><?php echo number_format($mh["giaban"]) . "đ"; ?></td>
    <td><input class="form-control" type="number" size="3" name="mh[<?php echo $mahang; ?>]" value="<?php echo $mh["soluong"]; ?>">

    </td>
    <td><?php echo number_format($mh["sotien"]) . "đ"; ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
    <td colspan="3" align="right"><b>Tổng tiền</b></td>
    <td><b><?php echo number_format(tinhtiengiohang()); ?>đ</b></td>
    </tr>
    <tr>
    <td colspan="2" align="left"><i>Để xóa một sản phẩm nhập số lượng = 0</i> | 
      <a href="?action=xoagiohang">Xóa tất cả</a></td>
    <td colspan="2" align="right">
      <input class="btn btn-info" type="submit" value="Cập nhật">
      <a class="btn btn-danger" data-toggle="modal" data-target="#ftthanhtoan" href="">Thanh toán</a>
    </td>
    </tr>
    </table>
    </form>
    <div class="modal fade" id="ftthanhtoan" role="dialog">
    <div class="modal-dialog" style="text-align:center;">    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thông tin thanh toán (COD)</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">        
            <input class="form-control" type="text" name="txthoten" placeholder="Họ tên" required>
            </div>
            <div class="form-group"><input class="form-control"  type="text" name="txtdiachi" placeholder="Địa chỉ" required></div>
            <div class="form-group">
            <input class="form-control"   type="text" name="txtsdt" placeholder="Số điện thoại" required></div>
            <input class="form-control"   type="text" name="txtemail" placeholder="Email" required></div>
            <div class="form-group">
            <div class="form-group">
            <input type="hidden" name="action" value="themdonhang" >
            <input class="btn btn-warning"  type="submit" value="Xác nhận">
            <input class="btn btn-warning"  type="reset" value="Hủy"></div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
      
    </div>
  </div>
    <?php endif; ?>


  </div>
  

</div>

<?php include("view/bottom.php"); ?>
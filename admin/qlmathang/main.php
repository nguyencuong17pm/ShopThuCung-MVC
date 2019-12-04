<?php include("../view/top.php"); ?>

<h3>Danh sách mặt hàng</h3> 
<div id="buttonthem">
   <a href="index.php?action=them" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Thêm mới</a>
   <br>&nbsp; 
</div>  
  <?php if (isset($tb)){ ?>
  <div class="alert alert-warning alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo "<p>$tb</p>"; ?>
  </div>
  <?php } ?> 
<br>
<table class="table table-hover">
      <tr><th>Tên hàng</th><th>Giá bán</th><th>Hình ảnh</th><th>Danh mục</th><th>Sửa</th><th>Xóa</th></tr>
      <?php 
      foreach ($mathang as $mh): 
      ?>
      <tr><td><?php echo $mh["tenhang"]; ?></td>
        <td ><?php echo number_format($mh["giaban"]) . " đ"; ?></td>
        <td><img width="50px" src="../../public/<?php echo $mh["hinhanh"]; ?>"></td>
        <td><?php echo $mh["tendm"]; ?></td>
        <td>
          <a href="?action=sua&mahang=<?php echo $mh["mahang"]; ?>">Sửa</a>  
        </td><td>
        <a href="?action=xoa&mahang=<?php echo $mh["mahang"]; ?>">Xóa</a></td></tr>
      <?php       
      endforeach; 
      ?>
</table>

<?php include("../view/bottom.php"); ?>

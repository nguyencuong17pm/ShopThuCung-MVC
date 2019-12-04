<?php include("view/top.php"); ?>
<br><br>
<div class="container">    
<div class="row">
<div class="col-sm-9">
<h3>Các sản phẩm <?php echo $tendm; ?></h3>
<?php
foreach($mathang as $mh):  
?>
<div class="col-sm-4" style="text-align:center; ">
  <div class="panel panel-info">
    <div class="panel-heading" style="height:50px;"><a href="?action=xemchitiet&mahang=<?php echo $mh["mahang"]; ?>">
    	<?php echo $mh["tenhang"]; ?></a></div>
    <div class="panel-body">    	
    	<a href="?action=xemchitiet&mahang=<?php echo $mh["mahang"]; ?>">
    	<img src="<?php echo $mh["hinhanh"]; ?>" class="img-responsive" style="width:100%; height:300px;"  alt="<?php echo $mh["tenhang"]; ?>"></a>
    	<div>Giá bán: <span  class="text-danger"><?php echo number_format($mh["giaban"]); ?>đ</span>  </div>
    	<div><a class="btn btn-info" href="?action=xemchitiet&mahang=<?php echo $mh["mahang"]; ?>">
    	Chi tiết</a> <a class="btn btn-danger" href="?action=chovaogio&txtmahang=<?php echo $mh["mahang"]; ?>&txtsoluong=1">Chọn mua</a>  </div>  
    </div>  
  </div>
</div>
<?php endforeach; ?>
</div>
<div class="col-sm-3">
    <h3>Đang cập nhật</h3>
</div>
</div>
</div>
<?php include("view/bottom.php"); ?>
<?php include("view/top.php"); ?>
<br><br>
<div class="container">    
  <div class="row">
    <div class="col-sm-9">      

<h3 class="text-primary"><?php echo $mh["tenhang"]; ?></h3>
<h4 class="text-primary">Giá bán: 
  <span class="text-danger"><?php echo number_format($mh["giaban"]); ?> đ</span>
</h4>
<div class="fakeimg" ><img style="width:500px;" src="<?php echo $mh["hinhanh"]; ?>"></div>
<div class="chitiet" style="width:500px; text-align:justify;"><p><?php echo $mh["mota"]; ?></p></div>
<div>
  <form class="form-inline" method="post">
    <input type="hidden" name="action" value="chovaogio">
    <input type="hidden" name="txtmahang" value="<?php echo $mh["mahang"]; ?>">
    <input type="number" class="form-control" name="txtsoluong" min="1" value="1" required>
    <input type="submit" class="btn btn-info" value="Chọn mua">
  </form>  
</div>
<br>

<h3>Sản phẩm cùng loại:</h3>
<?php
foreach($mathang as $m):  
	if($m["mahang"] != $mh["mahang"]){
?>
<div class="col-sm-4" style="text-align:center;">
  <div class="panel panel-info">
    <div class="panel-heading">
		<a href="?action=xemchitiet&mahang=<?php echo $m["mahang"]; ?>">
    	<?php echo $m["tenhang"]; ?>
		</a>
	</div>
    <div class="panel-body">    	
    	<a href="?action=xemchitiet&mahang=<?php echo $m["mahang"]; ?>">
    	<img src="<?php echo $m["hinhanh"]; ?>" class="img-responsive" style="width:100%; height:300px;"></a>
    	<div>Giá bán: <span  class="text-danger">
			<?php echo number_format($m["giaban"]); ?>đ</span>  
		</div>
    	<div><a class="btn btn-info" href="?action=xemchitiet&mahang=<?php echo $m["mahang"]; ?>">
			Chi tiết</a> 
			<a class="btn btn-danger" href="?action=chovaogio&txtmahang=<?php echo $m["mahang"]; ?>&txtsoluong=1">Chọn mua</a>  
		</div>  
    </div>  
  </div>
</div>
<?php 
	}
endforeach; 
?>


    </div>
    <div class="col-sm-3"> 
      <h3>Đang cập nhật</h3>
    </div>    
  </div>
</div>


<?php include("view/bottom.php"); ?>
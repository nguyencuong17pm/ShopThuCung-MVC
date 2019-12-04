<?php include("../view/top.php"); ?>
<div>
<h3>Cập nhật mặt hàng</h3>
<form method="post" action="index.php" enctype="multipart/form-data">
<input type="hidden" name="action" value="xuly">
<input type="hidden" name="txtmahang" value="<?php echo $mh["mahang"]; ?>">
<div class="form-group">    
<label>Hãng sản xuất</label>    
<select class="form-control" name="optdanhmuc">
	<?php foreach ($danhmuc as $dm ) { ?>
		<option value="<?php echo $dm["madm"]; ?>" <?php if($dm["madm"] == $mh["madm"]) echo "selected"; ?>><?php echo $dm["tendm"]; ?></option>
	<?php } ?>
</select></div>
<div class="form-group">    
<label>Tên hàng</label>    
<input class="form-control" type="text" name="txttenhang" required value="<?php echo $mh["tenhang"]; ?>">
</div> 
<div class="form-group">    
<label>Mô tả</label>    
<textarea class="form-control" name="txtmota" required><?php echo $mh["mota"]; ?></textarea>
</div> 
<div class="form-group">    
<label>Giá bán</label>    
<input class="form-control" type="number" name="txtgiaban" value="<?php echo $mh["giaban"]; ?>" required>
</div> 
<div class="form-group">    
<label>Lượt xem</label>    
<input class="form-control" type="number" name="txtluotxem" value="<?php echo $mh["luotxem"]; ?>" required>
</div> 
<div class="form-group">    
<label>Lượt mua</label>    
<input class="form-control" type="number" name="txtluotmua" value="<?php echo $mh["luotmua"]; ?>" required>
</div> 
<div id="hinh" class="form-group">
	<label>Hình ảnh</label><br>
	<input type="hidden" name="txthinhcu" value="<?php echo $mh["hinhanh"]; ?>">
	<img src="../../public/<?php echo $mh["hinhanh"]; ?>" width="50"><br>
	<input type="checkbox" id="chkdoianh" name="chkdoianh"> Đổi ảnh<br>
</div>  
<div id="file" class="form-group">  
  <input type="file" class="form-control" name="filehinhanh">
</div>
<div class="form-group">
<input class="btn btn-primary"  type="submit" value="Lưu">
<input class="btn btn-warning"  type="reset" value="Hủy">
</div>
</form>
</div>
<!-- JQuery: hiển thị/tắt form thêm -->
<script>
$(document).ready(function(){
    $("#file").hide();
    $("#chkdoianh").click(function(){        
        $("#file").toggle(500);
    });
});
</script>

<?php include("../view/bottom.php"); ?>
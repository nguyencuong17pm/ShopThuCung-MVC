<?php include('../view/top.php');?>

	<div>
		<form action="index.php" method="get" class="form-group">
		<input type="hidden" name="action" value="delete_selected" /> 
			<div class="list-group">
				<a href="../index.php"><span class='glyphicon glyphicon-home'> </span> Trang chủ</a>  	
				<a href="index.php"><span class='glyphicon glyphicon-cog'></span> Quản lý chủ đề</a>
				
				<hr>
			</div>
			<div>
				<p>
				<a href="?action=add_form" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Thêm dòng mới</a>
				<input type="submit" value="Xóa dòng chọn" class="btn btn-danger">
				
				</p>
			</div>
			<table class="table">
				<tr>
					<th>Chọn</th>
					<!--TODO: Bổ sung các tên các trường với các thẻ <th> tương ứng ... -->
					<th>Mã chủ đề</th>
					<th>Tên chủ đề</th>
					<th colspan="1" align="center">Chức năng</th>
				</tr>
				<!--TODO: Thay đổi tên biến được lấy từ trang index.php
				Thay đổi tương ứng các khóa với cấu trúc của bảng dữ liệu ... -->
				<?php
			if ($ds_chude != null)
				foreach ($ds_chude as $value):?>
					<tr>
					<td>
					<input type="checkbox" name="chk_arr_macd[]" value="<?php print($value["macd"]); ?>" /></td>

					<td><?php print($value["macd"]);?></td>
					<td><?php print($value["tencd"]);?></td>					
					<td>
						<a href="?action=delete&ma=<?php echo $value["macd"]; ?>" class="btn btn-link"><span class="glyphicon glyphicon-remove"></span> Xóa</a>
						<a href="?action=update_form&ma=<?php echo $value["macd"]; ?>" class="btn btn-link"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
					</td>
				</tr>
				<?php endforeach;?>
				<tr>
					<td colspan="5">
						<div>
							
						</div>
					</td>
				</tr>
			</table>

		</form>
	</div>
<!-- </div> -->
<?php include('../view/bottom.php');?>
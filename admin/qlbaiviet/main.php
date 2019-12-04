<?php include('../view/top.php');?>

	<div>
		<form action="index.php" method="get" class="form-group">
		<input type="hidden" name="action" value="delete_selected" /> 
			<div class="list-group">
				<a href="../index.php"><span class='glyphicon glyphicon-home'> </span> Trang chủ</a>  	
				<a href="index.php"><span class='glyphicon glyphicon-cog'></span> Quản lý bài viết</a>
				
				<hr>
			</div>
			<div>
				<p>
				<a href="?action=add_form" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Thêm mới</a>
				<input type="submit" value="Xóa mục chọn" class="btn btn-danger">
				
				</p>
			</div>

			<table class="table">
				<tr>
					<th>Chọn</th>					
					<th>Mã</th>
					<th>Tiêu đề</th>
					<th>Ngày đăng</th>
					<th>Đính kèm</th>
					<th>Quan trọng</th>
					<th>Kích hoạt</th>
					<th colspan="2" align="center">Chức năng</th>
				</tr>

				<?php
			if ($ds_baiviet != null)
				foreach ($ds_baiviet as $value):?>
					<tr>
					<td>
					<input type="checkbox" name="chk_arr_mabv[]" value="<?php print($value["mabv"]); ?>" /></td>
					<td ><?php print($value["mabv"]); ?></td>
						
					<td><?php print($value["tieude"]);?></td>
					<td><?php print($value["ngaydang"]);?></td>
					<td>
						<?php 
						if($value["video"] == "")
							echo 'Không';
						else
							echo '<a href="#"><span class="glyphicon glyphicon-paperclip"></span></a>';
						?></td>
					<td>
						<?php 
						if($value["quantrong"] == 1)
							echo '<a href="?action=update_quantrong&mabv='. $value["mabv"] .'&quantrong=1"><span class="glyphicon glyphicon-pushpin"></span></a>';
						else
							echo '<a href="?action=update_quantrong&mabv='. $value["mabv"] .'&quantrong=0"><span class="glyphicon glyphicon-ban-circle"></span></a>';
						?></td>
					<td>
						<?php 
						if($value["kichhoat"] == 1)
							echo '<a href="?action=update_kichhoat&mabv='. $value["mabv"] .'&kichhoat=1"><span class="glyphicon glyphicon-ok"></span></a>';
						else
							echo '<a href="?action=update_kichhoat&mabv='. $value["mabv"] .'&kichhoat=0"><span class="glyphicon glyphicon-remove"></span></a>';
						?></td>
					<td>
						<a href="?action=delete&ma=<?php echo $value["mabv"]; ?>" class="btn btn-link"><span class="glyphicon glyphicon-remove"></span> Xóa</a>
						<a href="?action=update_form&ma=<?php echo $value["mabv"]; ?>" class="btn btn-link"><span class="glyphicon glyphicon-edit"></span> Sửa</a>						
					</td>
				</tr>
				<?php endforeach;?>
				<tr>
					<td colspan="9">
						<div>
							<?php Control_Navigation($tongsodong); ?>
						</div>
					</td>
				</tr>
			</table>

		</form>
	</div>
	
<?php include('../view/bottom.php');?>
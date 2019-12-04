<?php include('../view/top.php');?>
   
<fieldset>            
	<legend>THÊM MỚI BÀI VIẾT</legend>
	<form method="get" action="index.php" class="form-group">
		<input type="hidden" name="action" value="add">
	<div class="form-group">
		<select name="optchude"  class="form-control">
			<option>-- Chọn chủ đề --</option>
					<?php foreach ($ds_chude as $chude):?>
							<option value="<?php print($chude['macd']);?>"><?php print($chude['tencd']);?></option>
					<?php endforeach;?>
		</select>
	</div>
	<div class="form-group">
		<label>Tiêu đề</label>
			<input type="text" name="txttieude"  class="form-control"
	required="required" size="80">
	</div>
	<!-- ============chú ý 2 phần tử textarea============= -->
	<div class="form-group">
		<label>Tóm tắt bài viết:</label>
			<textarea name="txttomtat" id="txttomtat" cols="90"
	required="required" ></textarea>
	</div>
	<div class="form-group">
		<label>Nội dung:</label>
			<textarea class="form-control" name="txtnoidung" id="txtnoidung"
	required="required"  ></textarea>
	</div>
	<!-- ================================================ -->
	<div class="form-group"><label>Thiết lập hiển thị:</label>
		<input type="checkbox" name="chkquantrong" id="chkquantrong" value="1"
	checked="checked" /> Quan trọng (Luôn hiện đầu bản tin) 
		<input type="checkbox" name="chkkichhoat" id="chkkichhoat" value="1"
	checked="checked" /> Kích hoạt
	</div>
	<div class="form-group">
		<input class="btn btn-info" type="submit" value="Lưu bài viết">
		<input class="btn btn-danger" type="reset" value="Làm lại">
	</div>
	</form>
	<script>
    CKEDITOR.replace( 'txttomtat', {
      uiColor: '#cceeff',
      height: 100,
      toolbar: [
      [ 'Bold', 'Italic', '-', 'Link', 'Unlink' ],
      [ 'FontSize', 'TextColor', 'BGColor' ]
      ]
    });
    CKEDITOR.replace( 'txtnoidung', {
      uiColor: '#9AB8F3',
      height: 300,
      toolbar: [
      [ 'Source', '-', 'Preview', '-', 'Templates' ],
      [ 'Cut','Copy','Paste','Undo','Redo' ] ,
      [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat;'],
      [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-',
      'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ],
      [ 'Link','Unlink','Anchor' ],
      ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ],
      [ 'Styles','Format','Font','FontSize', 'TextColor', 'BGColor' ]
      ]
    });
</script>
</fieldset>
<?php include('../view/bottom.php');?>
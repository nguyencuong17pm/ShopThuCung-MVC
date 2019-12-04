<?php include('../view/top.php');?>
   
        <fieldset>
            <!--TODO: Thay đổi tiêu đề trang Màn hình thêm ... -->
            <legend>THÊM MỚI CHỦ ĐỀ</legend>
            <form method="get" action="index.php" class="form-group">
                <input type="hidden" name="action" value="add">
                <label>Tên chủ đề</label>
                <input type="text" name="txttencd" class="form-control">
                <div>
                <br>
					<input class="btn btn-info" type="submit" value="Lưu lại">
					<input class="btn btn-danger" type="reset" value="Làm lại">
                               
                </div>
            </form>
        </fieldset>

<?php include('../view/bottom.php');?>
<div class="col-sm-3 fixed-bottom">
      <h3 style="text-align:center;">          
        <span class="label label-danger">M</span>
        <span class="label label-warning">E</span>
        <span class="label label-info">O</span>
        <span class="label label-primary">W</span>
        <span class="label label-success">SHOP</span>
      </h3><br>
      <ul  class="nav navbar-default nav-pills nav-stacked" style="background:#DDDDDD; border-radius:10px;">
        <li  class="active"><a href="#"><span class="glyphicon glyphicon-cog"></span> Khu vực Nhân viên</a></li>
        <h4 class="text-info">Hàng hóa</h4>
        <li><a href="../qldanhmuc"><span class="glyphicon glyphicon-list-alt"></span> Quản lý danh mục</a></li>
        <li><a href="../qlmathang"><span class="glyphicon glyphicon-gift"></span> Quản lý mặt hàng</a></li>
        <li><a href="../qldonhang"><span class="glyphicon glyphicon-inbox"></span> Quản lý đơn hàng</a></li>
        <h4 class="text-info">Tin tức</h4>
        <li><a href="../qlchude"><span class="glyphicon glyphicon-list-alt"></span> Quản lý chủ đề</a></li>
        <li><a href="../qlbaiviet"><span class="glyphicon glyphicon-list-alt"></span> Quản lý bài viết</a></li>
        <?php
        if(isset($_SESSION["nguoidung"]) && $_SESSION["nguoidung"]["loaind"]==1|| $_SESSION["nguoidung"]["loaind"]==0){
        ?>
        <li class="active"><a href="#"><span class="glyphicon glyphicon-cog"></span> Khu vực Quản trị viên</a></li>
        <li><a href="../qlnguoidung"><span class="glyphicon glyphicon-list-alt"></span> Quản lý người dùng</a></li>
    	<?php } ?>
      </ul><br>
</div>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Meow Shop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Khu vực nhân viên</a></li>
        <li><span class="text-info"> Hàng hóa</span></li>
        <li><a href="../qldanhmuc">Quản lý danh mục</a></li>
        <li><a href="../qlmathang">Quản lý mặt hàng</a></li>
        <li><a href="../qldonhang">Quản lý đơn hàng</a></li>
        <li><span class="text-info"> Tin tức</span></li>
        <li><a href="../qlnhomchude">Quản lý nhóm chủ đề</a></li>
        <li><a href="../qlchude">Quản lý chủ đề</a></li>
        <li><a href="../qlbaiviet">Quản lý bài viết</a></li>
        <?php
        if(isset($_SESSION["nguoidung"]) && $_SESSION["nguoidung"]["loaind"]==1){
        ?>
        <li class="active"><a href="#">Khu vực quản trị viên</a></li>
        <li><a href="../qlnguoidung">Quản lý người dùng</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
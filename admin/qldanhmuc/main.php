<?php include("../view/top.php"); ?>

<h3>Danh mục</h3> 
<div id="buttonthem">
   <a class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Thêm mới</a>
   <br>&nbsp; 
</div>  
<div id="formthem">
<form class="form-inline" method="post">
  <input class="form-control" type="text" name="txttenthem" placeholder="Nhập tên danh mục">
  <input type="hidden" name="action" value="them">
  <input class="btn btn-warning" type="submit" value="Thêm">
</form>
</div>
 
<br>
<table class="table table-hover">
      <tr><th>Tên danh mục</th><th>Sửa</th><th>Xóa</th></tr>
    <?php foreach ($danhmuc as $dm): 
      if($dm["madm"] == $masua){
      ?>
        <form method="POST">
        <tr><td>
          <input type="hidden" name="txtmasua" value="<?php echo $dm["madm"]; ?>">
          <input class="form-control" type="text" name="txttensua" value="<?php echo $dm["tendm"]; ?>">
          <input type="hidden" name="action" value="capnhat"></td>
          <td><input class="btn btn-warning" type="submit" value="Cập nhật"></td>
          <td>Xóa</td>
        </form>
      <?php
      }
      else {
      ?>

      <tr><td><?php echo $dm["tendm"]; ?></td>
        <td>
          <a href="?action=sua&madm=<?php echo $dm["madm"]; ?>">Sửa</a>  
        </td><td>
        <a href="?action=xoa&madm=<?php echo $dm["madm"]; ?>">Xóa</a></td></tr>
    <?php 
      }
    endforeach; 
    ?>
</table>
   
<!-- JQuery: hiển thị/tắt form thêm -->
<script>
$(document).ready(function(){
    $("#formthem").hide();
    $("#buttonthem").click(function(){
        $("#formthem").toggle(1000);
        $("#buttonthem").hide();

    });
});
</script>

<?php include("../view/bottom.php"); ?>

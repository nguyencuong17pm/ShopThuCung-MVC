<?php include("view/top.php"); ?>
<?php include("view/carousel.php"); ?>
<br><br>
<div class="container">
  <div class="row"> 
    <!-- Hàng nổi bật -->
    <a name="spnoibat"></a>
    <h3>Sản phẩm nổi bật</h3>
    <?php
    foreach($mathangnoibat as $m):
    ?>
    <div class="col-sm-3" style="text-align:center;">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <a  style="color:00007f" href="?action=xemnhom&madm=<?php echo $m["madm"]; ?>">
          <?php echo $m["tendm"]; ?>
          </a>  
        </div>
        <div class="panel-body"><a href="?action=xemchitiet&mahang=<?php echo $m["mahang"]; ?>"><img src="<?php echo $m["hinhanh"]; ?>" class="img-responsive" style="width:100%; height:300px;" alt="<?php echo $m["tenhang"]; ?>"></a>
        </div>
        <div class="panel-footer"><a href="?action=xemchitiet&mahang=<?php echo $m["mahang"]; ?>"><?php echo $m["tenhang"]; ?></a></div>
      </div>
    </div> 
    <?php endforeach; ?>
  </div>
  <a name="sptatca"></a>
  <div class="row"> <!-- Tất cả mặt hàng - Xử lý phân trang -->
     <a name="sptatca"></a>
     <h3>Tất cả sản phẩm </h3>
    <?php
    foreach($mathang as $mh):
    ?>
    <div class="col-sm-3" style="text-align:center;">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <a style="color:00007f" href="?action=xemnhom&madm=<?php echo $mh["madm"]; ?>">
          <?php echo $mh["tendm"]; ?>
          </a>  
        </div>
        <div class="panel-body"><a href="?action=xemchitiet&mahang=<?php echo $mh["mahang"]; ?>"><img src="<?php echo $mh["hinhanh"]; ?>" class="img-responsive" style="width:100%; height:300px;" alt="<?php echo $mh["tenhang"]; ?>"></a>
        </div>
        <div class="panel-footer"><a href="?action=xemchitiet&mahang=<?php echo $mh["mahang"]; ?>"><?php echo $mh["tenhang"]; ?></a></div>
      </div>
    </div>    
    <?php endforeach; ?>
  </div>
  <div class="row" align="center">
      <ul class="pagination">
    <li><a href="?trang=1"><span class="glyphicon glyphicon-step-backward"></span></a></li>
    <?php 
    if($tranghh > 1 && $tongsotrang > 1)
    ?>
    <li><a href="?trang=<?php echo $tranghh-1; ?>"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
    <?php
    for($i=1; $i<=$tongsotrang; $i++){
      if($i == $tranghh){
    ?>
        <li class="active"><span><?php echo $i; ?></span></li>
    <?php
      }
      else{
    ?>
      <li><a href="?trang=<?php echo $i; ?>#sptatca"><?php echo $i; ?></a></li>
    <?php 
      }
    } 
    if($tranghh < $tongsotrang && $tongsotrang > 1)
    ?>
    <li><a href="?trang=<?php echo $tranghh+1; ?>"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
    <li><a href="?trang=<?php echo $tongsotrang; ?>"><span class="glyphicon glyphicon-step-forward"></span></a></li>
  </ul><br>
  </div>
  <div class="row"> 
    <!-- Hàng nổi bật -->
    <a name="spnoibat"></a>
    <h3>Tin tức thú cưng</h3>
    <?php
    foreach($baiviet as $bv):
    ?>
    <div class="col-sm-3" style="text-align:justify;">
      <div class="panel panel-danger">
        <div class="panel-heading" style="height:50px;">
          <a  style="color:#00007f" href="?action=xemnhom&madm=<?php echo $bv["tieude"]; ?>">
          <?php echo $bv["tieude"]; ?>
          </a>  
        </div>
        <div class="panel-body"><a href="?action=xemchitiet&mahang=<?php echo $bv["mabv"]; ?>"><iframe src="<?php echo $bv["video"]; ?>" class="img-responsive" style="width:100%; height:200px;" alt="<?php echo $bv["tieude"]; ?>" allowfullscreen></iframe></a>
        </div>
        <div class="panel-footer" style="height:150px;"><a href="?action=xemchitiet&mahang=<?php echo $bv["mabv"]; ?>"><?php echo $bv["tomtat"]; ?></a></div>
      </div>
    </div> 
    <?php endforeach; ?>
  </div>
</div>

<?php include("view/bottom.php"); ?>
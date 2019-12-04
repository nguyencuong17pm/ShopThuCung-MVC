<?php include("view/top.php"); ?>
<br><br>
<div class="container">    
<div class="row">
<div class="col-sm-9">
<h3>Tổng hợp tin <?php echo $tencd; ?></h3>
<?php
foreach($baiviet as $bv):  
?>
<div class="col-sm-4" style="text-align:justify;">
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
<div class="col-sm-3">
</div>
</div>
</div>
<?php include("view/bottom.php"); ?>
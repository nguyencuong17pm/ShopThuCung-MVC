<?php
class MATHANG_DB{

    // Lấy danh sách mặt hàng, sắp xếp theo mã hàng giảm dần
    public function laytatcamathang(){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM mathang m, danhmuc d WHERE d.madm=m.madm ORDER BY m.mahang DESC";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchAll();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }
    // Lấy 1 mặt hàng theo mã
    public function laymathangtheoma($ma){
        $db = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM mathang m, danhmuc d WHERE d.madm=m.madm AND mahang=:ma";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(":ma", $ma);            
            $cmd->execute();
            $ketqua = $cmd->fetch();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }
    public function getmaxid(){
        $db = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM mathang ORDER by mahang DESC limit 0,1";
            $cmd = $db->prepare($sql);
            $cmd->execute();                  
            $ketqua = $cmd->fetch();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }
    
    // Thêm mới
    public function themmathang($madm,$tenhang,$mota,$giaban){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "INSERT INTO mathang(tenhang, mota, giaban, luotxem, luotmua, madm) VALUES(:ten, :mota, :gia, 1, 0, :madm)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ten", $tenhang);
            $cmd->bindValue(":mota", $mota);
            $cmd->bindValue(":gia", $giaban);
            $cmd->bindValue(":madm", $madm);
            $ketqua = $cmd->execute();
            
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }

    // Sửa mặt hàng
    public function suamathang($mahang,$tenhang,$mota,$giaban,$luotxem,$luotmua,$madm){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "UPDATE mathang SET tenhang=:ten, mota=:mota, giaban=:gia, luotxem=:luotxem, luotmua=:luotmua, madm=:madm WHERE mahang=:mahang";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ten", $tenhang);
            $cmd->bindValue(":mota", $mota);
            $cmd->bindValue(":gia", $giaban);
            $cmd->bindValue(":madm", $madm);
            $cmd->bindValue(":mahang", $mahang);
            $cmd->bindValue(":luotxem", $luotxem);
            $cmd->bindValue(":luotmua", $luotmua);
            $ketqua = $cmd->execute();
            
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }
        public function updatehinh($mahang,$hinhanh){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "UPDATE mathang SET hinhanh=:hinh WHERE mahang=:mahang";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":hinh", $hinhanh);
            $cmd->bindValue(":mahang", $mahang);
            $ketqua = $cmd->execute();
            
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }
    // Xóa 
    public function xoamathang($mahang){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "DELETE FROM mathang WHERE mahang=:ma";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ma", $mahang);
            $ketqua = $cmd->execute();
            
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }

}
?>

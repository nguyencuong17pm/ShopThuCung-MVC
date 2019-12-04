<?php
class MATHANG_DB{

    // Lấy danh sách mặt hàng, sắp xếp theo mã hàng giảm dần
    public function laytatcamathang(){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM mathang ORDER BY mahang DESC";
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
    // Đếm tổng số mặt hàng
    public function demtongsomathang(){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT COUNT(*) FROM mathang";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchColumn();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }
    // Lấy mặt hàng nổi bật
    public function laymathangnoibat(){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM mathang m, danhmuc d WHERE d.madm=m.madm ORDER BY luotxem DESC LIMIT 0, 4";
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
    // Lấy một số $n mặt hàng bắt đầu từ $m - dùng cho phân trang
    public function laymathangphantrang($m, $n){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM mathang m, danhmuc d WHERE d.madm=m.madm ORDER BY mahang DESC LIMIT $m, $n";
            $cmd = $dbcon->prepare($sql);               
            $cmd->execute();
            $ketqua = $cmd->fetchAll();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("view/error.php");
            exit();
        }
    }
    // Lấy danh sách mặt hàng thuộc một danh mục
    public function laymathangtheodanhmuc($madm){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM mathang WHERE madm=:ma ORDER BY mahang DESC";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ma", $madm);    
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
    
    // Thêm mới
    public function themmathang($madm,$tenhang,$mota,$giaban,$hinhanh){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "INSERT INTO mathang(tenhang, mota, giaban, hinhanh, madm) VALUES(:ten, :mota, :gia, :hinh, :madm)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ten", $tenhang);
            $cmd->bindValue(":mota", $mota);
            $cmd->bindValue(":giaban", $giaban);
            $cmd->bindValue(":hinh", $hinhanh);
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

    // Tăng lượt xem lên 1
    public function tangluotxem($mahang){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "UPDATE mathang SET luotxem=luotxem+1 WHERE mahang=:ma";
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

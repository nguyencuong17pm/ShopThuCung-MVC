<?php
class DANHMUC_DB{
    // Lấy danh sách
    public function laytatcadanhmuc(){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM danhmuc";
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
    
    // Thêm mới
    public function themdanhmuc($tendm){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "INSERT INTO danhmuc(tendm) VALUES(:ten)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ten", $tendm);
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
    public function xoadanhmuc($madm){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "DELETE FROM danhmuc WHERE madm=:ma";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ma", $madm);
            $ketqua = $cmd->execute();            
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }

    // Cập nhật 
    public function suadanhmuc($madm, $tendm){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "UPDATE danhmuc SET tendm=:ten WHERE madm=:ma";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ten", $tendm);
            $cmd->bindValue(":ma", $madm);
            $ketqua = $cmd->execute();            
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }

    public function laytendanhmuctheoma($ma){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM danhmuc WHERE madm=:ma";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ma", $ma);
            $cmd->execute();
            $dm = $cmd->fetch();
            $ketqua = $dm["tendm"];
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/database_error.php");
            exit();
        }
    }
}
?>

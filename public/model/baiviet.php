<?php
	class BAIVIET_DB{
		public function laytatcabaiviet(){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM baiviet ORDER BY mabv DESC, quantrong DESC, kichhoat DESC limit 4";
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
    public function laybaiviettheochude($macd){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM baiviet WHERE macd=:macd";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":macd", $macd);
            $cmd->execute();
            $ketqua = $cmd->fetchAll();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("error.php");
            exit();
        }
    }
}
?>
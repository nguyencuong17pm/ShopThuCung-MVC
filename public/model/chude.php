<?php
    CLASS CHUDE_DB{
        public function laytatcachude(){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM chude";
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
    public function laytenchudetheoma($ma){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM chude WHERE macd=:ma";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ma", $ma);
            $cmd->execute();
            $dm = $cmd->fetch();
            $ketqua = $dm["tencd"];
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
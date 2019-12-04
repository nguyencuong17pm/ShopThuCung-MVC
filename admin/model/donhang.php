<?php
    class DONHANG_DB{
    	public function themdonhang($makh,$tongtien){
    		$db = DATABASE::taoketnoi();
    		try{
    			$sql = "INSERT INTO donhang(makh,tongtien) VALUES(:makh,:tongtien)";
    			$cmd = $db->prepare($sql);
    			$cmd->bindValue(':makh',$makh);
    			$cmd->bindValue(':tongtien',$tongtien);
    			$ketqua=$cmd->execute();
    			return $ketqua;
    		}
    		catch(PDOException $e){
    			$error_message=$e->getMessage();
    			include("../view/error.php");
    			exit();
    		}
    	}
    	public function getmaxid(){
            $db = DATABASE::taoketnoi();
            try{
                $sql = "SELECT * FROM donhang ORDER by madh DESC limit 0,1";
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
        public function laydanhsachdonhang(){
            $db = DATABASE::taoketnoi();
            try{
                $sql = "SELECT * FROM donhang dh,khachhang kh WHERE dh.makh=kh.makh";
                $cmd = $db->prepare($sql);          
                $cmd->execute();
                $ketqua = $cmd->fetchAll();         
                return $ketqua;
            }
            catch(PDOException $e){
                $error_message=$e->getMessage();
                include("../view/error.php");
                exit();
            }
        }
        public function doitrangthai($madh,$trangthai){
        $db = DATABASE::taoketnoi();
        try{
            $sql = "UPDATE donhang set trangthai=:trangthai where madh=:madh";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(':madh',$madh);
            $cmd->bindValue(':trangthai',$trangthai);
            $ketqua = $cmd->execute();            
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message=$e->getMessage();
            include("../view/error.php");
            exit();
        }
    }

    }
?>
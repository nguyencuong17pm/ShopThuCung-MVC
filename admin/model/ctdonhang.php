<?php
class CTDONHANG_DB{
	public function themctdonhang($madh,$mamh,$dongia,$soluong,$thanhtien){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "INSERT INTO ctdonhang(madh,mamh,dongia,soluong,thanhtien) VALUES(:madh,:mamh,:dongia,:soluong,:thanhtien)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':madh',$madh);
			$cmd->bindValue(':mamh',$mamh);
			$cmd->bindValue(':dongia',$dongia);
			$cmd->bindValue(':soluong',$soluong);
			$cmd->bindValue(':thanhtien',$thanhtien);
			$ketqua=$cmd->execute();
			return $ketqua;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			include("error.php");
			exit();
		}
	}
}
	
?>
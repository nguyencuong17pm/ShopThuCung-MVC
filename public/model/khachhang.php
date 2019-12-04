<?php
class khachhang_DB{
	// khai báo các thuộc tính (SV tự viết)
	
	public function kiemtrakhachhanghople($email,$matkhau){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "SELECT * FROM khachhang WHERE email=:email AND matkhau=:matkhau AND trangthai=1";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(":email", $email);
			$cmd->bindValue(":matkhau", md5($matkhau));
			$cmd->execute();
			$valid = ($cmd->rowCount () == 1);
			$cmd->closeCursor ();
			return $valid;			
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			include("../view/error.php");
			exit();
		}
	}
	
	// lấy thông tin người dùng có $email
	public function laythongtinkhachhang($email){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "SELECT * FROM khachhang WHERE email=:email";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(":email", $email);
			$cmd->execute();
			$ketqua = $cmd->fetch();
			$cmd->closeCursor();
			return $ketqua;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			include("../view/error.php");
			exit();
		}
	}

	
	// lấy tất cả 
	public function laydanhsachkhachhang(){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "SELECT * FROM khachhang";
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

	// Thêm nd mới, trả về khóa của dòng mới thêm
	public function themkhachhang($email,$hoten,$dienthoai,$diachi){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "INSERT INTO khachhang(email,hoten,dienthoai,diachi) VALUES(:email,:hoten,:dienthoai,:diachi)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':email',$email);
			$cmd->bindValue(':hoten',$hoten);
			$cmd->bindValue(':dienthoai',$dienthoai);
			$cmd->bindValue(':diachi',$diachi);
			$ketqua=$cmd->execute();
			return $ketqua;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			include("../view/error.php");
			exit();
		}
	}

	// Cập nhật thông tin 
	public function capnhatkhachhang($mand,$email,$hoten){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "UPDATE khachhang set hoten=:hoten, email=:email where mand=:mand";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':mand',$mand);
			$cmd->bindValue(':email',$email);
			$cmd->bindValue(':hoten',$hoten);
			$ketqua = $cmd->execute();            
            return $ketqua;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			include("../view/error.php");
			exit();
		}
	}

	// Đổi mật khẩu
	public function doimatkhau($email,$matkhau){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "UPDATE khachhang set matkhau=:matkhau where email=:email";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':email',$email);
			$cmd->bindValue(':matkhau',md5($matkhau));
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

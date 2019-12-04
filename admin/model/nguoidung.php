<?php
class NGUOIDUNG_DB{
	// khai báo các thuộc tính (SV tự viết)
	
	public function kiemtranguoidunghople($email,$matkhau){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "SELECT * FROM nguoidung WHERE email=:email AND matkhau=:matkhau AND trangthai=1";
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
	public function laythongtinnguoidung($email){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "SELECT * FROM nguoidung WHERE email=:email";
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

	public function getmaxid(){
        $db = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM nguoidung ORDER by mand DESC limit 0,1";
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
	// lấy tất cả ng dùng
	public function laydanhsachnguoidung(){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "SELECT * FROM nguoidung";
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
	public function themnguoidung($email,$matkhau,$hoten,$loaind){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "INSERT INTO nguoidung(email,matkhau,hoten,loaind) VALUES(:email,:matkhau,:hoten,:loaind)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':email',$email);
			$cmd->bindValue(':matkhau',md5($matkhau));
			$cmd->bindValue(':hoten',$hoten);
			$cmd->bindValue(':loaind',$loaind);
			$cmd->execute();
			$mand = $db->lastInsertId();
			return $mand;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			include("../view/error.php");
			exit();
		}
	}

	// Cập nhật thông tin ng dùng: họ tên và ảnh đại diện (cần thêm trường ảnh trong csdl)
	public function capnhatnguoidung($mand,$email,$hoten){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "UPDATE nguoidung set hoten=:hoten, email=:email where mand=:mand";
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
	public function updatehinh($mand,$anhdaidien){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "UPDATE nguoidung set anhdaidien=:anhdaidien where mand=:mand";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':mand',$mand);
			$cmd->bindValue(':anhdaidien',$anhdaidien);
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
			$sql = "UPDATE nguoidung set matkhau=:matkhau where email=:email";
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

	// Đổi quyền (loại người dùng: 1 quản trị, 2 nhân viên)
	public function doiloainguoidung($mand,$loaind){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "UPDATE nguoidung set loaind=:loaind where mand=:mand";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':mand',$mand);
			$cmd->bindValue(':loaind',$loaind);
			$ketqua = $cmd->execute();            
            return $ketqua;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			include("../view/error.php");
			exit();
		}
	}

	// Đổi trạng thái (0 khóa, 1 kích hoạt)
	public function doitrangthai($mand,$trangthai){
		$db = DATABASE::taoketnoi();
		try{
			$sql = "UPDATE nguoidung set trangthai=:trangthai where mand=:mand";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':mand',$mand);
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

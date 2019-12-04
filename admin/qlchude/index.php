<?php
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");
require_once("../model/db.php");
require_once("../model/chude.php");
include("../model/include.php"); 
$chude_db = new CHUDE_DB();

if(isset($_REQUEST["action"])){
	$action = $_REQUEST["action"];
}
else{
	$action="main"; 
}

switch($action){
	// Giao diện chính
	case "main":	
		$ds_chude = $chude_db->getFullData();
		include("./main.php");
		break;
	// Giao diện thêm
	case "add_form":
		include("./add_form.php");
		break;
	// Xử lý thêm
	case "add":
		// lấy dữ liệu từ form 
		if(isset($_REQUEST["txttencd"]))
			$tencd = $_REQUEST["txttencd"];
		// gọi phương thức thêm
		$kq = $chude_db->add($tencd);
		if($kq == 0)
			display_error("Không thêm được");
		else
			redirect(".");
		break;
	// Giao diện cập nhật
	case "update_form":
		// lấy khóa chính 
		if(isset($_REQUEST["ma"]))
			$khoa = $_REQUEST["ma"];
		$chude = $chude_db->getRowById($khoa);
		include("./update_form.php");
		break;
	// Xử lý cập nhật
	case "update":
		// lấy dữ liệu từ form 
		if(isset($_REQUEST["txttencd"]))
			$ten = $_REQUEST["txttencd"];
		if(isset($_REQUEST["txtmacd"]))
			$khoa = $_REQUEST["txtmacd"];
		// gọi phương thức cập nhật
		$kq = $chude_db->update($ten, $khoa);
		if($kq == 0)
		//	display_error("Không cập nhật được");
			ShowError("Không sửa được");
		else
			redirect(".");
		break;
	// Xử lý xóa 1 dòng
	case "delete":		 
		// lấy khóa chính 
		if(isset($_REQUEST["ma"]))
			$khoa = $_REQUEST["ma"];
		// gọi phương thức xóa
		$kq = $chude_db->delete($khoa);
		if($kq == 0)
		//	display_error("Không xóa được");
			ShowError("Không xóa được");
		redirect(".");
		break;
	// Xử lý xóa nhiều dòng
	case "delete_selected":		
		// lấy mảng danh sách các khóa chính cần xóa 
		if(isset($_REQUEST["chk_arr_macd"]))
			$dskhoa = $_REQUEST["chk_arr_macd"]; 
		
		// vòng lặp gọi phương thức xóa
		if(is_array($dskhoa) && $dskhoa != null){
			foreach($dskhoa as $khoa)
				$chude_db->delete($khoa);
		}
		redirect(".");
		break;
		
	default:
		break;
}
?>

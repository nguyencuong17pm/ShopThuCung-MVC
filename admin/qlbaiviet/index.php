<?php
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require_once("../model/db.php");
require_once("../model/chude.php");
require_once("../model/baiviet.php");
include("../model/include.php");
$chude_db = new CHUDE_DB();
$baiviet_db = new BAIVIET_DB();

if(isset($_REQUEST["action"])){
	$action = $_REQUEST["action"];
}
else{
	$action="main"; 
}

switch($action){
	// Giao diện chính
	case "main":	
		$ds_chude = $chude_db->getAll();
		$ds_baiviet = $baiviet_db->getAllDataPaging($tongsodong);
		include("./main.php");
		break;
	// Giao diện thêm
	case "add_form":
		$ds_chude=$chude_db->getAll();
		include("./add_form.php");
		break;
	// Xử lý thêm
	case "add":
		//Lấy dữ liệu từ form
		if(isset($_REQUEST["optchude"]))
			$machude=$_REQUEST["optchude"];
		if(isset($_REQUEST["txttieude"]))
			$tieude=$_REQUEST["txttieude"];
		if(isset($_REQUEST["txttomtat"]))
			$tomtat=$_REQUEST["txttomtat"];
		//$tomtat = html_convert($tomtat);
		if(isset($_REQUEST["txtnoidung"]))
			$noidung=$_REQUEST["txtnoidung"];
		if(isset($_REQUEST["chkquantrong"]))
			$quantrong=$_REQUEST["chkquantrong"];
		if($quantrong == TRUE) $quantrong = 1; else $quantrong = 0;

		if(isset($_REQUEST["chkkichhoat"]))
			$kichhoat = $_REQUEST["chkkichhoat"];
		if($kichhoat == TRUE) $kichhoat = 1; else $kichhoat = 0;
		$luotxem = 0;
		$now = getdate();
		$ngaydang = $now["year"] . "/" . $now["mon"] . "/" . $now["mday"];
		$manguoidung = $_SESSION["nguoidung"]["mand"];
		// gọi phương thức thêm
		$kq = $baiviet_db->add($machude, $tieude, $tomtat, $noidung, $quantrong,
		$kichhoat, $luotxem, $ngaydang, $manguoidung);
		if($kq == 0)
			$error_message = "Không thêm được";
		else
			redirect(".");
		break;
	// Giao diện cập nhật
	case "update_form":
		$ds_chude = $chude_db->getAll();
		$mabv=$_GET["ma"];
		$baiviet=$baiviet_db->laybaiviettheoma($mabv);
		$cd=$chude_db->laychudetheoma($baiviet["macd"]);
		include("./update_form.php");
		break;
	// Xử lý cập nhật
	case "update":
		if(isset($_REQUEST["txtmabv"]))
			$mabv=$_REQUEST["txtmabv"];
		if(isset($_REQUEST["optchude"]))
			$machude=$_REQUEST["optchude"];
		if(isset($_REQUEST["txttieude"]))
			$tieude=$_REQUEST["txttieude"];
		if(isset($_REQUEST["txttomtat"]))
			$tomtat=$_REQUEST["txttomtat"];
		//$tomtat = html_convert($tomtat);
		if(isset($_REQUEST["txtnoidung"]))
			$noidung=$_REQUEST["txtnoidung"];
		if(isset($_REQUEST["chkquantrong"]))
			$quantrong=$_REQUEST["chkquantrong"];
		if($quantrong == TRUE) $quantrong = 1; else $quantrong = 0;

		if(isset($_REQUEST["chkkichhoat"]))
			$kichhoat = $_REQUEST["chkkichhoat"];
		if($kichhoat == TRUE) $kichhoat = 1; else $kichhoat = 0;
		$kq = $baiviet_db->updatebv($mabv,$machude, $tieude, $tomtat, $noidung, $quantrong,
		$kichhoat);
		redirect(".");
		break;
	// Xử lý xóa 1 dòng
	case "delete":		 
		// lấy khóa chính 
		if(isset($_REQUEST["ma"]))
			$khoa = $_REQUEST["ma"];
		// gọi phương thức xóa
		$kq = $baiviet_db->delete($khoa);
		if($kq == 0)
			display_error("Không xóa được");
		else
			redirect(".");
		break;
	// Xử lý xóa nhiều dòng
	case "delete_selected":		
		// lấy mảng danh sách các khóa chính cần xóa 
		if(isset($_REQUEST["chk_arr_mabv"]))
			$dskhoa = $_REQUEST["chk_arr_mabv"]; 
		
		// vòng lặp gọi phương thức xóa
		if(is_array($dskhoa) && $dskhoa != null){
			foreach($dskhoa as $khoa)
				$baiviet_db->delete($khoa);
		}
		redirect(".");
		break;
	// Cập nhật trạng thái kích hoạt
	case "update_kichhoat":		 
		// lấy khóa chính 
		if(isset($_REQUEST["mabv"]))
			$mabv = $_REQUEST["mabv"];
		if(isset($_REQUEST["kichhoat"]))
			$kichhoat = $_REQUEST["kichhoat"];
		// gọi phương thức xóa
		if($kichhoat==1)
			$kq = $baiviet_db->update_kichhoat(0, $mabv);
		else
			$kq = $baiviet_db->update_kichhoat(1, $mabv);
			redirect(".");
		break;	
	// Cập nhật trạng thái quan trọng
	case "update_quantrong":		 
		// lấy khóa chính 
		if(isset($_REQUEST["mabv"]))
			$mabv = $_REQUEST["mabv"];
		if(isset($_REQUEST["quantrong"]))
			$quantrong = $_REQUEST["quantrong"];
		// gọi phương thức xóa
		if($quantrong==1)
			$kq = $baiviet_db->update_quantrong(0, $mabv);
		else
			$kq = $baiviet_db->update_quantrong(1, $mabv);
		redirect(".");
		break;	
	
	default:
		break;
}
?>

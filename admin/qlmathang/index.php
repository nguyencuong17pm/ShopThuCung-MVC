<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../model/db.php");
require("../model/danhmuc.php");
require("../model/mathang.php");

// Lấy yêu cầu
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$danhmuc_db = new DANHMUC_DB();
$mathang_db = new MATHANG_DB();

switch($action){
    case "xem":
        $mathang = $mathang_db->laytatcamathang();        
        include("main.php");
        break;
    case "xoa":
        if(isset($_GET["mahang"])) $mathang_db->xoamathang($_GET["mahang"]);  
        $mathang = $mathang_db->laytatcamathang();        
        include("main.php");
        break;
    case "them":
        $danhmuc = $danhmuc_db->laytatcadanhmuc();        
        include("addform.php");
        break;
    case "sua":
        if(isset($_GET["mahang"])){ 
            $mh = $mathang_db->laymathangtheoma($_GET["mahang"]);
            $danhmuc = $danhmuc_db->laytatcadanhmuc(); 
            include("updateform.php");
        }
        else{
            $mathang = $mathang_db->laytatcamathang();        
            include("main.php");            
        }

        break;
    case "xulythem":
        $madm = $_POST["optdanhmuc"];
        $tenhang = $_POST["txttenhang"];
        $mota = $_POST["txtmota"];
        $giaban = $_POST["txtgiaban"];
        // xử lý file upload -- Còn thiếu kiểm tra: dung lượng, kiểu file, ... 
	    // thêm mặt hàng
        if($_FILES["filehinhanh"]["size"]<2097152){
            $mathang_db->themmathang($madm,$tenhang,$mota,$giaban);         
            $maxid=$mathang_db->getmaxid();      
            $hinhanh = "images/" .$maxid["mahang"].".". basename($_FILES["filehinhanh"]["type"]);// đường dẫn lưu csdl
            $duongdan = "../../public/" . $hinhanh; // đường dẫn so với vị trí hiện hành        
            move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
            $mathang_db->updatehinh($maxid["mahang"],$hinhanh);
        }
        else{
            error_log("Ảnh không được qá 2 MB!");
        }	
    	// hiển thị ds mặt hàng
        $mathang = $mathang_db->laytatcamathang();        
        include("main.php");
        break;
    case "xuly":
        $mahang = $_POST["txtmahang"];
        $madm = $_POST["optdanhmuc"];
        $tenhang = $_POST["txttenhang"];
        $mota = $_POST["txtmota"];
        $giaban = $_POST["txtgiaban"];
        $luotxem = $_POST["txtluotxem"];
        $luotmua = $_POST["txtluotmua"];
        $hinhanh = $_POST["txthinhcu"];

 /*       $doihinh = $_POST["chkdoihinh"];
        if($doihinh == checked){
            // xử lý file upload -- Còn thiếu kiểm tra: dung lượng, kiểu file, ...       
            $hinhanh = "images/" . basename($_FILES["filehinhanh"]["name"]);// đường dẫn lưu csdl
            $duongdan = "../../public/" . $hinhanh; // đường dẫn so với vị trí hiện hành        
            move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
        }
*/        
        // sửa mặt hàng
        if($_FILES["filehinhanh"]["size"]<2097152){
            $mathang_db->suamathang($mahang,$tenhang,$mota,$giaban,$luotxem,$luotmua,$madm);          
        $hinhanh = "images/" .$mahang.".". basename($_FILES["filehinhanh"]["type"]);
        $duongdan = "../../public/" . $hinhanh;
        move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
        $mathang_db->updatehinh($mahang,$hinhanh);
        // hiển thị ds mặt hàng
        $mathang = $mathang_db->laytatcamathang();        
        }
        else{
            error_log("Ảnh không được qá 2 MB!");
        }
        
        include("main.php");
        break;
    default:
        break;
}
?>

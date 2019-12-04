<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../model/db.php");
require("../model/nguoidung.php");

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}

$nguoidung_db = new NGUOIDUNG_DB();

switch($action){
    case "macdinh":   
        $nguoidung = $nguoidung_db->laydanhsachnguoidung();     
        include("main.php");
        break;
    case "khoa":   
        $mand = $_GET["mand"];
        $trangthai = $_GET["trangthai"];
        if(!$nguoidung_db->doitrangthai($mand, $trangthai)){
            $tb = "Đã đổi trạng thái!";
        }
        $nguoidung = $nguoidung_db->laydanhsachnguoidung();     
        include("main.php");
        break;
    case "nangcap":
        $mand = $_GET["mand"];
        $loaind = $_GET["loaind"];
        if(!$nguoidung_db->doiloainguoidung($mand, $loaind)){
            $tb = "Đã đổi trạng thái!";
        }
        $nguoidung = $nguoidung_db->laydanhsachnguoidung();     
        include("main.php");
        break;
    case "them":
        $email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        $hoten = $_POST["txthoten"];
        $loaind = $_POST["optloaind"];
        if($nguoidung_db->laythongtinnguoidung($email)){
            $tb = "Email này đã được cấp tài khoản!";
        }
        else{
            if(!$nguoidung_db->themnguoidung($email,$matkhau,$hoten,$loaind)){
                $tb = "Không thêm được!";
            }else{
                $maxid=$nguoidung_db->getmaxid();
                $hinhanh = "images/" .$maxid["mand"].".". basename($_FILES["fhinh"]["type"]);// đường dẫn lưu csdl
                $duongdan = "../../admin/" . $hinhanh; // đường dẫn so với vị trí hiện hành        
                move_uploaded_file($_FILES["fhinh"]["tmp_name"], $duongdan);
                $nguoidung_db->updatehinh($maxid["mand"],$hinhanh);
            }
        }
        $nguoidung = $nguoidung_db->laydanhsachnguoidung();
        include("main.php");        
        break;
    default:
        break;
}
?>

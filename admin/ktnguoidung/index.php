<?php 
require("../model/db.php");
require("../model/nguoidung.php");

// Biến cho biết ng dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
elseif($isLogin == FALSE){
    $action = "dangnhap";
}
else{
    $action="macdinh"; 
}

$nguoidung_db = new NGUOIDUNG_DB();
$tb = "";
switch($action){
    case "macdinh":   
        //$nguoidung = $nguoidung_db->laydanhsachnguoidung();     
        include("main.php");
        break;
    case "dangxuat":
        unset($_SESSION["nguoidung"]);
        //header("Location: .");
        $tb = "Cảm ơn!";
        include("loginform.php");
        break;
    case "dangnhap":
        include("loginform.php");
        break;
    case "xldangnhap":
        $email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        if($nguoidung_db->kiemtranguoidunghople($email,$matkhau)==TRUE){
            $_SESSION["nguoidung"] = $nguoidung_db->laythongtinnguoidung($email);
            include("main.php");
        }
        else{
            $tb = "Đăng nhập không thành công!";
            include("loginform.php");
        }
        break;
    case "capnhat":
        if (isset($_POST["txtmand"]) && isset($_POST["txtemail"]) && isset($_POST["txthoten"]))
            $nguoidung_db->capnhatnguoidung($_POST["txtmand"],$_POST["txtemail"],$_POST["txthoten"]);
        if(isset($_FILES["fhinh"])){
            $hinhanh = "images/" .$_POST["txtmand"].".". basename($_FILES["fhinh"]["type"]);// đường dẫn lưu csdl
            $duongdan = "../../admin/" . $hinhanh; // đường dẫn so với vị trí hiện hành        
            move_uploaded_file($_FILES["fhinh"]["tmp_name"], $duongdan);
            $nguoidung_db->updatehinh($_POST["txtmand"],$hinhanh);
            $_SESSION["nguoidung"] = $nguoidung_db->laythongtinnguoidung($_POST["txtemail"]);
        }
        include("main.php");
        break;
    case "doimatkhau":
         if (isset($_POST["txtemail"]) && isset($_POST["txtmatkhaumoi"]) )
            $nguoidung_db->doimatkhau($_POST["txtemail"],$_POST["txtmatkhaumoi"]);
        include("main.php");
        break;    
    default:
        break;
}
?>

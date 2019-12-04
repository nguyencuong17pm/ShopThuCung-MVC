<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../model/db.php");
require("../model/danhmuc.php");

// Lấy yêu cầu
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}
// Chưa chọn thao tác sửa
$masua = 0;

$danhmuc_db = new DANHMUC_DB();

switch($action){
    case "xem":
        $danhmuc = $danhmuc_db->laytatcadanhmuc();        
        include("main.php");
        break;
    case "them":
        if(isset($_POST["txttenthem"])){
            $kq = $danhmuc_db->themdanhmuc($_POST["txttenthem"]);

        }
        $danhmuc = $danhmuc_db->laytatcadanhmuc();        
        include("main.php");
        break;
    case "xoa":
        if(isset($_GET["madm"])){
            $kq = $danhmuc_db->xoadanhmuc($_GET["madm"]);
                        
        }
        $danhmuc = $danhmuc_db->laytatcadanhmuc();        
        include("main.php");
        break;
    case "sua":
        if(isset($_GET["madm"])){
            $masua = $_GET["madm"];                      
        }
        $danhmuc = $danhmuc_db->laytatcadanhmuc();        
        include("main.php");
        break;
    case "capnhat":
        if(isset($_POST["txtmasua"]) && isset($_POST["txttensua"])){
            $danhmuc_db->suadanhmuc($_POST["txtmasua"],$_POST["txttensua"]);      
        }
        $danhmuc = $danhmuc_db->laytatcadanhmuc();        
        include("main.php");
        break;
    default:
        break;
}
?>

<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../model/db.php");
require("../model/nguoidung.php");
require("../model/donhang.php");
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}

$nguoidung_db = new NGUOIDUNG_DB();
$donhang_db=new DONHANG_DB();
switch($action){
    case "macdinh":   
        $dsdonhang=$donhang_db->laydanhsachdonhang();
        include("main.php");
        break;
    case "xacnhan":   
        $madh = $_GET["madh"];
        $trangthai = $_GET["trangthai"];
        if(!$donhang_db->doitrangthai($madh, $trangthai)){
            $tb = "Đã đổi trạng thái!";
        }
        $dsdonhang=$donhang_db->laydanhsachdonhang(); 
        include("main.php");
        break;
    default:
        break;
}
?>

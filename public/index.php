<?php 
require("model/db.php");
require("model/danhmuc.php");
require("model/mathang.php");
require("model/giohang.php");
require("model/baiviet.php");
require("model/khachhang.php");
require("model/donhang.php");
require("model/ctdonhang.php");
require("model/chude.php");
$dm_db = new DANHMUC_DB();
$mh_db = new MATHANG_DB();
$cd_db=new CHUDE_DB();
$danhmuc = $dm_db->laytatcadanhmuc();
$bv_db=new BAIVIET_DB();
$baiviet=$bv_db->laytatcabaiviet();
$chude=$cd_db->laytatcachude();
$khachhang_db=new khachhang_DB();
$donhang_db=new DONHANG_DB();
$ctdonhang_db=new CTDONHANG_DB();
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}

switch($action){
    case "macdinh": 
        $mathangnoibat = $mh_db->laymathangnoibat();

        // xử lý phân trang
        $tongmh = $mh_db->demtongsomathang();   // tổng số mặt hàng
        $soluong = 4;                           // số lượng mh hiển thị trên trang 
        $tongsotrang = ceil($tongmh/$soluong);  // tổng số trang
        if(!isset($_REQUEST["trang"]))          // trang hiện hành: mặc định là trang đầu
            $tranghh = 1;   
        else                                    // hoặc hiển thị trang do người dùng chọn
            $tranghh = $_REQUEST["trang"];
        if($tranghh > $tongsotrang)
            $tranghh = $tongsotrang;
        else if($tranghh < 1)
            $tranghh = 1;
        $batdau = ($tranghh-1)*$soluong;          // mặt hàng bắt đầu sẽ lấy
        $mathang = $mh_db->laymathangphantrang($batdau, $soluong);
        include("main.php");
        break;
    case "xemnhom": 
        if(isset($_REQUEST["madm"])){
            $madm = $_REQUEST["madm"];
            $tendm = $dm_db->laytendanhmuctheoma($madm);    
            $mathang = $mh_db->laymathangtheodanhmuc($madm);
            include("group.php");
        }
        elseif (isset($_REQUEST["macd"])) {
            $macd = $_REQUEST["macd"];
            $tencd = $cd_db->laytenchudetheoma($macd);    
            $baiviet = $bv_db->laybaiviettheochude($macd);
            include("group-tintuc.php");
        }
        else{
            include("main.php");
        }
        break;
    case "xemchitiet": 
        if(isset($_GET["mahang"])){
            $mahang = $_GET["mahang"];
            // tăng lượt xem lên 1
            $mh_db->tangluotxem($mahang);
            // lấy thông tin chi tiết mặt hàng
            $mh = $mh_db->laymathangtheoma($mahang);
            // lấy các mặt hàng cùng danh mục
            $madm = $mh["madm"];
            $mathang = $mh_db->laymathangtheodanhmuc($madm);
            include("detail.php");
        }
        break;
    case "chovaogio":
        $errsoluong="";
        if(isset($_REQUEST["txtmahang"]))
            $mahang = $_REQUEST["txtmahang"];
        if(isset($_REQUEST["txtsoluong"]))
            $soluong = $_REQUEST["txtsoluong"];
        if($soluong<1)
        {
            $errsoluong="Số lượng phải lớn hơn 0";
        }
        else{
            themhangvaogio($mahang, $soluong);
            $giohang = laygiohang();
            include("cart.php");
        }
        
        break;
    case "xemgiohang":
        
        $giohang = laygiohang();
        include("cart.php");
        break;
    case "capnhatgiohang":
        if(isset($_REQUEST["mh"])){
            $mh = $_REQUEST["mh"];
        
            foreach($mh as $mahang => $soluong){
                if($soluong > 0)
                    capnhatsoluong($mahang, $soluong);
                else
                    xoamotmathang($mahang);
            }
        }
        $giohang = laygiohang();
        include("cart.php");
        break;
    case "xoagiohang":
        xoagiohang();
        $giohang = laygiohang();
        include("cart.php");
        break;
    case "themdonhang":
        $email=$_POST["txtemail"];
        $ten=$_POST["txthoten"];
        $sdt=$_POST["txtsdt"];
        $diachi=$_POST["txtdiachi"];
        if(!$khachhang_db->themkhachhang($email,$ten,$sdt,$diachi)){
            $tb="Không thêm được";
        }
        $makh=$khachhang_db->laythongtinkhachhang($email);
        if(!$donhang_db->themdonhang($makh["makh"],tinhtiengiohang())){
            $tb="Không thêm được";
        }
        else{
            $giohang = laygiohang();
            $maxid=$donhang_db->getmaxid();
            foreach($giohang as $mahang => $mh):
            if(!$ctdonhang_db->themctdonhang($maxid["madh"],$mahang,$mh["giaban"],$mh["soluong"],$mh["sotien"])){
                $tb="Có lỗi!";
            }
            endforeach;
            $dhcur=$donhang_db->laydonhang();
        }  
        include("dsdonhang.php");
        break;    
    default:
        break;
}
?>

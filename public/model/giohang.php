<?php
// Tạo mảng SESSION giohang rỗng nếu nó không tồn tại
if (!isset($_SESSION['giohang']) ) {
    $_SESSION['giohang'] = array();
}

// Hàm thêm sản phẩm vào giỏ
function themhangvaogio($mahang, $soluong) {
    //Tạo thể hiện của lớp mathang_db để sử dụng
    $mh_db = new MATHANG_DB();
    //Cập nhập Số lượng và SESSION - Làm tròn
    $_SESSION['giohang'][$mahang] = round($soluong, 0);
    //Lấy thông tin của sản phẩm dựa vào $mahang
    $mh = $mh_db->laymathangtheoma($mahang);
    //Cập nhật thông tin của Mã danh mục và Tên danh mục vào mảng SESSION
    $_SESSION['madm_cuoi'] = $mh['madm'];
    $_SESSION['tendm_cuoi'] = $mh['tendm'];
}

// Cập nhật số lượng của giỏ hàng
function capnhatsoluong($mahang, $soluong) {
    if (isset($_SESSION['giohang'][$mahang])) {
        $_SESSION['giohang'][$mahang] = round($soluong, 0);
    }
}

// Xóa một sản phẩm trong giỏ hàng
function xoamotmathang($mahang) {
    if (isset($_SESSION['giohang'][$mahang])) {
        unset($_SESSION['giohang'][$mahang]);
    }
}

// Hàm lấy mảng các sản phẩm trong giohang
function laygiohang() {
	
    //Tạo mảng rống để lưu danh sách sản phẩm trong giỏ
    $mh = array();
    $mh_db = new MATHANG_DB();
    
    //Duyệt mảng SESSION giohang và lấy từng Mã sản phẩm (mahang) và Số lượng (soluong)
    foreach ($_SESSION['giohang'] as $mahang => $soluong ) {
        // Gọi hàm lấy thông tin của sản phẩm theo mã sản phẩm
        $m = $mh_db->laymathangtheoma($mahang);
        $dongia = $m['giaban'];
        $solg = intval($soluong);        
        // Tính tiền
        $sotien = round($dongia * $soluong, 2);

        // Lưu thông tin trong mảng items để hiển thị lên giỏ hàng
        $mh[$mahang]['tenhang'] = $m['tenhang'];
        $mh[$mahang]['giaban'] = $dongia;
        $mh[$mahang]['soluong'] = $solg;
        $mh[$mahang]['sotien'] = $sotien;
    }
    return $mh;
}

// Đếm số sản phẩm trong giỏ hàng
function demhangtronggio() {
    return count($_SESSION['giohang']);
}

// Đếm tổng số lượng các sản phẩm trong giỏ
function demsoluongtronggio() {
    $tongsl = 0;
	//Lấy mảng các sản phẩm từ trong SESSION
    $giohang = laygiohang();
    foreach ($giohang as $item) {
        $tongsl += $item['soluong'];
    }
    return $tongsl;
}

// Tính tổng thành tiền trong giỏ hàng
function tinhtiengiohang () {
    $tong = 0;
    $giohang = laygiohang();
    foreach ($giohang as $mh) {
        $tong += $mh['giaban'] * $mh['soluong'];
    }
    return $tong;
}

// Xóa tất cả giỏ hàng
function xoagiohang() {
    $_SESSION['giohang'] = array();
}

?>
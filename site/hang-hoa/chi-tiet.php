<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/danhmuc.php';
    require '../../dao/binhLuan.php';
    require '../../dao/hanghoa.php';

    extract($_REQUEST);
    if(exsist_param("btn_binh_luan")) {
        $noi_dung = $_POST['noi_dung'];
        $ma_hh = $ma_hh;
        $ma_kh = $_SESSION['user']['ma_kh'];
        $ngay_bl = date("Y-m-d");

        binh_luan_add($noi_dung,$ma_hh,$ma_kh,$ngay_bl);
    }
    
    
    
    $hang_hoa = hanghoa_select_by_id($ma_hh);

    hang_hoa_tang_so_luot_xem ($ma_hh);
    $hh_cung_loai = hang_hoa_select_loai($hang_hoa["ma_loai"]);
    
    $binh_luan_list = binhLuan_select_by_hh_ngay_giam($ma_hh);

    $dsloai = danhMuc_selectAll();
    $view_name = "hang-hoa/chi-tiet-ui.php";
    require '../layout.php';
?>
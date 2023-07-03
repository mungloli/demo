<?php
    require '../../global.php';
    require "../../dao/pdo.php";
    require '../../dao/hanghoa.php';
    require '../../dao/danhmuc.php';

    extract($_REQUEST);
    if(exsist_param("ma_loai")) {
        $items = hang_hoa_select_loai($ma_loai);
    }
    else if(exsist_param("keywords")) {
        $items = hang_hoa_select_keyword($keywords);
    }
    else {
        $items = hanghoa_selectAll();
    }
    
    $list = 'liet-ke-ui.php';
    $MESSAGE = 'Sản phẩm';
    $dsloai = danhMuc_selectAll();
    $top10 = hang_hoa_top_10();
    
    $view_name = '../content-layout.php';
    require '../layout.php'
?>


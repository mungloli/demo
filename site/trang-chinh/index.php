<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/danhmuc.php';
    require '../../dao/hanghoa.php';


    extract($_REQUEST);

    if(exsist_param('gioi-thieu')) {
        $view_name = 'gioi-thieu.php';

    }
    else if(exsist_param('lien-he')) {
        $view_name = 'lien-he.php';

    }
    else if(exsist_param('san-pham')) {
        $items = hanghoa_selectAll();
        $list = '../hang-hoa/liet-ke-ui.php';
        $MESSAGE = 'Tất cả sản phẩm';
        $view_name = "../content-layout.php";
    }
    else {
        $dac_biet = hang_hoa_dac_biet();
        $view_name = 'trang-chinh/home/home.php';
    }
    $top10 = hang_hoa_top_10();
    $dsloai = danhMuc_selectAll();
    require "../layout.php";
?>
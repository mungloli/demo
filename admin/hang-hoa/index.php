<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/danhmuc.php";
    require "../../dao/hanghoa.php";
    check_login();

    extract($_REQUEST);
    if(exsist_param("add")){
        $lisDanhMuc = danhMuc_selectAll();
        $view_name="add.php";
    }
    else if(exsist_param("btn-insert")){

        
        require './validate_hang_hoa.php';
        
        if(empty($errors)) {
            $hinh = save_file('file', "$image_dir/image_products/");
            $ngay_nhap = $TODAY;
            hanghoa_add($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai);
            $items = hanghoa_selectAll();
            $view_name="list.php";
        }
        else {
            $lisDanhMuc = danhMuc_selectAll();
            $view_name="add.php";
        }

    }
    else if(exsist_param("btn_edit")){
        $lisDanhMuc = danhMuc_selectAll();
        $idHangHoa = $_GET['ma_hh'];
        $thisHangHoa = hanghoa_select_by_id($idHangHoa);

        $view_name="edit.php";
    }
    else if(exsist_param("btn-update")){
        require "./validate_hang_hoa.php";

        if(empty($errors)){
        hanghoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai);
        $items = hanghoa_selectAll();
        $view_name="list.php";
        }else{
            $lisDanhMuc = danhMuc_selectAll();
            $thisHangHoa = hanghoa_select_by_id($_POST['ma_hh']);
            $view_name="edit.php";
        }
        
    }
    else if(exsist_param("btn-delete")){
        $id_hh=$_GET['ma_hh'];
        hanghoa_delete($id_hh);

        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn-delete-all")){
        $list_id=$_POST['ma_hh'];
        hanghoa_delete($list_id);

        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    else{
        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    require "../layout.php";
?>
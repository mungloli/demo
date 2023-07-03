<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/khachHang.php";
    check_login();

    extract($_REQUEST);
    if(exsist_param("add")){
        $view_name="add.php";
    }
    else if(exsist_param("btn-insert")){
        require "./validate_khach_hang.php";
        if(empty($errors)) {
            
            $hinh = save_file('img-kh', "$image_dir/image_user/");
            khachHang_add($ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);
            $list_khachHang = khachhang_selectAll();
            $view_name="list.php";
        }
        else {
            $view_name="add.php";
        }
    }
    else if(exsist_param("edit")){
        $id_kh=$_GET['makh'];
        $khachHang=khachHang_select_by_id($id_kh);
        $view_name="edit.php";
    }
    else if(exsist_param("btn-update")  ) {

        require "./validate_khach_hang.php";
        if(empty($errors)){
            khachHang_update($ma_kh, $mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);

            $list_khachHang=khachhang_selectAll();
            $view_name="list.php";
        }
        else {

            $khachHang=khachHang_select_by_id($_POST['ma-kh']);
            $view_name="edit.php";
        }

    }
    else if(exsist_param("btn_delete")){
        $id_kh=$_GET['makh'];
        khachHang_delete($id_kh);

        $list_khachHang=khachhang_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn-delete-all")){
        $list_id=$_POST['ma_kh'];
        khachHang_delete($list_id);

        $list_khachHang=khachhang_selectAll();
        $view_name="list.php";
    }
    else{
        $list_khachHang=khachhang_selectAll();
        $view_name="list.php";
    }
    require "../layout.php";
?>
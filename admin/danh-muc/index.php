<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/danhmuc.php";
    check_login();

    extract($_REQUEST);
    if(exsist_param("add")){
        $view_name="add.php";
    }
    else if(exsist_param("btn-insert")){
        require "./validate_danh_muc.php";
        if(danhMuc_name($ten_loai)) {
            $errors['ten_loai'] = 'Tên loại đã tồn tại!';
            $items = danhMuc_selectAll();
            $view_name="add.php";
        }
        else if (empty($errors)){
            danhMuc_add($ten_loai);
            $items = danhMuc_selectAll();
            $view_name="list.php";
        }
        else{
            $items = danhMuc_selectAll();
            $view_name="add.php";
        }
        // $ten_loai = $_POST['ten-loai'];
        
    }
    else if(exsist_param("btn-edit")){
        if(isset($_GET['maloai'])){
            $id_loai=$_GET['maloai'];
        }
        $danhMuc=danhMuc_select_by_id($id_loai);
        $view_name="edit.php";
    }
    else if(exsist_param("btn-update")){
        require "./validate_danh_muc.php";
        if(empty($errors)){
            $ma_loai=$_POST['ma_loai'];
            danhMuc_update($ma_loai,$ten_loai);
            $items = danhMuc_selectAll();
            $view_name="list.php";
        }else{
            $danhMuc=danhMuc_select_by_id($_POST['ma_loai']);
            $view_name="edit.php";
        }
    }
    else if(exsist_param("btn-delete")){
        $id_loai=$_GET['maloai'];
        danhMuc_delete($id_loai);

        $items = danhMuc_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn-delete-all")){
    $list_id = $_POST['ma_loai'];
    danhMuc_delete($list_id);
        $items = danhMuc_selectAll();
        $view_name="list.php";
    }
    else{
        $items = danhMuc_selectAll();
        $view_name="list.php";
    }
    require "../layout.php";
?>
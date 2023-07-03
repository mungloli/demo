<?php


    // thêm danh muc
    function danhMuc_add($ten_loai){
        $sql="INSERT INTO `loai`(ten_loai) VALUES (?)";
        pdo_execute($sql,$ten_loai);
    }

    // select toàn bộ danh mục
    function danhMuc_selectAll(){
        $sql = "SELECT * FROM `loai`";
        return pdo_query($sql);
    }

    // select 1 danh mục
    function danhMuc_select_by_id($ma_loai){
        $sql = "SELECT * FROM loai WHERE ma_loai=?";
        return pdo_query_one($sql, $ma_loai);
    }

    // cập nhật 1 danh muc
    function danhMuc_update($ma_loai, $ten_loai){
        $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
        pdo_execute($sql, $ten_loai, $ma_loai);
    }

    // xóa 1 hoặc nhiều danh mục
    function danhMuc_delete($ma_loai){
        $sql="DELETE FROM `loai` WHERE ma_loai= ?";
        if(is_array($ma_loai)){
            foreach ($ma_loai as $loai){
                pdo_execute($sql,$loai);
            }
        }else{
            pdo_execute($sql,$ma_loai);
        }
    }

    // lây tên danh mục theo mã danh mục
    function danhMuc_name($ten_loai){
        $sql="SELECT * FROM `loai` WHERE ten_loai LIKE ?";
        return pdo_query($sql,"%$ten_loai%");
    }
?>
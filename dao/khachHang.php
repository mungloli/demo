<?php

    // thêm danh muc
    function khachHang_add($ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro){
        $sql="INSERT INTO `khach_hang`(`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES (? ,? ,? ,? ,? ,? ,? )";
        pdo_execute($sql,$ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);
    }

    // select toàn bộ danh mục
    function khachhang_selectAll(){
        $sql = "SELECT * FROM `khach_hang`";
        return pdo_query($sql);
    }

    // select 1 danh mục
    function khachHang_select_by_id($ma_kh){
        $sql = "SELECT * FROM `khach_hang` WHERE `ma_kh` = ?";
        return pdo_query_one($sql, $ma_kh);
    }

    // cập nhật 1 danh muc
    function khachHang_update($ma_kh, $mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro){
        $sql = "UPDATE `khach_hang` SET `ma_kh`=?, `mat_khau`=?,`ho_ten`=?,`kich_hoat`=?,`hinh`=?,`email`=?,`vai_tro`=? WHERE ma_kh=?";
        pdo_execute($sql,$ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro,$ma_kh);
    }

    // xóa 1 hoặc nhiều danh mục
    function khachHang_delete($ma_kh){
        $sql="DELETE FROM `khach_hang` WHERE ma_kh= ?";
        if(is_array($ma_kh)){
            foreach ($ma_kh as $khach_hang){
                pdo_execute($sql,$khach_hang);
            }
        }else{
            pdo_execute($sql,$ma_kh);
        }
    }

    function user_register($ma_kh, $mat_khau, $ho_ten, $hinh, $email){
        $sql="INSERT INTO `khach_hang`(`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES ( ?, ?, ?, '0', ?, ?, '0')";
        pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $hinh, $email);
    }

    function user_update($ma_kh, $ho_ten, $hinh, $email) {
        $sql="UPDATE khach_hang SET ho_ten = ?, hinh = ?, email = ? WHERE khach_hang.ma_kh = ?";
        pdo_execute($sql, $ho_ten, $hinh, $email, $ma_kh);
    }

    function user_change_password($ma_kh, $mat_khau) {
        $sql="UPDATE khach_hang SET mat_khau = ? WHERE khach_hang.ma_kh = ?";
        pdo_execute($sql, $mat_khau, $ma_kh);
    }
?>

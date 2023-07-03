<?php


    // thêm danh muc
    function hanghoa_add($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai){
        $sql="INSERT INTO `hang_hoa`(`ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `ma_loai`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai);
    }

    // select toàn bộ danh mục
    function hanghoa_selectAll(){
        $sql = "SELECT * FROM `hang_hoa`";
        return pdo_query($sql);
    }

    // select 1 danh mục
    function hanghoa_select_by_id($ma_hh){
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_one($sql, $ma_hh);
    }

    // cập nhật 1 danh muc
    function hanghoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai){
        $sql = "UPDATE `hang_hoa` SET `ten_hh`= ?,`don_gia`= ?,`giam_gia`= ?,`hinh`= ?,`ngay_nhap`= ?,`mo_ta`= ?,`dac_biet`= ?,`ma_loai`= ? WHERE `ma_hh` = ? ";
        pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai, $ma_hh);
    }

    // xóa 1 hoặc nhiều danh mục
    function hanghoa_delete($ma_hh){
        $sql="DELETE FROM `hang_hoa` WHERE ma_hh= ?";
        if(is_array($ma_hh)){
            foreach ($ma_hh as $item) {
                pdo_execute($sql,$item);
            }
        }else{
            pdo_execute($sql,$ma_hh);
        }
    }


    function hang_hoa_select_loai($ma_loai){
        $sql="SELECT * FROM hang_hoa WHERE ma_loai = ?";
        return pdo_query($sql, $ma_loai);
    }

    function hang_hoa_select_keyword($keyword){
        $sql="SELECT * FROM hang_hoa JOIN loai on loai.ma_loai=hang_hoa.ma_loai WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
        return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
    }

    function hang_hoa_tang_so_luot_xem ($ma_hh) {
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE hang_hoa.ma_hh = ?";
        pdo_execute($sql,$ma_hh);
    }

    function hang_hoa_top_10() {
        $sql = "SELECT * FROM `hang_hoa` ORDER BY so_luot_xem DESC LIMIT 10";
        return pdo_query($sql);
    }
    function hang_hoa_dac_biet() {
        $sql = "SELECT * FROM `hang_hoa` WHERE dac_biet = 1";
        return pdo_query($sql);
    }
?>
<?php


function binh_luan_add($noi_dung,$ma_hh,$ma_kh,$ngay_bl){
    $sql="INSERT INTO `binh_luan`(`noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES (?,?,?,?)";
    pdo_execute($sql,$noi_dung,$ma_hh,$ma_kh,$ngay_bl);
}

function binhLuan_update($ma_bl,$noi_dung,$ma_hh,$ma_kh,$ngay_bl){
    $sql="INSERT INTO `binh_luan` SET `noi_dung`=?, `ma_hh`=?, `ma_kh`=?, `ngay_bl`=?) WHERE ma_bl=?";
    pdo_execute($sql,$noi_dung,$ma_hh,$ma_kh,$ngay_bl,$ma_bl);
}
// lấy danh sách bình luận
function binhLuan_selectALl(){
    $sql = "SELECT * FROM binh_luan";
    return pdo_query($sql);
}

// lấy tên hàng hóa
function binhLuan_select_ten_hh($ma_hh){
    $sql="SELECT hang_hoa.ten_hh as ten_hh FROM binh_luan JOIN hang_hoa ON hang_hoa.ma_hh=binh_luan.ma_hh WHERE binh_luan.ma_hh=?";
    return pdo_query_value($sql,$ma_hh);
}

// lấy danh sách bình luận 1 id hang hoa
function binhLuan_select_ma_hh($ma_hh){
    $sql="SELECT binh_luan.noi_dung, binh_luan.ngay_bl,binh_luan.ma_bl, khach_hang.ho_ten AS ten_kh FROM `binh_luan` join khach_hang on khach_hang.ma_kh=binh_luan.ma_kh WHERE binh_luan.ma_hh=?";
    return pdo_query($sql,$ma_hh);
}

// thống kê bình luận
function thong_ke_binh_luan(){
    $sql = "SELECT hang_hoa.ma_hh, hang_hoa.ten_hh, COUNT(*) so_luong ,MIN(binh_luan.ngay_bl) cu_nhat, MAX(binh_luan.ngay_bl) moi_nhat FROM `binh_luan` join hang_hoa on hang_hoa.ma_hh=binh_luan.ma_hh GROUP BY hang_hoa.ma_hh,hang_hoa.ten_hh HAVING so_luong > 0";
    return pdo_query($sql);
}

// xóa 1 hoặc nhiều mục
function binhLuan_delete($ma_bl){
    $sql="DELETE FROM `binh_luan` WHERE ma_bl= ?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $binh_luan){
            pdo_execute($sql,$binh_luan);
        }
    }else{
        pdo_execute($sql,$ma_bl);
    }
}


// ----------
function binhLuan_select_by_hh_ngay_giam($ma_hh){
    $sql="SELECT binh_luan.*, khach_hang.ho_ten, khach_hang.hinh FROM binh_luan JOIN khach_hang on khach_hang.ma_kh = binh_luan.ma_kh WHERE binh_luan.ma_hh = ? ORDER BY ngay_bl DESC";
    return pdo_query($sql,$ma_hh);
}

?>
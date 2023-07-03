<?php 
function thong_ke_hang_hoa(){
    $sql = "SELECT loai.ma_loai, loai.ten_loai, COUNT(*) so_luong, MIN(hang_hoa.don_gia) gia_min, MAX(hang_hoa.don_gia) gia_max, AVG(hang_hoa.don_gia) gia_avg FROM hang_hoa JOIN loai ON loai.ma_loai=hang_hoa.ma_loai GROUP BY loai.ma_loai, loai.ten_loai";
    return pdo_query($sql);
}

?>
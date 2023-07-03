<?php
$errors = [];
// ten hh
if(empty($_POST['ten_hh'])) {
    $errors['ten_hh'] = 'Vui lòng điền vào trường này!';
}
else {
    if(strlen($_POST['ten_hh']) >=50) {
        $errors['ten_hh'] = 'Độ dài không quá 50 ký tự!';
    }
    else {
        $ten_hh = $_POST['ten_hh'];
    }
}

// don_gia
if(empty($_POST['don_gia'])) {
    $errors['don_gia'] = 'Vui lòng điền vào trường này!';
}
else {
    if((int)$_POST['don_gia'] <= 0) {
        $errors['don_gia'] = 'Giá phải lớn hơn 0!';
    }
    else {
        $don_gia = $_POST['don_gia'];
    }
}

// giam_gia
if($_POST['giam_gia'] == '') {
    $errors['giam_gia'] = 'Vui lòng điền vào trường này!';
}
else {
    if((int)$_POST['giam_gia'] < 0) {
        $errors['giam_gia'] = 'Giá phải >= 0!';
    }
    else {
        $giam_gia = $_POST['giam_gia'];
    }
}

// dac_biet
if(isset($_POST['dac_biet']) && ($_POST['dac_biet'] == '0' || $_POST['dac_biet'] == '1')) {
    $dac_biet = $_POST['dac_biet'];
}
else {
    $errors['dac_biet'] = 'Vui lòng điền vào trường này!';
}

// ma_loai
if(empty($_POST['ma_loai'])) {
    $errors['ma_loai'] = 'Vui lòng điền vào trường này!';
}
else {
    $ma_loai = $_POST['ma_loai'];
}

// mo_ta
if(empty($_POST['mo_ta'])) {
    $errors['mo_ta'] = 'Vui lòng điền vào trường này!';
}
else {
    $mo_ta = $_POST['mo_ta'];
}

// hinh
$typeImg = ['png', 'jpg', 'jpeg', 'webp'];
$typeFile = pathinfo($_FILES["file"]['name'], PATHINFO_EXTENSION);
if(strlen($_FILES["file"]['name']) == 0 && isset($_POST['old_hinh'])){
    $hinh=$_POST['old_hinh'];
}else if(strlen($_FILES["file"]['name']) == 0 ) {
    $errors['file'] = 'Vui lòng chọn file!';
}
else {
    if(!in_array(strtolower($typeFile), $typeImg)) {
        $errors['file'] = 'file phai co dinh dang la png, png, jpeg, webp';
    }
    else {
        if($_FILES["file"]['size'] > (2*1024*1024) ) {
            $errors['file'] = 'Kích thước không quá 2MB!';
        }else{
        $hinh=save_file('file', "$image_dir/image_products/");
        }
    }
}
?>
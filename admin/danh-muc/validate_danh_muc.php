<?php 
    $errors=[];
    // ten danh muc
    if(empty($_POST['ten_loai'])) {
        $errors['ten_loai'] = 'Vui lòng điền vào trường này!';
    }
    else {
        if(strlen($_POST['ten_loai']) >=10) {
            $errors['ten_loai'] = 'Độ dài không quá 10 ký tự!';
        }
        else {
            $ten_loai = $_POST['ten_loai'];
        }
    }
?>
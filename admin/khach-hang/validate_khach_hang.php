<?php 
    $errors=[];
    // mã kh
    if(isset($_POST['btn-insert'])){
    if(empty($_POST['ma-kh'])){
        $errors['ma-kh']="Vui lòng điền vào trường này";
    }else if(strlen($_POST['ma-kh']) >=20){
        $errors['ma-kh']="Độ dài kí tự không quá 20 ký tự";
    }
    else if(khachHang_select_by_id($_POST['ma-kh'])){
        $errors['ma-kh']="Tài khoản đã tồn tại";
    }
    else {
        $ma_kh=$_POST['ma-kh'];
    }
    }else{
        $ma_kh=$_POST['ma-kh'];
    }

    // ten kh
    if(empty($_POST['ten-kh'])){
        $errors['ten-kh']="Vui lòng điền vào trường này";
    }else if(strlen($_POST['ten-kh']) >=50){
        $errors['ten-kh']="Độ dài không quá 50 kí tự";
    }
    else{
        $ho_ten=$_POST['ten-kh'];
    }


    // mat khau
    if(empty($_POST['password-confirm'])){
        $errors['password-confirm']="Vui lòng điền vào trường này";
     }else{
        $mat_khau_2=$_POST['password-confirm'];
     }


    if(empty($_POST['password-kh'])){
        $errors['password-kh']="Vui lòng điền vào trường này";
     }else 
     if(!preg_match("/^(?=.*\d)([A-Za-z]).{6,20}$/",$_POST['password-kh'])){
        $errors['password-kh']="Vui lòng nhập mật khẩu có ít nhất 1 chữ số và độ dài từ 6 đến 20 kí tự";
    }else if($_POST['password-kh'] != $_POST['password-confirm']){
        $errors['password-confirm']="Xác nhận mật khẩu không chính xác";
    }else{
        $mat_khau=$_POST['password-kh'];
    }

    //email
    if(empty($_POST['email-kh'])){
        $errors['email-kh']="Vui lòng điền vào trường này";
     }else
    if(!preg_match("/^[A-Za-z0-9_.]{4,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/",$_POST['email-kh'])){
        $errors['email-kh']="Chưa nhập đúng định dạng email";
    }else{
        $email=$_POST['email-kh'];
    }

    // check radio kich hoat
    if(isset($_POST['kich-hoat']) && ($_POST['kich-hoat'] == '0' || $_POST['kich-hoat'] == '1')){
        
        $kich_hoat=$_POST['kich-hoat'];
    }else{
        $errors['kich-hoat']="Vui lòng điền vào trường này";
    }


    // check raido vai tro
    if(isset($_POST['vai-tro']) && ($_POST['vai-tro'] == '0' || $_POST['vai-tro'] == '1')){
        $vai_tro=$_POST['vai-tro'];
    }else{
        $errors['vai-tro']="Vui lòng điền vào trường này";
    }


    // hinh
    $typeImg = ['png', 'jpg', 'jpeg', 'webp'];
    $typeFile = pathinfo($_FILES["img-kh"]['name'], PATHINFO_EXTENSION);
    if(strlen($_FILES["img-kh"]['name']) == 0 && isset($_POST['old_img-kh'])){
        $hinh=$_POST['old_img-kh'];
    }else if(strlen($_FILES["img-kh"]['name']) == 0) {
        $errors['img-kh'] = 'Vui lòng chọn file!';
    }
    else {
        if(!in_array(strtolower($typeFile), $typeImg)) {
            $errors['img-kh'] = 'file phai co dinh dang la png, png, jpeg, webp';
        }
        else {
            if($_FILES["img-kh"]['size'] > (2*1024*1024) ) {
                $errors['img-kh'] = 'Kích thước không quá 2MB!';
            }else{
                $hinh=save_file('img-kh', "$image_dir/image_user/");
            }
        }
    }

?>


<?php
// function validateFileImg($hinh) {
//     $errors = [];
//     $typeImg = ['png', 'jpg', 'jpeg', 'webp'];
//     $typeFile = pathinfo($_FILES[$hinh]['name'], PATHINFO_EXTENSION);
//     if (strlen($_FILES[$hinh]['name']) == 0) {
//         $errors['hinh'] = 'Vui lòng chọn file!';
//     } else {
//         if (!in_array(strtolower($typeFile), $typeImg)) {
//             $errors['hinh'] = 'File phải có định dạng là png, jpg, jpeg, webp!';
//         } else {
//             if ($_FILES[$hinh]['size'] > (2 * 1024 * 1024)) {
//                 $errors['hinh'] = 'Kích thước không quá 2 MB!';
//             }
//         }
//     }
//     return $errors;
// }

function validateFileImg($hinh) {
    $errors = [];
    $typeImg = ['png', 'jpg', 'jpeg', 'webp'];
    $typeFile = pathinfo($_FILES[$hinh]['name'], PATHINFO_EXTENSION);
    if (strlen($_FILES[$hinh]['name']) == 0) {
        $errors['hinh'] = 'Vui lòng chọn file!';
    } 
    else if(!in_array(strtolower($typeFile), $typeImg)){
        $errors['hinh'] = 'File phải có định dạng là png, jpg, jpeg, webp!';
    }
    else if($_FILES[$hinh]['size'] > (2 * 1024 * 1024)) {
        $errors['hinh'] = 'Kích thước không quá 2 MB!';
    }
    else if($_FILES[$hinh]['name'] > 46) {
        $errors['hinh'] = 'Tên file quá dài!';
    }
    return $errors;
}

function validateRegister($ma_kh, $mat_khau, $re_mat_khau, $ho_ten, $email) {
    $errors = [];
    // ma kh
    if (strlen($ma_kh) == 0) {
        $errors['ma_kh'] = "Vui lòng nhập tài khoản!";
    } else if (strlen($ma_kh) > 16 || strlen($ma_kh) < 6) {
        $errors['ma_kh'] = "Tài khoản phải 6 - 20 ký tự!";
    }

    // mat_khau
    if (strlen($mat_khau) == 0) {
        $errors['mat_khau'] = "Vui lòng nhập mật khẩu!";
    } else if (strlen($mat_khau) > 16 || strlen($mat_khau) < 6) {
        $errors['mat_khau'] = "Mật khẩu phải 6 - 16 ký tự!";
    }

    // re mat_khau
    if (strlen($re_mat_khau) == 0) {
        $errors['re_password'] = "Vui lòng nhập lại mật khẩu!";
    } else if ($re_mat_khau != $mat_khau) {
        $errors['re_password'] = "Mật khẩu không khớp!";
    }

    // ho ten
    if (strlen($ho_ten) == 0) {
        $errors['ho_ten'] = "Vui lòng nhập họ tên!";
    } else if (strlen($ho_ten) > 30 || strlen($ho_ten) < 6) {
        $errors['ho_ten'] = "Họ tên phải 6 - 30 ký tự!";
    }

    // email
    if (strlen($email) == 0) {
        $errors['email'] = "Vui lòng nhập Email!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email chưa đúng định dạng!";
    }
    return $errors;
}

function validateLogin($ma_kh, $mat_khau) {
    $errors = [];
    // ma kh
    if (strlen($ma_kh) == 0) {
        $errors['ma_kh'] = "Vui lòng nhập tài khoản!";
    }

    // mat_khau
    if (strlen($mat_khau) == 0) {
        $errors['mat_khau'] = "Vui lòng nhập mật khẩu!";
    }
    return $errors;
}

function validateGetPassword($ma_kh, $email) {
    $errors = [];
    // ma kh
    if (strlen($ma_kh) == 0) {
        $errors['ma_kh'] = "Vui lòng nhập tài khoản!";
    }

    // email
    if (strlen($email) == 0) {
        $errors['email'] = "Vui lòng nhập Email!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email chưa đúng định dạng!";
    }
    return $errors;
}

function validateChangeInfo($ho_ten, $email) {
    $errors = [];
    // ho ten
    if (strlen($ho_ten) == 0) {
        $errors['ho_ten'] = "Vui lòng nhập họ tên!";
    } else if (strlen($ho_ten) > 30 || strlen($ho_ten) < 6) {
        $errors['ho_ten'] = "Họ tên phải 6 - 30 ký tự!";
    }

    // email
    if (strlen($email) == 0) {
        $errors['email'] = "Vui lòng nhập Email!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email chưa đúng định dạng!";
    }
    return $errors;
}

function validateChangePassword($mat_khau, $mat_khau2, $mat_khau3) {
    $errors = [];
    // mat_khau
    if (strlen($mat_khau) == 0) {
        $errors['mat_khau'] = "Vui lòng nhập mật khẩu cũ!";
    }

    // mat_khau moi
    if (strlen($mat_khau2) == 0) {
        $errors['mat_khau2'] = "Vui lòng nhập mật khẩu mới!";
    } else if (strlen($mat_khau2) > 16 || strlen($mat_khau2) < 6) {
        $errors['mat_khau2'] = "Mật khẩu mới phải 6 - 16 ký tự!";
    }

    // re mat_khau moi
    if (strlen($mat_khau3) == 0) {
        $errors['mat_khau3'] = "Vui lòng nhập lại mật khẩu mới!";
    } else if ($mat_khau3 != $mat_khau2) {
        $errors['mat_khau3'] = "Mật khẩu mới không khớp!";
    }
    return $errors;
}
?>
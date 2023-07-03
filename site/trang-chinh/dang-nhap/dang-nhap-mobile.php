<?php
if (exsist_param("btn_logout")) {
    session_unset();

    session_destroy();
    delete_cookie('info-user');
    header("location: $url_site/trang-chinh");
}

if (isset($_SESSION['user'])) {
?>
    <div class="user_header">
        <img src="<?php echo "$url_content/images/image_user/$info_user[hinh]";?>" alt="">
    </div>
    <a href="<?php echo "$url_site/info-user"?>" class="btn2 ml-2">Thông tin</a>
    <?php
    if ($info_user['vai_tro']) {
        echo "<a href='$url_admin" . "/trang-chinh' class='btn2 mx-2 '>Quản lý</a>";
    }
    ?>
    <a href="?btn_logout" class="btn2 ml-1">Đăng xuất</a>
<?php
} else {
?>
    <a href="<?=$url_site?>/tai-khoan/index.php?btn_form_login" class="btn1 mx-2 ">Đăng nhập</a>
    <a href="<?=$url_site?>/tai-khoan" class="btn1 ">Đăng Ký</a>
<?php
}
?>
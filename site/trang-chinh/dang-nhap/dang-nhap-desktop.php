<?php
    if(exsist_param("btn_logout")) {
        session_unset();
        session_destroy();

        delete_cookie('info-user');
        header("location: $url_site/trang-chinh");
    }
if (isset($_SESSION['user'])) {
    $info_user = $_SESSION['user'];
?>
    <div class="user_header ml-2 relative hidden lg:block">
        <img class="h-12 w-12 object-cover" src="<?php echo "$url_content/images/image_user/$info_user[hinh]";?>" alt="">
        <ul class="user_child">
            <li><a href="<?php echo "$url_site/info-user"?>">Thông tin</a></li>
            <?php
                if($info_user['vai_tro']) {
                    echo "<li><a href='$url_admin"."/trang-chinh'>Quản trị</a></li>";
                }
            ?>
            
            <li><a href="?btn_logout">Đăng xuất</a></li>
        </ul>
    </div>
<?php
}
else {
?>
    <a href="<?=$url_site?>/tai-khoan/index.php?btn_form_login" class="btn1 text-center mx-2 hidden lg:block">Đăng nhập</a>
    <a href="<?=$url_site?>/tai-khoan" class="btn1 text-center hidden lg:block">Đăng Ký</a>
<?php
}
?>

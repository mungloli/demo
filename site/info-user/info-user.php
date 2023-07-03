<h3 class="text-2xl font-['Berkshire_Swash'] mb-4">Thông tin tài khoản</h3>
<?php 
    if(strlen($MESSAGE_SUCCESS) > 0) {
        echo "<p><i class='fa-solid fa-circle-check text-green-500'></i> $MESSAGE_SUCCESS</p>";
    }
    if(strlen($MESSAGE_ERROR) > 0) {
        echo "<p><i class='fa-sharp fa-solid fa-circle-exclamation text-red-500'></i> $MESSAGE_ERROR</p>";
    }
?>
<div>
    <div class="normal-case w-full sm:w-1/2 lg:w-1/3">
        <img class="w-full" src="<?php echo "$url_content/images/image_user/$user[hinh]";?>" alt="">
        <div class="my-3">
            <h6 class="">Họ tên: <span class="font-bold"><?=$user['ho_ten']?></span></h6>
            <p>Email: <span class="font-bold"><?=$user['email']?></span></p>
        </div>
        <div class="flex flex-col items-start space-y-1">
            <a href="index.php?btn_change_pass" class="btn1">ĐỔi mật khẩu</a>
            <a href="index.php?btn_change_info" class="btn1">Cập nhật thài khoản</a>
        </div>
    </div>
</div>
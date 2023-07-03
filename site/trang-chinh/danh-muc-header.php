<?php
    foreach ($dsloai as $loai) {
    $link = '../hang-hoa/liet-ke.php?ma_loai='.$loai['ma_loai'];
?>
    
    <li><a href="<?=$link?>"><?=$loai['ten_loai']?></a></li>
<?php
    }
?>

<h3 class="text-2xl font-['Berkshire_Swash'] mb-4"><?= count($items) ?> Sản phẩm</h3>
<div class="grid gap-7 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">

    <?php
    foreach ($items as $item) {
        $link = $url_site . "/hang-hoa/chi-tiet.php?ma_hh=" . $item['ma_hh'];
    ?>
        <div class="product_item">
            <div class="product_img relative">
                <img src="<?php echo "$url_content/images/image_products/" . $item['hinh'] ?>" alt="">
                <div class="overlay absolute w-full h-full bg-white/50 top-0 left-0 flex items-center justify-center">
                    <div class="flex space-x-2">
                        <a href="<?= $link ?>" class="btn2 !min-w-[40px] w-11 h-11 flex items-center justify-center"><i class="fa-solid fa-eye"></i></a>
                        <a href="javascript:void(0);" class="btn2 !min-w-[40px] w-11 h-11 flex items-center justify-center"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
            <div class="product_content">
                <a href="<?= $link ?>">
                    <h3><?= $item['ten_hh'] ?></h3>
                </a>
                <hr>
                <p><span>$ <?= number_format($item['don_gia'] - $item['giam_gia']) ?></span>/1kg</p>
                <?php
                if ($item['giam_gia'] > 0) {
                ?>
                    <div><span class="line-through text-gray-400"><?= number_format($item['don_gia']) ?>/1kg</span> -<?= ceil(discountPrecent($item['don_gia'], $item['giam_gia'])) ?>%</div>
                <?php

                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>

</div>
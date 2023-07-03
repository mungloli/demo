<section class="our_products py-8 bg-[#f3f6f5]">
    <div class="container mx-auto">
        <div class="title font-['Berkshire_Swash']">
            <h2>Sản Phẩm đặc biệt của chúng tôi</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php
        $stt = 0;
        foreach ($dac_biet as $item) {
            $stt += 1;
            $link = $url_site . "/hang-hoa/chi-tiet.php?ma_hh=" . $item['ma_hh'];
        ?>
            <!-- <a href="<?=$link?>" class="block"> -->
                <div class="product_item">
                    <div class="product_img relative">
                        <img src="<?=$url_content?>/images/image_products/<?=$item['hinh']?>" alt="">
                        <div class="overlay absolute w-full h-full bg-white/50 top-0 left-0 flex items-center justify-center">
                            <div class="flex space-x-2">
                                <a href="<?=$link?>" class="btn2 min-w-[40px] w-11 h-11 flex items-center justify-center"><i class="fa-solid fa-eye"></i></a>
                                <a href="javascript:void(0);" class="btn2 min-w-[40px] w-11 h-11 flex items-center justify-center"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_content">
                        <a href="<?=$link?>">
                            <h3><?=$item['ten_hh']?></h3>
                        </a>
                        <hr>
                        <p><span><?=number_format($item['don_gia'] - $item['giam_gia'])?> đ</span>/1kg</p>
                        <?php
                                if($item['giam_gia'] > 0) {
                            ?>
                                    <div><span class="line-through text-gray-400"><?= number_format($item['don_gia']) ?> đ/1kg</span> -<?=ceil(discountPrecent ($item['don_gia'], $item['giam_gia']))?>%</div>
                            <?php
                                    
                                }
                            ?>
                    </div>
                </div>
            <!-- </a> -->
        <?php
        }
        ?>
        </div>


    </div>
</section>
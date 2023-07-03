<!--  -->
<section class="mt-[178px] md:mt-[130px] lg:mt-[142px] flex items-center justify-center
    bg-[url('<?= $url_content ?>/image-layout/breadcrumb-banner.webp')]
    bg-cover
    border-t-2
    border-gray-300
    ">
    <div class="text-center py-9">
        <h2 class="pb-5 font-['Berkshire_Swash'] text-4xl">Cửa hàng</h2>
        <p>Trang chủ / Chi tiết sản phẩm</p>
    </div>
</section>
<section class="detail py-14">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-8 min-h-[400px] lg:grid-cols-5">
            <div class="col-span-1 lg:col-span-2 border-2 border-[#e5e5e5] max-w-[500px] w-full mx-auto bg-white">
                <img class="w-full h-full object-cover" src="<?php echo "$url_content/images/image_products/$hang_hoa[hinh]" ?>" alt="">
            </div>
            <div class="col-span-1 lg:col-span-3 py-3">
                <h3 class="text-3xl hover:text-[#62d2a2]">
                    <?= $hang_hoa['ten_hh'] ?>
                </h3>
                <div class="w-28 h-[1px] bg-gray-300 my-3 duration-300"></div>
                <p class="text-[#62d2a2] text-xl font-bold"><?php echo number_format($hang_hoa['don_gia'] - $hang_hoa['giam_gia']) ?> đ</p>
                <?php
                if ($hang_hoa['giam_gia'] > 0) {
                ?>
                    <div><span class="line-through text-gray-400"><?= number_format($hang_hoa['don_gia']) ?> đ/1kg</span> -<?= ceil(discountPrecent($hang_hoa['don_gia'], $hang_hoa['giam_gia'])) ?>%</div>
                <?php

                }
                ?>
                <p class="py-5 text-[#666]">
                    <?= $hang_hoa['mo_ta'] ?>
                </p>
                <div class="flex items-center flex-col sm:flex-row">
                    <form class="flex items-center flex-col sm:flex-row sm:space-x-2 space-y-2 sm:space-y-0">
                        <input type="number" name="" id="" value="1" min="1" max="100" class="
                            bg-gray-50 
                            border 
                            border-[#62d2a2]
                            text-gray-900 
                            text-lg
                            rounded-lg 
                            outline-none
                            block 
                            w-16
                            px-2
                            py-1
                            ">
                        <button class="btn1">Thêm vào giỏ hàng</button>
                    </form>
                    <div class="sm:ml-1 mt-2 sm:mt-0">
                        <button class="btn2" style="min-width: 0; padding: 8px 12px;">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        <button class="btn2" style="min-width: 0; padding: 8px 12px;">
                            <i class="fa-solid fa-shuffle"></i>
                        </button>
                    </div>

                </div>
                <h5 class="text-sm my-3">
                    Lượt xem: <span class="text-[#62d2a2] text-lg font-semibold"><?= $hang_hoa['so_luot_xem'] ?></span>
                </h5>
                <h5 class="text-sm my-3">
                    Trạng thái: <span class="text-[#62d2a2] text-lg font-semibold">Còn hàng</span>
                </h5>
                <div class="flex items-center space-x-2">
                    <h5 class="font-semibold"> Chia sẻ: </h5>
                    <div class="flex items-center space-x-1">
                        <a href="#" class="
                            flex w-10 h-10 items-center justify-center 
                            border-gray-300 rounded-full text-gray-500 
                            hover:bg-[#62d2a2] hover:text-white
                            hover:border-[#62d2a2]
                            duration-300
                            " style="border-width: 1px;">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="
                            flex w-10 h-10 items-center justify-center 
                            border-gray-300 rounded-full text-gray-500 
                            hover:bg-[#62d2a2] hover:text-white
                            hover:border-[#62d2a2]
                            duration-300
                            " style="border-width: 1px;">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="
                            flex w-10 h-10 items-center justify-center 
                            border-gray-300 rounded-full text-gray-500 
                            hover:bg-[#62d2a2] hover:text-white
                            hover:border-[#62d2a2]
                            duration-300
                            " style="border-width: 1px;">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="#" class="
                            flex w-10 h-10 items-center justify-center 
                            border-gray-300 rounded-full text-gray-500 
                            hover:bg-[#62d2a2] hover:text-white
                            hover:border-[#62d2a2]
                            duration-300
                            " style="border-width: 1px;">
                            <i class="fa-brands fa-twitter"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->

<!-- comment -->
<section class="comment">
    <div class="container mx-auto">
        <div class="relative">
            <h3 class="w-72 text-white text-xl bg-[#62d2a2] px-4 py-3 rounded-tr-2xl">Bình Luận(<?= count($binh_luan_list) ?>)</h3>
            <!-- 123 -->
            <div class="px-12 py-8 pb-16 border-[#62d2a2] space-y-6 max-h-[600px] overflow-y-scroll" style="border-width: 1px;">
                <?php
                foreach ($binh_luan_list as $item) {
                ?>
                    <div class="flex items-start flex-col sm:flex-row sm:space-x-3 space-y-3 sm:space-y-0">
                        <img class="w-16" src="<?php echo "$url_content/images/image_user/$item[hinh]" ?>" alt="">
                        <div class="px-6 py-5 border-gray-300 w-full" style="border-width: 1px;">
                            <p class="text-lg font-bold"><?= $item['ho_ten'] ?> -
                                <span class="text-sm font-normal"><?= $item['ngay_bl'] ?></span>
                            </p>
                            <p>
                                <?= $item['noi_dung'] ?>
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="absolute bottom-0 left-0 w-full px-12 py-3  bg-green-100 border-[#62d2a2] border-t-transparent" style="border-width: 1px;">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <form action="chi-tiet.php?ma_hh=<?= $hang_hoa['ma_hh'] ?>" method="post" class="w-full flex">
                        <input required type="text" name="noi_dung" id="username" placeholder="Nhập bình luận" class="w-full text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
                        <button name="btn_binh_luan" class="btn1 ml-2">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                <?php
                } else {
                ?>
                    <h3 class="font-medium">Vui lòng đăng nhập để bình luận về sản phẩm này</h3>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- sp lien quan -->
<section class="mt-8">
    <div class="container mx-auto">
        <h3 class="text-2xl font-['Berkshire_Swash'] mb-4">Sản phẩm cùng loại</h3>
        <ul class="grid gap-7 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
            <?php
            foreach ($hh_cung_loai as $item) {
                $link = $url_site . "/hang-hoa/chi-tiet.php?ma_hh=" . $item['ma_hh'];
            ?>
                <a href="<?= $link ?>">
                    <li class="flex items-center">
                        <div class="w-20 border-gray-200 rounded overflow-hidden" style="border-width: 1px;">
                            <img src="<?php echo "$url_content/images/image_products/$item[hinh]" ?>" alt="">
                        </div>
                        <div class="pl-5">
                            <h4 class="text-lg"><?= $item['ten_hh'] ?></h4>
                            <div class="w-14 h-[1px] bg-gray-300 my-1"></div>
                            <p class="text-[#62d2a2] font-bold "><?= number_format($item['don_gia'] - $item['giam_gia']) ?> đ/1kg</p>
                            <?php
                                if($item['giam_gia'] > 0) {
                            ?>
                                <div class="text-sm"><span class="line-through text-gray-400"><?= number_format($item['don_gia']) ?> đ/1kg</span> -<?=ceil(discountPrecent ($item['don_gia'], $item['giam_gia']))?>%</div>
                            <?php
                                    
                                }
                            ?>
                        </div>
                    </li>
                </a>
            <?php
            }
            ?>

        </ul>
    </div>
</section>
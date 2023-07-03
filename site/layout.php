

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=$url_content?>/image-layout/logo-icon.png" type="image/x-icon">
    <title>Food Market</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lora:wght@500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- slick slide -->
    <link rel="stylesheet" type="text/css" href="<?=$url_content?>/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?=$url_content?>/slick/slick-theme.css" />
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- my css -->
    <link rel="stylesheet" href="<?=$url_content?>/style/style.css">
    <link rel="stylesheet" href="<?=$url_content?>/style/banner.css">
    <link rel="stylesheet" href="<?=$url_content?>/style/title.css">
    <link rel="stylesheet" href="<?=$url_content?>/style/categorys.css">
    <link rel="stylesheet" href="<?=$url_content?>/style/topproducts.css">
    <link rel="stylesheet" href="<?=$url_content?>/style/aboutus.css">
    <style>
        .error {
            font-size: 14px;
            color: red;
        }
    </style>
</head>

<body class="font-['Raleway']">
    <!-- header -->
    <header class="py-0 lg:py-4 bg-white z-50">
        <div class="
        header_top 
        container 
        mx-auto 
        flex 
        justify-between 
        items-center
        flex-col
        pt-4
        lg:pt-0
        md:flex-row
        ">
            <a href="<?=$url_site?>/trang-chinh/index.php">
                <img class="w-56" src="<?=$url_content?>/image-layout/logo3.png" alt="">
            </a>
            <div class="flex items-center">
                    <!-- search -->
                    <?php require "trang-chinh/search.php"?>
                    <!-- tai khoan -->
                    <?php require "trang-chinh/dang-nhap/dang-nhap-desktop.php"?>
                <div class="cart_header relative">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="quantity_cart">16</span>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="header_bottom z-50 lg:z-0 ">
            <div class="
            container 
            mx-auto 
            flex 
            justify-between 
            lg:justify-end 
            items-center 
            bg-[#62d2a2]
            lg:bg-white
            lg:mt-0
            
            ">
                <img class="logo_scroll w-56 mr-auto hidden lg:block" src="<?=$url_content?>/image-layout/logo3.png" alt="">
                <h3 class="lg:hidden text-lg text-white font-semibold py-2">MENU</h3>
                <nav class="hidden lg:flex items-center menu">
                    <ul class="flex">
                        <li><a href="<?=$url_site?>/trang-chinh/index.php">Trang chủ</a></li>
                        <li class="menu_item ">
                            <a href="#">Danh mục <i class="fa-solid fa-chevron-down"></i></a>
                            <ul class="child_menu">
                                <!-- danh muc header -->
                                <?php require "trang-chinh/danh-muc-header.php"?>
                            </ul>
                        </li>
                        <li><a href="<?=$url_site?>/trang-chinh/index.php?san-pham">Sản phẩm</a></li>
                        <li><a href="<?=$url_site?>/trang-chinh/index.php?gioi-thieu">Giới thiệu</a></li>
                        <li><a href="<?=$url_site?>/trang-chinh/index.php?lien-he">Liên hệ</a></li>
                    </ul>
                </nav>
                <div class="btn_menu_mobile lg:hidden">
                    <button class="text-white text-2xl">
                        <i class="fa-solid fa-bars"></i>
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>

            <!--  -->
            <nav class="lg:hidden flex flex-col items-center menu menu_mobile">
                <ul class="flex flex-col w-full text-center">
                    <li><a href="index.php">Trang chủ</a></li>
                    <!-- show -->
                    <li class="menu_item_mobile ">
                        <a id="showMenuChildMobile" href="javascript:void(0);">Danh mục <i
                                class="fa-solid fa-chevron-down"></i></a>
                        <ul class="child_menu_mobile">
                            <!-- danh muc header -->
                            <?php require "trang-chinh/danh-muc-header.php"?>
                        </ul>
                    </li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="index.php?gioi-thieu">Giới thiệu</a></li>
                    <li><a href="index.php?lien-he">Liên hệ</a></li>
                    <li class="flex justify-center pb-2 items-center flex-wrap">
                        <!-- tai khoan mobile -->
                        <?php require "trang-chinh/dang-nhap/dang-nhap-mobile.php"?>
                    </li>
                </ul>
            </nav>
            <!--  -->
        </div>
    </header>

    <!-- trang home -->
    <?php include $view_name;?>


    <!-- footer -->
    <footer class="mt-14 bg-[#f3f6f5] text-[#666]">
        <div class="container mx-auto ">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 py-8">
                <div>
                    <img
                    class="w-48"
                    src="<?=$url_content?>/image-layout/logo3.png" alt="">
                    <p class="text-sm mt-2 mb-5">
                        Địa chỉ mua thực phẩm online tại Hà Nội. Chuyên bán hải sản, thịt cá, rau sạch, 
                        củ quả, trái cây, thực phẩm tươi sống.
                    </p>
                    <div class="flex space-x-2">
                        <div class="w-10 h-10 bg-[#3a589d] text-white rounded-full flex items-center justify-center cursor-pointer">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div class="w-10 h-10 bg-[url('<?=$url_content?>/image-layout/color-instagram.webp')] bg-cover text-white rounded-full flex items-center justify-center cursor-pointer">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div class="w-10 h-10 bg-black text-white rounded-full flex items-center justify-center cursor-pointer">
                            <i class="fa-brands fa-tiktok"></i>
                        </div>
                        <div class="w-10 h-10 bg-[#fd0101] text-white rounded-full flex items-center justify-center cursor-pointer">
                            <i class="fa-brands fa-youtube"></i>
                        </div>
                    </div>
                </div>
                <div class="text-sm space-y-3">
                    <h3 class="text-lg">THÔNG TIN LIÊN HỆ</h3>
                    <p class="">
                        <i class="fa-solid fa-location-dot"></i>
                        Tòa nhà FPT Polytechnic, phố Trịnh Văn Bô, phường Phương Canh, quận Nam Từ Liêm, TP Hà Nội
                    </p>
                    <p class="">
                        <i class="fa-solid fa-phone"></i>
                        (024) 7300 1955
                    </p>
                    <p class="">
                        <i class="fa-solid fa-envelope"></i>
                        caodang@fpt.edu.vn
                    </p>
                </div>
                <div class="text-sm space-y-3">
                    <h3 class="text-lg">HỖ TRỢ KHÁCH HÀNG</h3>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Hỗ trợ khách hàng: hotro@fpt.edu.vn</a>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Phương thức vận chuyển</a>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Các câu hỏi thường gặp</a>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Hướng dẫn đặt hàng</a>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Trung Tâm Trợ Giúp</a>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Trả Hàng & Hoàn Tiền</a>
                </div>
                <div class="text-sm space-y-3">
                    <h3 class="text-lg">GIỚI THIỆU</h3>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Điều khoản sử dụng</a>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Chính sách bảo mật thanh toán</a>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Chính sách giải quyết khiếu nại</a>
                    <a class="block hover:text-[#62d2a2] duration-300" href="#">Hợp tác và liên kết</a>
                </div>
            </div>

        </div>
        <p class="py-5 text-center border-t-2 border-gray-300 bg-[#f3f6f5]">
            Created By 
            <a href="#" class="text-[#459573] font-semibold">longdvph29867</a> /
            <a href="#" class="text-[#459573] font-semibold">hiendtph29893</a> /
            <a href="#" class="text-[#459573] font-semibold">mungnxph30077</a>
            | &copy;  2023 FPT Polytechnic. All rights reserved.
        </p>
    </footer>

    <!--  -->
    <!-- <div class="h-[500px]">
        123
    </div> -->



    <!-- header js -->
    <script>
        const menuMobile = document.querySelector('.header_bottom');
        const btnMenuMobile = document.querySelector('.btn_menu_mobile button');
        const menuMobileChild = document.querySelector('.menu_item_mobile');
        const btnMenuMobileChild = document.querySelector('#showMenuChildMobile');
        const headerEl = document.querySelector('header');
        btnMenuMobile.onclick = () => {
            menuMobile.classList.toggle('show_menu_mobile')
        }
        btnMenuMobileChild.onclick = () => {
            menuMobileChild.classList.toggle('show_child_menu')
        }
        window.addEventListener('click', (e) => {
            if (!menuMobile.contains(e.target)) {
                menuMobile.classList.remove('show_menu_mobile')
            }
        })
        window.addEventListener('scroll', () => {
            if (window.scrollY > 80) {
                headerEl.classList.add('scrollHeader')
            }
            else {
                headerEl.classList.remove('scrollHeader')
            }
        })
    </script>

    <!-- slick banner -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script type="text/javascript" src="<?=$url_content?>/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.banner_slide').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 3000,
            });
            $('.categorys_carousel').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                // autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]
            });
            $('.top_products_carousel').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                // autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    </script>

    <!-- validate -->
    <script>
        $().ready(function() {
            // file đuôi file
            $.validator.addMethod('fileExtension', function(value, element, param) {
                param = typeof param === 'string' ? param.replace(/\s/g, '') : '';
                var extensions = param.split(',');
                var fileExtension = value.split('.').pop().toLowerCase();
                return this.optional(element) || $.inArray(fileExtension, extensions) !== -1;
            }, 'Please select a file with a valid extension.');

            // file size
            $.validator.addMethod('fileSize', function(value, element, param) {
                var fileSize = element.files[0].size; // Lấy kích thước tệp tin
                var maxSize = param * 1024 * 1024; // Chuyển đổi giá trị đơn vị thành byte

                return this.optional(element) || fileSize <= maxSize;
            }, 'File size must be less than or equal to {0} MB.');
            $('#change_info').validate({
                rules: {
                    ho_ten: {
                        required: true,
                        maxlength: 30,
                        minlength: 6,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    hinh: {
                        fileExtension: 'png,jpeg,jpg,webp',
                        fileSize: 2,
                        maxlength: 45,
                    },
                },
                messages: {
                    ho_ten: {
                        required: 'Vui lòng nhập họ tên!',
                        maxlength: 'Họ tên phải 6 - 30 ký tự!',
                        minlength: 'Họ tên phải 6 - 30 ký tự!'
                    },
                    email: {
                        required: 'Vui lòng nhập Email!',
                        email: 'Email chưa đúng định dạng!'
                    },
                    hinh: {
                        fileExtension: 'File phải có định dạng là png, jpg, jpeg, webp!',
                        fileSize: 'Kích thước không quá 2 MB!',
                        maxlength: 'Tên file quá dài!',
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
            $('#change_password').validate({
                rules: {
                    mat_khau: {
                        required: true,
                    },
                    mat_khau2: {
                        required: true,
                        maxlength: 16,
                        minlength: 6,
                    },
                    mat_khau3: {
                        required: true,
                        equalTo: '#mat_khau2'
                    },
                },
                messages: {
                    mat_khau: {
                        required: 'Vui lòng nhập mật khẩu!',
                    },
                    mat_khau2: {
                        required: 'Vui lòng nhập mật khẩu mới!',
                        maxlength: 'Mật khẩu phải 6 - 16 ký tự!',
                        minlength: 'Mật khẩu phải 6 - 16 ký tự!'
                    },
                    mat_khau3: {
                        required: 'Vui lòng nhập lại mật khẩu mới!',
                        equalTo: 'Mật khẩu mới không khớp!'
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>

</body>

</html>
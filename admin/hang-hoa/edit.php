<div class="container">
    <h3>Thêm sản phẩm</h3>
    <div>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-6">
                    <label for="">Mã hàng hoá</label>
                    <input type="text" name="ma_hh" class="form-control" value="<?=$thisHangHoa['ma_hh']?>" readonly>
                    <small id="helpId" class="text-danger">Help text</small>
                </div>
                <div class="form-group col-6">
                    <label for="ten_hh">Tên hàng hoá</label>
                    <input type="text" name="ten_hh" id="ten_hh" class="form-control" value="<?=$thisHangHoa['ten_hh']?>">
                    <small id="helpId" class="text-danger">
                    <?php
                    if(!empty($errors['ten_hh'])) {
                        echo $errors['ten_hh'];
                    }
                    ?>
                    </small>
                </div>

                <!--  -->
                <div class="form-group col-6">
                    <label for="don_gia">Đơn giá</label>
                    <input type="number" name="don_gia" id="don_gia" class="form-control" value="<?=$thisHangHoa['don_gia']?>">
                    <small id="helpId" class="text-danger">
                    <?php
                    if(!empty($errors['don_gia'])) {
                        echo $errors['don_gia'];
                    }
                    ?>
                    </small>
                </div>
                <div class="form-group col-6">
                    <label for="giam_gia">Giảm giá</label>
                    <input type="number" name="giam_gia" id="giam_gia" class="form-control" value="<?=$thisHangHoa['giam_gia']?>">
                    <small id="helpId" class="text-danger">
                    <?php
                    if(!empty($errors['giam_gia'])) {
                        echo $errors['giam_gia'];
                    }
                    ?>
                    </small>
                </div>

                <div class="form-group col-6">
                    <label for="">Hình ảnh</label>
                    <input type="text" class="form-control-file" name="old_hinh"  value="<?=$thisHangHoa['hinh']?>" hidden>
                    <input type="file" class="form-control-file" name="file">
                    <?=$thisHangHoa['hinh']?>
                    <?php
                    if(!empty($errors['file'])) {
                        echo $errors['file'];
                    }
                    ?>
                    </small>
                </div>

                <div class="form-group col-6">
                    <label for="" class="">Loại hàng</label>
                    <div class="input-group">
                        <select name="ma_loai" class="custom-select" id="inputGroupSelect04">
                            <option selected hidden>Choose...</option>
                            <?php
                                foreach($lisDanhMuc as $danhMuc) {
                            ?>
                                <option 
                                <?php 
                                    if($danhMuc['ma_loai'] == $thisHangHoa['ma_loai']) {
                                        echo "selected";
                                    }
                                ?>
                                value="<?=$danhMuc["ma_loai"]?>"><?=$danhMuc["ten_loai"]?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <small id="fileHelpId" class="form-text text-danger">Help text</small>
                </div>


                <div class="form-group col-6">
                    <label for="" class="d-block">Hàng đặc biệt</label>
                    <div>
                        <label>
                            <input type="radio" name="dac_biet" <?php if($thisHangHoa['dac_biet'] == 1) echo "checked" ?> value="1"> Đặc biệt
                        </label>
                        <label>
                            <input type="radio" name="dac_biet" <?php if($thisHangHoa['dac_biet'] == 0) echo "checked" ?> value="0"> Bình tường
                        </label>

                    </div>
                    <small id="helpId" class="text-danger d-block">
                    <?php
                    if(!empty($errors['dac_biet'])) {
                        echo $errors['dac_biet'];
                    }
                    ?>
                    </small>
                </div>


                <div class="form-group col-6">
                    <label for="ngay_nhap">Ngày nhập</label>
                    <input type="date" name="ngay_nhap" id="ngay_nhap" class="form-control" value="<?=$thisHangHoa['ngay_nhap']?>" readonly>
                    <small id="helpId" class="text-danger">Help text</small>
                </div>

                <div class="form-group col-12">
                    <label for="mo_ta">Mô tả</label>
                    <textarea name="mo_ta" id="mo_ta" cols="30" class="w-100" rows="5"><?=$thisHangHoa['mo_ta']?></textarea>
                    <small id="helpId" class="text-danger">
                    <?php
                    if(!empty($errors['mo_ta'])) {
                        echo $errors['mo_ta'];
                    }
                    ?>
                    </small>
                </div>

            </div>

            <!--  -->

            <button name="btn-update" class="btn btn-warning">Cập nhật</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a class="btn btn-info" href="index.php?list">Danh sách</a>
        </form>
    </div>
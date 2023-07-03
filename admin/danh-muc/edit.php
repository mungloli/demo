<div class="container">
<h3 class="alert alert-success">Sửa loại hàng</h3>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="">Mã Loại</label>
            <input type="text" name="ma_loai" class="form-control" readonly value="<?php echo $danhMuc['ma_loai'] ?>">
        </div>
        <div class="form-group">
            <label for="tenLoai">Tên Loại</label>
            <input type="text" name="ten_loai" id="tenLoai" class="form-control" value="<?php echo $danhMuc['ten_loai'] ?>">
            <small id="helpId" class="text-danger"><?php if(!empty($errors['ten_loai'])){echo $errors['ten_loai'];}?></small>
        </div>
        <button name="btn-update" class="btn btn-warning">Cập nhật</button>
        <button type="reset" class="btn btn-dark">Nhập lại</button>
        <a class="btn btn-info" href="index.php?list">Danh sách</a>
    </form>

</div>
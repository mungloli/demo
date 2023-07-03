
<div class="container">
<h3 class="alert alert-success">Thêm danh mục</h3>
    <div>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="">Mã Loại</label>
                <input type="text" name="" class="form-control" value="Auto number" readonly>
            </div>
            <div class="form-group">
                <label for="tenLoai">Tên Loại</label>
                <input type="text" name="ten_loai" id="tenLoai" class="form-control">
                <small id="helpId" class="text-danger"><?php if(!empty($errors['ten_loai'])){echo $errors['ten_loai'];}?></small>
            </div>
            <button name="btn-insert" class="btn btn-success">Thêm mới</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a class="btn btn-info" href="index.php?list">Danh sách</a>
        </form>
    </div>
    
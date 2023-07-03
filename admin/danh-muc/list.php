<div class="container">
  <h3 class="alert alert-success">Danh sách loại hàng</h3>
  <form action="index.php" method="post">
    <div class="mb-3">
      <button class="btn btn-primary" id="check-all" type="button">Chọn tất cả</button>
      <button class="btn btn-secondary" id="clear-all" type="button">Bỏ chọn tất cả</button>
      <button class="btn btn-danger" name="btn-delete-all" onclick="return confirm('Bạn có chắc chắn xoá không?')">Xóa các mục đã chọn</button>
      <a href="index.php?add" class="btn btn-success">Thêm mới</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th>Mã loại</th>
          <th>Tên loại</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($items as $item) {
        ?>
          <tr>
            <td><input type="checkbox" name="ma_loai[]" value="<?= $item['ma_loai'] ?>"></td>
            <td><?php echo $item['ma_loai'] ?></td>
            <td><?php echo $item['ten_loai'] ?></td>
            <th>
              <a class="btn btn-warning" href="index.php?btn-edit&maloai=<?php echo $item['ma_loai'] ?>">Sửa</a>
              <a onclick="return confirm('Bạn có chắc chắn xoá không?')" class="btn btn-danger" href="index.php?btn-delete&maloai=<?php echo $item['ma_loai'] ?>">Xóa</a>
            </th>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

  </form>

</div>
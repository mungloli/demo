<div class="container">
  <form action="index.php" method="post">
    <div class="my-3">
      <button id="check-all" type="button" class="btn btn-primary">Chọn tất cả</button>
      <button id="clear-all" type="button" class="btn btn-secondary">Bỏ chọn tất cả</button>
      <button onclick="return confirm('Bạn có chắc chắn xoá không?')" name="btn-delete-all" class="btn btn-danger">Xóa các mục đã chọn</button>
      <a href="index.php?add" class="btn btn-success">Thêm mới</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th>Mã Hàng Hoá</th>
          <th>Tên Hàng Hoá</th>
          <th>Hình ảnh</th>
          <th>Đơn giá</th>
          <th>Giảm giá</th>
          <th>Lượt xem</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($items as $item) {
        ?>
          <tr>
            <td><input type="checkbox" name="ma_hh[]" value="<?= $item['ma_hh'] ?>"></td>
            <td><?php echo $item['ma_hh'] ?></td>
            <td><?php echo $item['ten_hh'] ?></td>
            <td><img style="width: 100px;" src="<?php echo "$url_content/images/image_products/" . $item['hinh'] ?>" alt=""></td>
            <td><?php echo number_format($item['don_gia']) ?></td>
            <td><?php echo number_format($item['giam_gia']) ?></td>
            <td><?php echo $item['so_luot_xem'] ?></td>
            <th>
              <a class="btn btn-warning" href="index.php?btn_edit&ma_hh=<?php echo $item['ma_hh'] ?>">Sửa</a>
              <a onclick="return confirm('Bạn có chắc chắn xoá không?')" class="btn btn-danger" href="index.php?btn-delete&ma_hh=<?php echo $item['ma_hh'] ?>">Xóa</a>
            </th>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </form>
</div>
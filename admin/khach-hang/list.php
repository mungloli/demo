<div class="container">
  <form action="index.php" method="post">
    <table class="table ">
      <thead>
        <tr>
          <th></th>
          <th>Mã khách hàng</th>
          <th>Tên khách hàng</th>
          <th>Địa chỉ Email</th>
          <th>Hình ảnh</th>
          <th>Vai trò</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
  
        foreach ($list_khachHang as $khachHang) {
        ?>
          <tr>
            <td><input type="checkbox" name="ma_kh[]" value="<?=$khachHang['ma_kh']?>"></td>
            <td><?php echo $khachHang['ma_kh'] ?></td>
            <td><?php echo $khachHang['ho_ten'] ?></td>
            <td><?php echo $khachHang['email'] ?></td>
            <td><img style="width: 100px;" src="<?php echo "$url_content/images/image_user/".$khachHang['hinh'] ?>" alt=""></td>
            <td><?php echo ($khachHang['vai_tro'] == 1) ? "Nhân viên" : "Khách hàng" ?></td>
            <td>
              <a class="btn btn-warning" href="index.php?edit&makh=<?php echo $khachHang['ma_kh'] ?>">Sửa</a>
              <a onclick="return confirm('Bạn có chắc chắn xoá không?')" class="btn btn-danger" href="index.php?btn_delete&makh=<?php echo $khachHang['ma_kh'] ?>">Xóa</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <div>
      <button class="btn btn-primary" id="check-all" type="button">Chọn tất cả</button>
      <button class="btn btn-secondary" id="clear-all" type="button">Bỏ chọn tất cả</button>
      <button class="btn btn-danger" name="btn-delete-all" onclick="return confirm('Bạn có chắc chắn xoá không?')">Xóa tất cả</button>
      <a class="btn btn-success" href="index.php?add">Thêm mới</a>
    </div>
  </form>
</div>
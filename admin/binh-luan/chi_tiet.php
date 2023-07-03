<div class="container">
    <h2 class="alert alert-success">Chi tiết bình luận</h2>
    <h5 class="my-4">Hàng hóa: <?php echo $ten_hh['ten_hh'] ?></h5>
    <form action="index.php?mahh=<?php echo $id_hh ?>" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th>Người bình luận</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($binh_luan as $bl) {
                ?>
                    <tr>
                        <td><input type="checkbox" name="ma_bl[]" value="<?=$bl['ma_bl']?>"></td>
                        <td><?php echo $bl['noi_dung'] ?></td>
                        <td><?php echo $bl['ngay_bl'] ?></td>
                        <td><?php echo $bl['ten_kh'] ?></td>
                        <td><a
                        onclick="return confirm('Bạn có chắc chắn xoá không?')"
                        class="btn btn-danger" href="index.php?mahh=<?php echo $id_hh ?>&delete&mabl=<?php echo $bl['ma_bl'] ?>">Xóa</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div>
            <button class="btn btn-success" id="check-all" type="button">Chọn tất cả</button>
            <button class="btn btn-secondary" id="clear-all" type="button">Bỏ chọn tất cả</button>
            <button class="btn btn-danger" name="btn-delete-all" onclick="return confirm('Bạn có chắc chắn xoá không?')">Xóa các mục đã chọn</button>
        </div>
    </form>
</div>
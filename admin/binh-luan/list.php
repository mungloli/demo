<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>Hàng hóa</th>
        <th>Số bình luận</th>
        <th>Mới nhất</th>
        <th>Cũ nhất</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($list_binhLuan as $binhLuan) {
      ?>
        <tr>
          <td></td>
          <td><?php echo $binhLuan['ten_hh'] ?></td>
          <td><?php echo $binhLuan['so_luong'] ?></td>
          <td><?php echo $binhLuan['cu_nhat'] ?></td>
          <td><?php echo $binhLuan['moi_nhat'] ?></td>
          <td><a class="btn btn-primary" href="index.php?detial&mahh=<?php echo $binhLuan['ma_hh'] ?>">Chi tiết</a></td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
</div>
<div class="container">
    <h1 class="alert alert-success">Thống kê hàng hóa từng loại</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Loại hàng</th>
                <th>Số lượng</th>
                <th>Giá thấp nhất</th>
                <th>Giá cao nhất</th>
                <th>Giá trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($item as $loai){
                ?>
                <tr>
                    <td><?php echo $loai['ten_loai']?></td>
                    <td><?php echo $loai['so_luong']?></td>
                    <td><?php echo number_format($loai['gia_min'])?></td>
                    <td><?php echo number_format($loai['gia_max'])?></td>
                    <td><?php echo number_format($loai['gia_avg'])?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <a class="btn btn-success" href="index.php?chart">Biểu đồ</a>
</div>


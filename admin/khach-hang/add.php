<!--  -->
    <div class="container">
    <h6 class="alert alert-primary">Thêm khách hàng</h6>
        <form class="row" action="index.php" method="post" enctype="multipart/form-data">
      <div class="form-group col-6">
        <label for="">Mã khách hàng</label>
        <input type="text" name="ma-kh" id="" class="form-control" value="<?php if(isset($ma_kh)) echo $ma_kh ?>">
        <small id="helpId" class="text-danger"><?php if(!empty($errors['ma-kh'])){echo $errors['ma-kh'];}?></small>
      </div>
      <div class="form-group col-6">
        <label for="">Tên Khách hàng</label>
        <input type="text" name="ten-kh" id="" class="form-control" value="<?php if(isset($ho_ten)) echo $ho_ten ?>">
        <small id="helpId" class="text-danger"><?php if(!empty($errors['ten-kh'])){echo $errors['ten-kh'];}?></small>
      </div>
      <div class="form-group col-6">
        <label for="">Mật khẩu</label>
        <input type="password" name="password-kh" id="" class="form-control" value="<?php if(isset($mat_khau)) echo $mat_khau ?>">
        <small id="helpId" class="text-danger"><?php if(!empty($errors['password-kh'])){echo $errors['password-kh'];}?></small>
      </div>
      <div class="form-group col-6">
        <label for="">Xác nhận mật khẩu</label>
        <input type="password" name="password-confirm" id="" class="form-control" value="<?php if(isset($mat_khau)&& empty($error['password-confirm'])){ echo $mat_khau;}?>">
        <small id="helpId" class="text-danger"><?php if(!empty($errors['password-confirm'])){echo $errors['password-confirm'];}?></small>
      </div>
      <div class="form-group col-6">
        <label for="">Địa chỉ Email</label>
        <input type="text" name="email-kh" id="" class="form-control" value="<?php if(isset($email)) echo $email ?>">
        <small id="helpId" class="text-danger"><?php if(!empty($errors['email-kh'])){echo $errors['email-kh'];}?></small>
      </div>
      <div class="col-6">
        <label for="formFile" class="form-label">Hình</label>
        <input class="d-block" type="file" id="formFile" name="img-kh">
        <small id="helpId" class="text-danger"><?php if(!empty($errors['img-kh'])){echo $errors['img-kh'];}?></small>
      </div>
      <div class="form-group col-6">
        <label class="d-block " for="">Kích hoạt</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kich-hoat" id="kich-hoat-1" value="0" <?php if(isset($kich_hoat) && $kich_hoat == 0){ echo "checked";}?>>
            <label class="form-check-label" for="kich-hoat-1">
                Kích hoạt
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kich-hoat" id="kich-hoat-2" value="1" <?php if(isset($kich_hoat) && $kich_hoat == 1){echo "checked";}?>>
            <label class="form-check-label" for="kich-hoat-2">
                Không kích hoạt
            </label>
          </div>
          <small id="helpId" class="text-danger"><?php if(!empty($errors['kich-hoat'])){echo $errors['kich-hoat'];}?></small>
      </div>
      <div class="form-group col-6">
        <label class="d-block" for="">Vai trò</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="vai-tro" id="vai-tro-1" value="1" <?php if(isset($vai_tro) && $vai_tro == 1){echo "checked";}?>>
            <label class="form-check-label" for="vai-tro-1">
                Nhân viên
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="vai-tro" id="vai-tro-2" value="0" <?php if(isset($vai_tro)&& $vai_tro == 0){echo "checked";}?>>
            <label class="form-check-label" for="vai-tro-2">
                Khách hàng
            </label>
        </div>
        <small id="helpId" class="text-danger"><?php if(!empty($errors['vai-tro'])){echo $errors['vai-tro'];}?></small>
      </div>
      <div>
                <button class="btn btn-success" name="btn-insert">Thêm mới</button>
                <button class="btn btn-danger">Nhập lại</button>
                <a class="btn btn-primary" href="index.php?list">Danh sách</a>
            </div>
      </form>
    </div>

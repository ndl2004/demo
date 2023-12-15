<div class="registration">
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="custom-form">
                 <h2 class="text-success"> ĐĂNG KÍ THÀNH VIÊN</h2>
                <form action="<?= PATH ?> pagess=registration" method="post">
                    <div class="mb-3 "> 
                        <label for="hoten" class="form-label fw-bold">Họ tên</label>
                        <input type="text" class="form-control" id="hoten" placeholder="Ho ten" name="fullname">
                    </div>
                    <div class="mb-3 "> 
                        <label for="gioitinh" class="form-label fw-bold">Giới tính</label> <br>
                        <p>Nam: <input type="radio" class="form-check-input" id="gioitinh"  name="sex" value="Nam"> Nữ: <input type="radio" class="form-check-input" id="gioitinh"  name="sex" value="Nữ"> </p>
                    </div>
                    <div class="mb-3 "> 
                        <label for="ngaysinh" class="form-label fw-bold">Ngày sinh</label>
                        <input type="date" class="form-control" id="ngaysinh" name="dob">
                    </div>
                    <div class="mb-3 "> 
                        <label for="dienthoai" class="form-label fw-bold">Điện thoại</label>
                        <input type="text" class="form-control" id="dienthoai" placeholder="SĐT" name="telephone">
                    </div>
                    <div class="mb-3 "> 
                        <label for="lop" class="form-label fw-bold">Địa chỉ</label>
                        <input type="text" class="form-control" id="lop" placeholder="Dia chi" name="address">
                    </div>
                    <div class="mb-3 mt-3"> 
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3 mt-3"> 
                        <label for="ten" class="form-label fw-bold">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="ten" placeholder="Tên đăng nhập" name="username">
                    </div>
                    <div class="mb-3 mt-3"> 
                        <label for="mk" class="form-label fw-bold">Mật khẩu</label>
                        <input type="text" class="form-control" id="mk" placeholder="mat khau" name="pass">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Lấy thông tin</button>
                </form>

            </div>
        </div>
        </div>
    </div>
    
    <?php
        $name=$gt=$dmy=$dt=$dc=$email=$tendn=$mk="";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name=$_POST['fullname'];
            $gt=$_POST['sex'];
            $dmy=$_POST['dob'];
            $dt=$_POST['telephone'];
            $dc=$_POST['address'];
            $email=$_POST['email'];
            $tendn=$_POST['username'];
            $mk=$_POST['pass'];
        }

    ?>
        <table  class="table table-bordered">
            <tr><th>Họ tên</th><td><?= $name; ?></td></tr>
            <tr><th>Giới tính</th><td><?= $gt; ?></td></tr>
            <tr><th>Ngày sinh</th><td><?= $dmy; ?></td></tr>
            <tr><th>Điện thoại</th><td><?= $dt; ?></td></tr>
            <tr><th>Địa chỉ</th><td><?= $dc; ?></td></tr>
            <tr><th>Email</th><td><?= $email; ?></td></tr>
            <tr><th>Tên đăng nhập</th><td><?= $tendn; ?></td></tr>
            <tr><th>Mật khẩu</th><td><?= $mk; ?></td></tr>
        </table>
</div>
<?php require_once('View/Admin/Layouts/index.php') ?>

<style>
    .container {
        width: 85%;
        margin: auto;
        border-radius: 5px;
        padding: 20px;
        border: 1px solid #ccc;
        margin-top: 30px;
        margin-bottom: 50px;
        font-size: 18px;
        height: 650px;
    }

    input[type=text] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 20px;
        resize: vertical;
        font-size: 15px;
    }

    input[type=date] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 20px;
        resize: vertical;
        font-size: 15px;
    }

    input[type=phone] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 20px;
        resize: vertical;
        font-size: 15px;
    }

    textarea {
        width: 100%;
        height: 120px;
        padding: 12px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 20px;
        resize: vertical;
        font-size: 16px;
    }

    select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 20px;
        resize: vertical;
        font-size: 16px;
    }

    input[type=submit] {
        background-color: #3c2665;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #3c2500;
    }
</style>

<body class="sb-nav-fixed">
    <?php include_once('View/Admin/Layouts/includes/header.php') ?>
    <div id="layoutSidenav">
        <?php include_once('View/Admin/Layouts/includes/navbar.php') ?>
        <div id="layoutSidenav_content">
            <main>
                <h2 style="text-align: center; margin-top: 15px;">Thay đổi thông tin tài khoản</h2>
                <div class="container">
                    <form action="<?php echo url('admin/admin/updateNewUser?userId='.$_GET['userId'])?>" method="POST">
                        <div>
                            <label>Họ tên</label>
                            <input type="text" name="user_name" placeholder="Nhập tên tài khoản ..." class="form-control <?php echo !empty($errors['email']) ? 'is-invalid' : '' ?>" />
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text"  placeholder="Nhập email ..." class="form-control <?php echo !empty($errors['password']) ? 'is-invalid' : '' ?>" value="<?php foreach($result as $value){ echo $value['email'];} ?>" />
                        </div>
                        <div>
                            <label>Số điện thoại</label>
                            <input type="number"  name ="phone_number" placeholder="Nhập số điện thoại ..." class="form-control <?php echo !empty($errors['password_confirmation']) ? 'is-invalid' : '' ?>" />

                        </div>
                        <br>
                        <div>
                            <label>Bằng cấp</label>
                            <input type="text" name="degree" placeholder="Nhập bằng cấp của bạn ..." class="form-control <?php echo !empty($errors['password_confirmation']) ? 'is-invalid' : '' ?>" />

                        </div>
                        <div>
                            <label>Kinh nghiệm</label>
                            <input type="text" name="experience" placeholder="Nhập kinh nghiệm của bạn  ..." class="form-control <?php echo !empty($errors['password_confirmation']) ? 'is-invalid' : '' ?>" />
                        </div>
                        <button type="submit" class="btn btn-secondary" style="float: right;">Cập nhật tài khoản</button>
                    </form>
                </div>
            </main>

</body>
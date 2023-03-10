<?php require_once('View/Admin/Layouts/index.php') ?>
<?php require_once('Core/AuthLogin.php') ?>

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
        height: 460px;
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
                <h2 style="text-align: center; margin-top: 15px;">Th??m t??i kho???n</h2>
                <div class="container">
                    <form action="" method="POST">
                        <div>
                            <label>T??n t??i kho???n</label>
                            <input type="text" name="email" placeholder="Nh???p t??n t??i kho???n ..." class="form-control <?php echo !empty($errors['email']) ? 'is-invalid' : '' ?>" />
                            <?php if (!empty($errors['email'])) { ?>
                                <div class="invalid-feedback"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><?php echo $errors['email'] ?></div>
                            <?php } ?>
                        </div>
                        <div>
                            <label>M???t kh???u</label>
                            <input type="text" name="password" placeholder="Nh???p m???t kh???u ..." class="form-control <?php echo !empty($errors['password']) ? 'is-invalid' : '' ?>" />
                            <?php if (!empty($errors['password'])) { ?>
                                <div class="invalid-feedback"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><?php echo $errors['password'] ?></div>
                            <?php } ?>
                        </div>
                        <div>
                            <label>Nh???p l???i m???t kh???u</label>
                            <input type="text"  placeholder="Nh???p l???i m???t kh???u ..." class="form-control <?php echo !empty($errors['password_confirmation']) ? 'is-invalid' : '' ?>" />
                            <?php if (!empty($errors['password_confirmation'])) { ?>
                                <div class="invalid-feedback"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><?php echo $errors['password_confirmation'] ?></div>
                            <?php } ?>
                        </div>
                        <div>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option value="1">Ng?????i d??ng</option>
                                <option value="2">Nh?? tuy???n d???ng</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-secondary" style="float: right;">Th??m t??i kho???n</button>
                    </form>
                </div>
            </main>

</body>
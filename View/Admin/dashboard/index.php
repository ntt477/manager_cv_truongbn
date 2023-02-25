<?php require_once('View/Admin/Layouts/index.php') ?>

<style>
    th {
        font-size: 14px;
    }

    td {
        font-size: 14px;
    }
</style>

<body class="sb-nav-fixed">
    <?php include_once('View/Admin/Layouts/includes/header.php') ?>
    <div id="layoutSidenav">
        <?php include_once('View/Admin/Layouts/includes/navbar.php') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">TRANG CHỦ</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Hiển thị</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                        <a class="nav-link" href="<?php echo url('admin/admin/createUser')?>" style ="font-size: 12px; font-weight:100;float:right;padding-top: 4px; color:blue">
                                    THÊM TÀI KHOẢN
                                </a>
                            <i class="fas fa-table me-1"></i>
                            BẢNG THỐNG KÊ TÀI KHOẢN
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Vai trò</th>
                                        <th>Bằng cấp</th>
                                        <th>Kinh nghiệm</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center">
                                    <?php foreach ($data as $value) { ?>
                                        <form action="" method="POST">
                                            <input type="hidden" name="userId" value="<?php echo $value['id'] ?>">
                                            <tr>
                                                <td><?php echo $value['id'] ?></td>
                                                <td><?php echo $value['user_name'] ?></td>
                                                <td><?php echo $value['email'] ?></td>
                                                <td><?php echo $value['phone_number'] ?></td>
                                                <td><?php echo $value['role'] ?></td>
                                                <td><?php echo $value['degree'] ?></td>
                                                <td><?php echo $value['experience'] ?></td>
                                                <td>
                                                    <a style="color:black" href="<?php echo url('admin/admin/index/?userId=' . $value['id']) ?>"><i class="fa-solid fa-trash-can"></i></a>
                                                    <a style="color:black" href="<?php echo url('admin/admin/fixUser/?userId=' . $value['id']) ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                </td>
                                            </tr>
                                        </form>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>
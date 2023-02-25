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
                            <i class="fas fa-table me-1"></i>
                            BẢNG THỐNG KÊ 
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã NTD</th>
                                        <th>Tiêu đề</th>
                                        <th>Tên Công ty</th>
                                        <th>Địa điểm</th>
                                        <th>Chi tiết </th>
                                        <th>Thời hạn</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center">
                                    <?php foreach ($data as $value) { ?>
                                        <form action="" method="POST">
                                            <tr>
                                                <td><?php echo $value['id'] ?></td>
                                                <td><?php echo $value['employer_id'] ?></td>
                                                <td><?php echo $value['title'] ?></td>
                                                <td><?php echo $value['company'] ?></td>
                                                <td><?php echo $value['location'] ?></td>
                                                <td><?php echo $value['description'] ?></td>
                                                <td><?php echo $value['status'] . " ngày" ?></td>
                                                <td>
                                                    <a style="color:black" href="<?php echo url('admin/admin/post/?cvId=' . $value['id']) ?>"><i class="fa-solid fa-trash-can"></i></a>
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
<?php include_once 'View/Layout/index.php' ?>

<head>
    <style>
        .container.py-5.new {
            background-color: white;
        }

        .card-body.text-center {
            height: 398px;
        }

        p {
            color: red;
        }

        figcaption.blockquote-footer {
            color: #00B074;
        }
    </style>
</head>
<div class="container-xxl bg-white p-0">
    <?php include_once 'View/Layout/includes/header.php' ?>
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Thông tin cá nhân</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Về tôi</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- END nav -->
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Chào mừng bạn đến với trang Web của trường</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Hãy cập nhật <cite title="Source Title">Thông tin ở đây nhé !!!</cite>
        </figcaption>
    </figure>
    <section style="background-color: #eee;">
        <div class="container py-5 new">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3" style="color: red"><?php foreach ($result as $value) { ?>
                                    <?php echo $value['user_name'] ?><?php } ?></h5>
                            <p class="text-muted mb-1"><?php foreach ($result as $value) { ?>
                                    <?php echo $value['email'] ?><?php } ?></p>
                            <p class="text-muted mb-4"><a href="<?php echo url('employer/historyJob') ?>"><?php echo url('employer/historyJob') ?></a></p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary">Follow</button>
                                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="<?php echo url('employer/updateInfor?employer_id='.$_GET['employer_id']) ?>" method="POST">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Họ và Tên</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" style="border:none; width: -webkit-fill-available;" placeholder="Nhập họ tên của bạn" name="user_name" value="<?php foreach ($result as $value) { ?><?php echo $value['user_name'] ?><?php } ?>">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php foreach ($result as $value) { ?> <?php echo $value['email'] ?><?php } ?>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Số điện thoại</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><input type="text" style="border:none; width: -webkit-fill-available;" placeholder="Nhập số điện thoại" name="phone_number" value="<?php foreach ($result as $value) { ?><?php echo $value['phone_number'] ?><?php } ?>">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Bằng cấp</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><input type="text" style="border:none; width: -webkit-fill-available;" placeholder="bằng cấp của bạn" name="degree" value="<?php foreach ($result as $value) { ?><?php echo $value['degree'] ?><?php } ?>">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Kinh nghiệm</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><input type="text" style="border:none; width: -webkit-fill-available;" placeholder="Kinh nghiệm của tôi" name="experience" value="<?php foreach ($result as $value) { ?><?php echo $value['experience'] ?> <?php } ?>">
                                        </p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Công việc của tôi</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><a href="<?php echo url('employer/historyJob') ?>"><?php echo url('employer/historyJob') ?></a></p>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-outline-secondary" style="float:right;color: #00B074;background-color: aliceblue; margin-top:10px">Lưu</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>


<?php include_once 'View/Layout/includes/footer.php' ?>
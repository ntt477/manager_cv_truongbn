<?php include_once 'View/Layout/index.php' ?>

<head>
    <link href="<?php echo asset('assets/web/assets/css/post.css') ?>" rel="stylesheet">
    <style>
    </style>
</head>
<div class="container-xxl bg-white p-0">
    <?php include_once 'View/Layout/includes/header.php' ?>
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Category</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- END nav -->

    <input type="hidden" name="employer_id" value="<?php echo $employerId ?>">
    <section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            
                                <form class="row g-3" method="POST">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">
                                    <center><h1>Nạp tiền vài tài khoản</h1></center>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label" style="color:#00B074">Số tiền còn lại của bạn là:  <?php foreach($data as $value) {echo $value['amount'];} ?> VNĐ</label>
                                        <br>
                                        <input type="text" name= "amount" class="form-control" id="inputAddress" placeholder="Nhập số tiền vào đây">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <center><button type="submit" class="btn btn-primary">Sign in</button> </center>
                                    </div>
                                </form>
                            
                        </div>
                        <div class="col-md-12">

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
</div>
</section>

<?php include_once 'View/Layout/includes/footer.php' ?>
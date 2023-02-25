
<?php include_once 'View/Layout/index.php' ?>

<style>
    ::before {
    color: red;
}
</style>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- Spinner End -->

        <!-- Navbar Start -->
        <?php include_once 'View/Layout/includes/header.php' ?>
        <!-- Navbar End -->
        <!-- Carousel Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Danh sách CV của bạn</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0"></h6>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0"></h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mt-n1 mb-0"></h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <?php foreach ($getCv as $value) { ?>
                                <form action="<?php echo url('user/cvDetail?cv_id='.$value['id']) ?>" method="POST">
                                <div class="job-item p-4 mb-4">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid border rounded" src="<?php echo asset('assets/web/assets/img/about-1.jpg') ?>" alt="" style="width: 80px; height: 80px;">
                                            <div class="text-start ps-4">
                                                <h5 class="mb-3"><?php echo $value['title'] ?></h5>
                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><a href="<?php echo url('user/viewPdf?cv_name='.$value['upload']) ?>"><?php echo $value['upload'] ?></a></span>
                                                <input type="hidden" name="cv_id" value="<?php echo $value['id'] ?>">
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                                <?php if(isset($_GET['cv_id'])){?>
                                                    <?php if($value['id'] == $_GET['cv_id']){ ?>
                                                        <a class="btn btn-light btn-square me-3" href=""><i class="bi bi-bookmark-check-fill"></i></i></a>
                                                    <?php } ?>
                                                <?php } else {
                                                    echo "";
                                                }?>
                                                
                                                <button class="btn btn-primary" name="submit" type="submit">Chọn CV Chính</button>
                                            </div>
                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value['created_at'] ?></small>
                                        </div>
                                    </div>

                                </div>
                                </form>
                            <?php } ?>
                            
                        </div>


                        <a class="btn btn-primary py-3 px-5" href="">Hãy thiết kế CV của bạn thật đẹp nhé !!!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <?php include_once 'View/Layout/includes/footer.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->

</body>
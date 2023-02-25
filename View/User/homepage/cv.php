<?php include_once 'View/Layout/index.php'; ?>
<style>
    input#formGroupExampleInputone {
        height: 100px !important;
    }
</style>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- <div class="container-xxl bg-white p-0"> -->
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <?php include_once 'View/Layout/includes/header.php' ?>
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">CV của bạn</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">CV</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="text-center text-uppercase " style="color:red; font-size:22px; margin-bottom:40px">Tải CV của bạn lên ở đây</p>
                    <form action = "<?php echo url('user/updateCv?user_id='.$_GET['user_id'])?>"class="was-validated" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="validationServer01" class="form-label">Tên của bạn</label>
                                <input type="text" class="form-control is-valid" id="validationServer01"   placeholder="Nhập tên của bạn" name="user_name">
                                <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                            </div>
                            <div class="col-md-4">
                                <label for="validationServerUsername" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                    <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" placeholder="Nhập email" name="email">
                                    <!-- <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please choose a username.
                                </div> -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer02" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control is-valid" id="validationServer02"   placeholder="Nhập số của bạn" name="phone_number">
                                <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Bằng cấp</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập bằng cấp của bạn nếu có" name="degree">
                            </div>
                            <input type="hidden" name="user_id" value="<?php echo $_GET['user_id'] ?>">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Kỹ năng</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Sở trường của bạn" name="name_skill">
                            </div>
                            <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Mức độ thành thạo</label>
                                <select class="form-select"  aria-label="select example" name="role">
                                    <option name="role" value="Intern">Intern</option>
                                    <option name="role" value="Senior">Senior</option>
                                    <option name="role" value="Junior">Junior</option>
                                    <option name="role" value="Middle">Middle</option>
                                </select>
                                <!-- <div class="invalid-feedback">Example invalid select feedback</div> -->
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Kinh nghiệm làm việc</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Kinh nghiệm làm việc của bạn" name="experience"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Tiêu đề CV của bạn</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tiêu đề CV" name="title">
                            </div>
                            <div class="mb-3">
                                <input type="file" name="upload" class="form-control" aria-label="file example" >
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" name="submit" >Submit form</button>
                            </div>
                    </form>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <!-- Footer Start -->
        <?php include_once 'View/Layout/includes/footer.php' ?>
        <!-- Footer End -->
    </div>

</body>
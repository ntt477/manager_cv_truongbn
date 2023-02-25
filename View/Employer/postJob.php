
<?php include_once 'View/Layout/index.php'?>
<head>
<link href="<?php echo asset('assets/web/assets/css/post.css') ?>" rel="stylesheet">
</head>
<body>
<div class="container-xxl bg-white p-0">
<?php include_once 'View/Layout/includes/header.php'?>
<div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Đăng tin</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Đăng tin</a></li>
                    </ol>
                </nav>
            </div>
        </div>
<section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
			     <form action="<?php echo url('employer/postJob') ?>" class="p-5 bg-white" method="POST">
           <p class="invalid" style="color: red;font-size: 20px;"><?php if (!empty($_SESSION['error'])) {
                                                echo '*' . $_SESSION['error']['title'];
                                            } else {
                                              echo "";
                                            } ?>
                        </p>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-price-2">
                     <span class="text-success">$300</span> / Monthly Recurring
                  </label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Tiêu đề</label>
                  <input type="hidden" name="employer_id" value="<?php echo $_SESSION['id'] ?>">
                  <input type="text" id="fullname" class="form-control" placeholder="Nhập tiêu đề công việc" name="title">
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Công ty</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Nhập tên công ty" name="company">
                </div>
              </div>

              <div class="row form-group">
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Vị trí</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                <input type="text" class="form-control" placeholder="Nhập địa điểm" name="location">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Chi tiết</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="description" class="form-control description " placeholder="Nội dung chi tiết công việc">
                </div>
              </div>
              
              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Thời hạn</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="number" class="form-control" placeholder="Nhập thời hạn đăng bài" name="status">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" name="submit" class="btn btn-primary  py-2 px-5">Đăng bài</button>
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="671e081215020a060e0b2703080a060e094904080a">[email&nbsp;protected]</span></a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include_once 'View/Layout/includes/footer.php'?>
</body>


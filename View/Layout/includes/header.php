<?php require_once('core/AuthLogin.php'); ?>
<?php require_once('Controllers/UserController.php'); ?>

<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">JobEntry</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?php echo url('employer/index') ?>" class="nav-item nav-link active" style="<?php if ($_GET['controller'] == "user") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">Trang chủ</a>

            <a href="<?php echo url('user/index') ?>" class="nav-item nav-link active" style="<?php if ($_GET['controller'] == "employer") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">Việc làm</a>
            <a href="<?php echo url('user/searchJob') ?>" class="nav-item nav-link active" style="<?php if ($_GET['controller'] == "employer") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">Phù hợp với bạn</a>

            <a href="<?php echo url('user/cv?user_id='.$_SESSION['id'])?>" class="nav-item nav-link" style="<?php if ($_GET['controller'] == "employer") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">Hồ sơ & CV</a>
                                                                                                
             <a href="<?php echo url('employer/aboutMe') ?>" class="nav-item nav-link" style="<?php if ($_GET['controller'] == "user") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">Về tôi</a>                                                                                  
                  
            <a href="<?php echo url('employer/candidate?employer_id='.$employerId) ?>" class="nav-item nav-link" style="<?php if ($_GET['controller'] == "user") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">Ứng viên</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="<?php if ($_GET['controller'] == "employer") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">CV</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="job-list.html" class="dropdown-item">Trang cá nhân</a>
                    <a href="<?php echo url('user/cvDetail') ?>" class="dropdown-item">CV của bạn</a>
                </div>
            </div>
            
            <a href="<?php echo url('employer/postJob') ?>" class="nav-item nav-link" style="<?php if ($_GET['controller'] == "user") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">Đăng tin <i class="fa fa-arrow-right ms-3"></i></a>
            <a href="<?php echo url('employer/money') ?>" class="nav-item nav-link" style="<?php if ($_GET['controller'] == "user") { ?>
                                                                                                    display:
                                                                                                    none
                                                                                                <?php } ?>">Nạp tiền<i class="fa fa-arrow-right ms-3"></i></a>                                                                                    

        </div>
        <div class="nav-item dropdown">
            <?php if (AuthLogin::loggedIn('email')) { ?>
                <div class="nav-item dropdown">
                    <i class="fa fa-user"></i><?php echo AuthLogin::getUser('email')['email']; ?>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="<?php echo url('auth/login') ?>" class="dropdown-item av-item nav-link" style="w">Đăng xuất</a>
                    </div>
                </div>
            <?php } else { ?>
                <a href="<?php echo url('auth/login') ?>" class="av-item nav-link">Đăng nhập</a>
            <?php } ?>
        </div>
    </div>

</nav>
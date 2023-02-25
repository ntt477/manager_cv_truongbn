<?php include_once 'View/Layout/index.php' ?>
<style>
	button {
    padding: 0;
}
</style>
<head>
	<link href="<?php echo asset('assets/web/assets/css/post.css') ?>" rel="stylesheet">
	<style>
		span.location.mb-0 {
			font-family: cursive;
			color: #00B074 !important;
			text-transform: uppercase;
			font-size: 18px;
		}

		.team.d-md-flex.p-4.bg-white {
			background-clip: content-box !important;
			background-color: #bed8d0 !important ;
		}
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
							<form action="" method="POST">
								<?php foreach ($data as $value) { ?>
									<div class="team d-md-flex p-4 bg-white">
										<img class="img" src="https://img5.thuthuatphanmem.vn/uploads/2021/11/18/anh-tuyen-dung-hai-huoc-cute_075508148.jpg" alt="">
										<div class="text pl-md-4">
											<span class="location mb-0" style="text-trasform:uppercase"><?php echo $value['title'] ?></span>
											<h2><?php echo $value['user_name'] ?></h2>
											<span class="position"><?php echo $value['degree'] ?></span>
											<p class="mb-2"><?php echo $value['experience'] ?></p>
											<span class="seen" style="color:red;font-size:16px"><a href="<?php echo url('employer/cv_detail?cv_name=' . $value['upload']) ?>"><?php echo $value['upload'] ?></a></span>
											<br>
											<button><a href="<?php echo url('employer/historyJob/?user_id='.$_GET['employer_id'])  ?>" class="btn btn-primary">Xem Cv này sẽ mất 10$, nếu đồng í thì click vào đây ?</a></button>
										</div>
									</div>
								<?php } ?>
							</form>
						</div>
						<div class="col-md-12">

						</div>
					</div>
					<div class="row mt-5">
						<div class="col text-center">
							<div class="block-27">
								<ul>
									<li><a href="#">&lt;</a></li>
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&gt;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>


				<div class="sidebar-box bg-white p-4 ftco-animate">
					<h3 class="heading-sidebar">Job Type</h3>
					<form action="#" class="browse-form">
						<label for="option-job-type-1"><input type="checkbox" id="option-job-type-1" name="vehicle" value="" checked> Partime</label><br>
						<label for="option-job-type-2"><input type="checkbox" id="option-job-type-2" name="vehicle" value=""> Fulltime</label><br>
						<label for="option-job-type-3"><input type="checkbox" id="option-job-type-3" name="vehicle" value=""> Intership</label><br>
						<label for="option-job-type-4"><input type="checkbox" id="option-job-type-4" name="vehicle" value=""> Temporary</label><br>
						<label for="option-job-type-5"><input type="checkbox" id="option-job-type-5" name="vehicle" value=""> Freelance</label><br>
						<label for="option-job-type-6"><input type="checkbox" id="option-job-type-6" name="vehicle" value=""> Fixed</label><br>
					</form>
				</div>
			</div>
		</div>
</div>
</section>

<section class="ftco-section-parallax">
	<div class="parallax-img d-flex align-items-center">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<h2>Subcribe to our Newsletter</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
					<div class="row d-flex justify-content-center mt-4 mb-4">
						<div class="col-md-12">
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex">
									<input type="text" class="form-control" placeholder="Enter email address">
									<input type="submit" value="Subscribe" class="submit px-3">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include_once 'View/Layout/includes/footer.php' ?>
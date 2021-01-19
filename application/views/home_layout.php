<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 07/12/2019
 * Time: 11:07 AM
 */
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $content['title']?></title>
	<!-- bootstrap -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?= base_url('asset/css/custom.css')?>">
	<!-- asap font -->
	<link href="https://fonts.googleapis.com/css?family=Asap&display=swap&subset=vietnamese" rel="stylesheet">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

</head>
<body>
	<button onclick="" id="myBtn" class="button-BTT" title="Go to top"><i class="fas fa-angle-up" style="font-size: 20px; font-weight: bold;"></i></button>
	<!-- login -->
	<div id="login-web">
		<?= $login?>
	</div>
	<!-- end login -->
	<img src="<?= base_url('images/background/main_bg.png')?>" style="position: absolute; z-index: -1; background-repeat: repeat-y;" class="img-fluid">
	<!-- navbar for web -->
	<div id="navbar-web">
		<div class="w-100">
			<nav class="navbar navbar-expand-lg fixed-top none-padding" style="padding-top: 0px; background-color: #007bff;">
				<div class="container">
					<a class="navbar-brand" href="<?=base_url()?>" style="padding: 0px;">
						<img src="<?= base_url('images/logo.png')?>" class="logo-brand" alt="MyTalk">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon" style="color:#ffffff;font-size: 20px; border: 2px solid white; border-radius: 3px; padding-top: 2px;"><i class="fas fa-grip-horizontal" style=""></i></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive-disable">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item align-self-center">
								<h6 style="margin: 0px; color: white; padding-right: 30px;"><span><img src="<?= base_url('images/icon/phone-icon.png')?>" class="icon-custom"></span> (024) 7106 0808</h6>
							</li>
							<li class="nav-item align-self-center">
								<h6 style="margin: 0px; color: white; padding-right: 30px;"><span><img src="<?= base_url('images/icon/email-icon.png')?>" class="icon-custom"></span> cskh@vano.vn</h6>
							</li>
							<?php
							if ($this->session->msisdn == 'empty') {
								echo '<li class="nav-item"><a id="dangnhapbtn1" class="btn btn-primary btn-outline-light btn-sm" href="#" style="width: 120px;"><strong>Đăng nhập</strong></a></li>';
								}
							?>
						</ul>
					</div>
				</div>
			</nav>
			<nav class="navbar navbar-expand-lg fixed-top fixed-top-2 none-padding" style="padding: 0px; background-color: #3194ff;">
				<div class="container">
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<?php
								if ($this->session->msisdn != 'empty') {
									echo '<li class="nav-item none-padding"><a href="#" class="nav-link text-white disabled">Xin chào: '.rewitePhoneNumb($this->session->msisdn,1).'</a></li>';
								}
							?>
							<li class="nav-item non-padding">
								<a class="nav-link text-white" href="#intro">MYTALK 4.0</a>
							</li>
							<?php
								if ($this->session->msisdn != 'empty') {
									echo '<li class="nav-item non-padding"><a class="nav-link text-white" href="#machinelearning">MACHINE LEARNING</a></li>';
									echo '<li class="nav-item non-padding"><a class="nav-link text-white" href="#promotion">PROMOTION</a></li>';
								}
							?>
							<li class="nav-item non-padding">
								<a class="nav-link text-white" href="#huongdan">HƯỚNG DẪN</a>
							</li>
							<li class="nav-item non-padding">
								<a class="nav-link text-white" href="#goidichvu">GÓI DỊCH VỤ</a>
							</li>
							<li class="nav-item non-padding">
								<a class="nav-link text-white" href="#aboutme">VỀ CHÚNG TÔI</a>
							</li>
							<li class="nav-item none-padding">
								<a class="nav-link text-white" href="<?= base_url('khuyen-mai');?>">KHUYẾN MẠI</a>
							</li>
							<li class="nav-item none-padding">
								<a class="nav-link text-white" href="http://news.mytalk.vn/">TIN TỨC</a>
							</li>
							<?php
								if ($this->session->msisdn == 'empty') {
									echo '<li class="nav-item none-padding show-sm"><a id="dangnhapbtn2" class="btn btn-primary btn-sm" href="#" style="width: 120px;"><strong>Đăng nhập</strong></a></li>';
								}
							?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- end navbar for web -->

	<!-- body web - content -->
	<div id="body-web" class="w-100">
		<?= $content['view']?>
	</div>
	<!-- end content web -->

	<!-- footer web -->
	<div id="footer-web" class="w-100">
		<?= $footer['view']?>
	</div>
	<!-- end footer web -->

	<!-- JS -->

	<script	src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="<?= base_url('asset/js/js.js')?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: ngocson
 * Date: 07/18/2019
 * Time: 10:20 AM
 */
?>

<main>
	<div id="dangnhap" style="display: none;position: absolute;z-index: 9999;min-width: 100%; min-height: 100%">
		<div class="container login-container">
			<div class="row">
				<div id="content-login" class="col-sm-10 col-md-4 login-form-1 center-div">
					<img id="iconClose" src="<?= base_url('images/icon/close.png')?>" class="close-icon">
					<div>
						<img src="<?= base_url('images/logo1.png')?>" class="img-fluid center-div" style="position: relative;">
					</div>
					<form method="post" action="">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Số điện thoại *" value="" />
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Mật khẩu *" value="" />
						</div>
						<div class="form-group">
							<center>
								<input type="submit" class="btn btn-primary btnSubmit" value="Đăng nhập"/>
							</center>
						</div>

						<div class="text-center p-t-115">
                            <span class="txt1">
                                Bạn chưa có tài khoản?
                            </span>

							<a class="txt2" href="#">
								Đăng kí ngay
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>

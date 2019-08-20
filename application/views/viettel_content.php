<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 07/12/2019
 * Time: 03:37 PM
 */
?>

<main>
	<div class="w-100 carousel-margin">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="<?= base_url('images/img/carousel-1.png')?>" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?= base_url('images/img/carousel-2.png')?>" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?= base_url('images/img/carousel-3.png')?>" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="w-100">
		<div class="container">
			<div class="row" id="intro">
				<div class="col-12">
					<h1 class="text-color-custom" style="margin: 20px auto">MYTALK 4.0 LÀ GÌ?</h1>
					<hr style="border: 3px solid #2692f5; border-radius: 3px; width: 30px;">
				</div>
				<div class="col-sm-12 col-md-5">
					<p>MyTalk 4.0 là dịch vụ ứng dụng tính năng công nghệ mới "speech to text" - nhận dạng giọng nói. Công nghệ
						specch to text làm việc trên nền tảng công nghệ trí tuệ nhân tạo AI, giúp chuyển đổi giọng nói thành văn bản.
						Thay vì tương tác bằng bàn phím vật lý thì khách hàng chỉ cần tương tác với hệ thống bằng giọng nói.</p>
					<p>Những tương tác hệ thống đến khách hàng cũng bằng giọng nói. Trong thời đại bùng nổ thông tin và cuộc
						cách mạng công nghiệp 4.0 đang diễn ra mạnh mẽ như hiện nay, MyTalk 4.0 tự hào là dịch vụ mang tính đột phá,
						mới nhất và duy nhất trên mạng MobiFone.</p>
					<p>Việc ứng dụng công nghệ nhận diện giọng nói trên nền tảng trí tuệ nhân tạo AI sẽ đem đến cho khách hàng
						những trải nghiệm thú vị nhất. Đến với Mytalk 4.0 là đến với công nghệ mới, đến với sự hòa nhập, sự tiến bộ
						và xu thế mới.</p>
				</div>
				<div class="col-sm-12 col-md-7">
					<img src="<?= base_url('images/img/mt4.png')?>" class="img-fluid">
				</div>
			</div>
			<div class="row" id="machinelearning">
				<div class="col-12">
					<h1 class="text-color-custom" style="margin: 20px auto">MẸ KỂ CON NGHE</h1>
					<hr style="border: 3px solid #2692f5; border-radius: 3px; width: 30px;">
				</div>
				<div class="col-sm-12 col-md-5">
					<img src="<?= base_url('images/img/mt42.png')?>" class="img-fluid">
				</div>
				<div class="col-sm-12 col-md-7">
					<p>
						Bạn muốn cho con nghe những câu chuyện cổ tích thú vị, những câu chuyện về bài học đạo đức ý nghĩa nhưng lại không có thời gian để kể chuyện cho con nghe.
						Sản phẩm “Mẹ kể con nghe” sẽ giải quyết ngay những vướng mắc đó của bạn!
					</p>
					<ul class="cc-li-custom">
						<li><p><span><i class="far fa-check-circle text-color-custom"></i></span><strong> Con bạn sẽ được nghe những câu truyện cổ tích thú vị.</strong></p></li>
						<li><p><span><i class="far fa-check-circle text-color-custom"></i></span><strong> Học những bài học đạo đức đến từ những câu truyện.</strong></p></li>
						<li><p><span><i class="far fa-check-circle text-color-custom"></i></span><strong> Học tập lịch sử đất nước qua những câu truyện lịch sử.</strong></p></li>
					</ul>
					<p>Với sản phẩm này, bố mẹ cũng giảm được nỗi lo khi các con sử dụng các thiết bị điện tử không đúng mục đích.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="w-100" style="background-color:#f2f5f9;" id="promotion">
		<h1 class="text-center text-color-custom" style="padding: 30px 0px 25px 0">MEDIUM</h1>
		<hr style="margin: auto; border: 3px solid #2692f5; border-radius: 3px; width: 30px;">
		<div class="w-50" style="margin: 20px auto">
			<p class="text-center">Với gói Promotion, bạn sẽ được tham gia tương tác với hệ thống bằng việc trả lời câu hỏi theo chủ đề để kiểm tra
				và nâng cao kiến thức về văn hóa, xã hội, giáo dục, giải trí, nghệ thuật,... và nhận giải thưởng tùy thời điểm
				diễn ra CTKM.</p>
		</div>
		<div class="row" style="margin: 0px">
			<div class="col-sm-12 col-md-6" style="padding: 0px;">
				<img src="<?= base_url('images/img/promo-l.png')?>" class="img-fluid">
			</div>
			<div class="col-sm-12 col-md-6" style="padding: 0px;">
				<img src="<?= base_url('images/img/promo-r.png')?>" class="img-fluid">
			</div>
		</div>
	</div>

	<div class="w-100" style="position: relative;" id="khuyenmai">
		<div style="position: relative;">
			<img src="<?= base_url('images/background/km_bg.PNG')?>" class="img-fluid">
		</div>
		<div class="w-100" style="position: absolute; top: 25%;">
			<h1 class="text-center text-white">KHUYẾN MÃI</h1>
			<hr style="border: 3px solid white; border-radius: 3px; width: 30px; margin: 20px auto 20px auto;">
			<center><a class="btn btn-light" href="<?= base_url('khuyen-mai')?>">Xem chi tiết</a></center>
		</div>
	</div>
	<div class="w-100" id="huongdan">
		<div class="container">
			<h1 class="text-center text-color-custom" style="font-weight: bolder; margin-top: 30px">HƯỚNG DẪN</h1>
			<hr style="border: 3px solid #2692f5; border-radius: 3px; width: 30px; margin: 20px auto 20px auto;">
			<h4 class="text-center">CÁCH ĐĂNG KÍ/HỦY DỊCH VỤ</h4>
			<p class="w-50 text-center" style="margin: auto">Chỉ cần là thuê bao đang hoạt động 2 chiều của mạng MobiFone bạn có thể dễ dàng đăng ký và sử dụng dịch vụ qua các kênh sau:</p>
			<ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-sms-tab" data-toggle="pill" href="#pills-sms" role="tab" aria-controls="pills-home" aria-selected="true"><span><img src="<?= base_url('images/icon/sms.PNG')?>" style="width: 15px; height: auto;"></span> QUA KÊNH SMS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-wap-tab" data-toggle="pill" href="#pills-wap" role="tab" aria-controls="pills-profile" aria-selected="false"><span><img src="<?= base_url('images/icon/global.PNG')?>" style="width: 15px; height: auto;"></span> QUA KÊNH WAP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-ivr-tab" data-toggle="pill" href="#pills-ivr" role="tab" aria-controls="pills-contact" aria-selected="false"><span><img src="<?= base_url('images/icon/tele.png')?>" style="width: 15px; height: auto;"></span> QUA KÊNH IVR</a>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-sms" role="tabpanel" aria-labelledby="pills-sms-tab">
					<div class="w-75" style="margin: auto">
						<h4 class="text-center">Soạn tin theo <span class="span-text">&#60CÚ PHÁP&#62</span> gửi <span class="span-text">1048</span></h4>

						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="row">
									<div class="col-12">
										<h4 class="text-center">GÓI MEDIUM</h4>
									</div>
								</div>
								<div class="card text-center">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<h4 class="text-color-custom">Viettel</h4>
										</li>
										<li class="list-group-item">
											<p>Đăng kí dịch vụ</p>
											<div class="row">
												<div class="col-12">
													<p><strong>Soạn M hoặc soạn M1</strong></p>
												</div>
											</div>
										</li>
										<li class="list-group-item">
											<p>Gói ngày</p>
											<hr style="width: 30px; height: 3px; margin: auto">
										</li>
										<li class="list-group-item">
											<p>Cú pháp xác nhận đăng kí</p>
											<p><strong>-</strong></p>
										</li>
										<li class="list-group-item">
											<p>Hủy gói thành viên</p>
											<p><strong>-</strong></p>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-sm-12 col-md-6">
								<div class="row">
									<div class="col-12">
										<h4 class="text-center">GÓI MẸ KỂ CON NGHE</h4>
									</div>
								</div>
								<div class="card text-center">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<h4 class="text-color-custom">Viettel</h4>
										</li>
										<li class="list-group-item">
											<p>Đăng kí dịch vụ</p>
											<div class="row">
												<div class="col-12">
													<p><strong>Soạn ME hoặc soạn KE</strong></p>
												</div>
											</div>
										</li>
										<li class="list-group-item">
											<p>Gói ngày</p>
											<hr style="width: 30px; height: 3px; margin: auto">
										</li>
										<li class="list-group-item">
											<p>Cú pháp xác nhận đăng kí</p>
											<p><strong>-</strong></p>
										</li>
										<li class="list-group-item">
											<p>Hủy gói thành viên</p>
											<p><strong>-</strong></p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="w-100">
							<div class="card text-center" style="margin: 30px 0 30px 0;">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<p>Lấy hướng dẫn</p>
										<p><strong>Soạn HD</strong></p>
									</li>
									<li class="list-group-item">
										<p>Truy vấn gói cước đang sử dụng</p>
										<p><strong>Soạn KT</strong></p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="pills-wap" role="tabpanel" aria-labelledby="pills-wap-tab">
					<div class="w-75" style="margin: auto">
						<p class="text-center">Khách hàng truy cập vào website dịch vụ: <span><a href="http://mytalk.vn">http://mytalk.vn</a></span> trên thiết bị di động</p>
						<h2 class="text-center text-color-custom">ĐĂNG KÍ</h2>
						<p class="text-center"><strong>Trường hợp sử dụng kết nối 3G/4G Viettel</strong></p>
						<p class="text-center text-color-custom"><strong>Tự động nhận diện số thuê bao.</strong></p>

						<div class="row" style="margin: 30px 0 30px 0;">
							<div class="col-sm-12 col-md-4">
								<div class="card text-justify" style="height: 100%; background-color:#f2f5f9;">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<p><strong>Bước 1</strong></p>
										</li>
										<li class="list-group-item">
											<p>Khách hàng bấm Menu, sau đó bấm <span class="text-color-custom">đăng ký</span>.</p>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-sm-12 col-md-4">
								<div class="card text-justify" style="height: 100%; background-color:#f2f5f9;">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<p><strong>Bước 2</strong></p>
										</li>
										<li class="list-group-item">
											<p>Khách hàng chọn gói cước cần đăng kí bao gồm những gói cước sau: Gói cước <span class="text-color-custom">Mẹ kể con nghe</span>, gói cước <span class="text-color-custom">Medium</span>.</p>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-sm-12 col-md-4">
								<div class="card text-justify align-self-stretch h-100" style="background-color:#f2f5f9;">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<p><strong>Bước 3</strong></p>
										</li>
										<li class="list-group-item">
											<p>Hệ thống sẽ gửi tin nhắn tới thuê bao khách hàng để xác nhận đăng ký qua SMS.</p>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<p class="text-center"><strong>Trường hợp sử dụng kết nối WiFi hoặc hệ thống không nhận diện được số thuê bao:</strong></p>
						<p class="text-center text-color-custom"><strong>Không hỗ trợ đăng ký qua WiFi.</strong></p>
						<hr style="width: 100px; margin: auto; padding: 30px 0 30px 0">
						<h3 class="text-center text-color-custom" style="font-weight: bolder">HỦY DỊCH VỤ</h3>
						<p class="text-center">Hệ thống không hỗ trợ hủy dịch vụ trên website. Để hủy dịch vụ, khách hàng soạn cú pháp tin nhắn theo hướng dẫn.</p>
					</div>
				</div>

				<div class="tab-pane fade" id="pills-ivr" role="tabpanel" aria-labelledby="pills-ivr-tab">
					<div class="w-50" style="margin: auto;">
						<h4 class="text-center text-color-custom">Với thuê bao Viettel</h4>
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card text-center" style="margin: 30px 0 30px 0;">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<p class="text-color-custom"><strong>Gói Medium</strong></p>
											<h5><strong>Gọi 1048 > Bấm phím 1</strong></h5>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-sm-12 col-md-6">
								<div class="card text-center" style="margin: 30px 0 30px 0;">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<p class="text-color-custom"><strong>Gói Mẹ kể con nghe</strong></p>
											<h5><strong>Gọi 1048 > Bấm phím 2</strong></h5>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- cac goi dich vu -->
			<div class="w-100" id="goidichvu">
				<h1 class="text-center text-color-custom" style="font-weight: bolder">CÁC GÓI DỊCH VỤ</h1>
				<hr style="border: 3px solid #2692f5; border-radius: 3px; width: 30px; margin: 20px auto 20px auto;">
				<h3 class="text-center" style="font-weight: bolder">THÔNG TIN VỀ GÓI CƯỚC VÀ MỨC CƯỚC TƯƠNG ỨNG</h3>
				<h4 class="text-center" style="font-weight: bolder">(Giá cước đã bao gồm VAT)</h4>
				<div class="container" style="margin: auto">
					<div class="row">
						<div class="col-6">
							<p class="text-color-custom text-right">Cước vượt định mức khi gọi đầu số 1048</p>
							<p class="text-color-custom text-right">Cước nhắn tin SMS tới đầu số dịch vụ</p>
						</div>
						<div class="col-6">
							<h4 class="text-color-custom" style="font-weight: bolder">40 đồng/phút <span>(Tính theo block 1+1 phút)</span></h4>
							<h4 class="text-color-custom" style="font-weight: bolder">Miễn phí <span>(Đăng ký/hủy và các cú pháp tiện ích khác)</span></h4>
						</div>
					</div>

					<div class="w-75" style="margin: auto">
						<div class="row" style="padding: 20px 0px 40px 0px">
							<div class="col-sm-12 col-md-6 margin-goi">
								<div class="card text-center text-white h-100" style="background-color: #236abc; border-radius: 10px;">
									<h4 style="margin-top: 30px;">Medium</h4>
									<h1>3.000đ</h1>
									<div class="w-75" style="margin: auto">
										<p>Mỗi ngày</p>
										<hr style="margin: auto; width: 30px; border: 3px solid white; border-radius: 3px">

										<div class="button-goi">
											<a class="btn btn-primary" href="#" style="width: 100px; font-weight: 700;">Đăng ký</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-md-6 margin-goi">
								<div class="card text-center text-white h-100" style="background-color: #1e599e; border-radius: 10px;">
									<h4 style="margin-top: 30px;">Mẹ kể con nghe</h4>
									<h1>1.000đ</h1>
									<div class="w-75" style="margin: auto">
										<p>Mỗi truyện</p>
										<hr style="margin: auto; width: 30px; border: 3px solid white; border-radius: 3px">

										<div class="button-goi">
											<a class="btn btn-primary" href="#" style="width: 100px; font-weight: 700;">Đăng ký</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- ket thuc cac goi dich vu -->
		</div>
		<!-- about me -->
		<div class="w-100" id="aboutme" style="background-color:#f2f5f9;">
			<h1 class="text-center text-color-custom" style="font-weight: bolder;padding-top: 30px;">VỀ CHÚNG TÔI</h1>
			<hr style="width: 30px; border: 3px solid #2692f5; margin: auto; border-radius: 3px; margin: 10px auto">
			<div class="container">
				<p class="text-center">
					Công ty cổ phần VANO được thành lập 12/02/2009 theo Giấy chứng nhận đăng lý kinh doanh số 0103327293 do Sở Kế hoạch & Đầu tư Tp.Hà Nội cấp năm 2009
					với chức năng, ngành nghề chính là kinh doanh dịch vụ viễn thông, công nghệ thông tin và nội dung số nói chung. Từ khi thành lập, với đội ngũ nhân sự
					đông đảo, giàu năng lực và nhiệt huyết, VANO tự hào là dội ngũ tiên phong trong lĩnh vực nội dung số. Các dịch vụ do chúng tôi cung cấp luôn tạo ra các
					giá trị thiết thực, thu hút đông đảo khách hàng tham gia.
				</p>

				<p style="font-weight: bold" class="text-center text-color-custom">Ngoài Mytalk 4.0, hãy cùng điểm qua một số dịch vụ nổi bật khác mà VANO cung cấp nhé:</p>
			</div>
			<div class="w-100" style="background-image: linear-gradient(to bottom, #67e0f5, #007bff);padding: 40px 0px 40px 0px; margin-top: 40px">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-4 margin-top-app">
							<div class="card text-center text-white" style="background-color: transparent; border: none;">
								<div>
									<img src="<?= base_url('images/icon/love.png')?>" class="img-fluid" style="position: absolute; margin: -80px auto auto -40px">
								</div>
								<h4>Dịch vụ kết bạn Hulaa</h4>
								<p class="text-justify">
									Kết bạn Hulaa là một mô hình dịch vụ kết bạn mới lạ, hấp dẫn trên mạng MobiFone, kết hợp các tính năng tương tác và bộ lọc tiêu chí
									đối tượng đa dạng của các mô hình Kết bạn hiện nay với các nền tảng dịch vụ viễn thông, tạo ra sự trải nghiệm và thú vị cho các khách
									hàng trên mạng MobiFone.
								</p>
							</div>
						</div>

						<div class="col-sm-12 col-md-4 margin-top-app">
							<div class="card text-center text-white" style="background-color: transparent; border: none;">
								<div>
									<img src="<?= base_url('images/icon/bank.png')?>" class="img-fluid" style="position: absolute; margin: -80px auto auto -40px">
								</div>
								<h4>Đấu giá linh hoạt - iBid</h4>
								<p class="text-justify">
									Đấu giá linh hoạt - iBid là hệ thống các chương trình đấu giá trực tuyến dành cho các thuê bao MobiFone với nhiều hình thức linh hoạt:
									đặt giá cao nhất và duy nhất, đặt giá thấp nhất và duy nhất, đặt giá sớm nhất và duy nhất,... được thay đổi luân phiên theo từng loại
									hình sản phẩm và phiên đấu giá sẽ tạo nên sự hấp dẫn và cuốn hút đối với Khách hàng MobiFone. Khi tham gia đấu giá iBid, người chơi tham
									gia sẽ có cơ hội trúng những sản phẩm hấp dẫn như thẻ cào, usb, ổ cứng di động, loa nghe nhạc, smartphone,…
								</p>
							</div>
						</div>

						<div class="col-sm-12 col-md-4 margin-top-app">
							<div class="card text-center text-white" style="background-color: transparent; border: none;">
								<div>
									<img src="<?= base_url('images/icon/mask.png')?>" class="img-fluid" style="position: absolute; margin: -80px auto auto -40px">
								</div>
								<h4>Dịch vụ Kho giải trí</h4>
								<p class="text-justify">
									Dịch vụ Kho giải trí cung cấp thông tin về những chương trình giải trí hấp dẫn được chiếu trên truyền hình thông qua SMS và Wapsite. Sau khi
									đăng ký tham gia, khách hàng có thể truy cập wapsite để xem các video, audio, tin tức mới nhất về các chương trình truyền hình như gameshow,
									truyền hình thực tế, tin tức thời sự, thông tin văn hóa du lịch, tham gia nhắn tin bình chọn thần tượng để có cơ hội nhận các giải thưởng hấp dẫn.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end about me -->
	</div>
</main>

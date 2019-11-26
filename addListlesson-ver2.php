<?php include("general.php"); ?>
<?php include("headerMore.php"); ?>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css">
<content>
	<div class="container pad-30 pad-60" id="add-lesson-ver2">
		<div class="row">
			<div class="col-12 content-baitap">
				<div class="row">
					<div class="col-3 img-baitap-title">
					<img class="" src="./site/img/bg-callout.jpg">
					</div>
					<div class="col-9 text-baitap-name">
						<p class="baitap-title">Bài Tập Amin-Amino Axit- Peptit-Protein</p>
						<p class="baitap-num"><span>30 </span>câu hoi - trình độ <span>cơ bản</span></p>
						<p class="baitap-info">
							<span class="phathanh"><i class="fa fa-hourglass-start" aria-hidden="true"></i> Phát hành :<span class="val-phathanh">31/10/2019</span></span>
							<span>-</span>
							<span class="luotxem"><i class="fa fa-eye" aria-hidden="true"></i> Lượt xem:<span class="val-luotxem">1200</span></span>
							<span class="luotlam"><i class="fa fa-pencil" aria-hidden="true"></i> Lượt làm bài:<span class="val-luotlam">600</span></span>
						</p>
						<div class="btn-baitap-name">
							<a href="#" class="btn-start-baitap"><i class="fa fa-play" aria-hidden="true"></i>Bắt đầu làm bài</a>
							<a href="#" class="btn-save-baitap"><i class="fa fa-heart-o" aria-hidden="true"></i>Lưu vào danh sách yêu thích</a>
						</div>
					</div>
					<div class="col-12 text-baitap-intro">
						<p class="al-intro-general">Giới Thiệu Chung</p>
						<p class="al-intro-text">Nội dung bài tập bao gồm 30 câu hỏi trắc nghiệm chuyên đề  Amin- Amino Axit-Peptit kèm theo đáp án và nội dung bài giảng</p>
					</div>
				</div>
				<div class="row history-baitap">
					<div class="container padd-no">
						<br>
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#alrank">Bảng Xếp Hạng</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#alHistory">Lịch Sử Bài Làm</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div id="alrank" class="container tab-pane active"><br>
								<h3>Bảng Xếp Hạng</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div id="alHistory" class="container tab-pane fade"><br>
									<h3>Lịch Sử Làm Bài</h3>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="al-line"></div>
				<div class="row relate-homework">
					<div class="col-12">
						<p class="row al-relate-homework-title"><i class="fa fa-star-half-o" aria-hidden="true"></i>Bài Tập Có Liên Quan</p>
						<?php 
							for ($i=0; $i<10; $i++) {
						?>
								<div class="row row-al-relate-homework">
									<div class="col-3 al-relate-img">
										<img class="" src="./site/img/bg-callout.jpg">
									</div>
									<div class="col-9 al-relate-content">
										<p class="baitap-title">Bài Tập Amin-Amino Axit- Peptit-Protein</p>
										<p class="baitap-num">Môn <span>Hóa Học</span> <span>30</span> câu hoi - trình độ <span>cơ bản</span></p>
										<p class="baitap-gioithieu">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										<p class="baitap-info">
											<span class="phathanh"><i class="fa fa-hourglass-start" aria-hidden="true"></i> Phát hành :<span class="val-phathanh">31/10/2019</span></span>
											<span>-</span>
											<span class="luotxem"><i class="fa fa-eye" aria-hidden="true"></i> Lượt xem:<span class="val-luotxem">1200</span></span>
											<span class="luotlam"><i class="fa fa-pencil" aria-hidden="true"></i> Lượt làm bài:<span class="val-luotlam">600</span></span>
										</p>
									</div>
								</div>
							
						<?php
								}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>							
</content>

<?php include("footer.php"); ?></body>
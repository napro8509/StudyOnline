<?php include("general.php"); ?>
<?php include("headerMore.php"); ?>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css">
<content>
	<div class="container pad-30 pad-60" id="add-lesson">
		<h2 class ="padl-10 title title-hoc-phi text-center" id="listPanel">Ôn thi THPT Quốc Gia môn Hóa Học</h2>
		<div class="line-main"></div>
		<div class="row intro-learn text-center nav nav-tabs" role="tablist">
			<div class="col-sm-4 tamgiac active" href="#vaohoc" role="tab" data-toggle="tab">
				<div class="row row-intro-learn">
					<div class="col-sm-12 vao-hoc">
						<h5 class="color-white">VÀO HỌC</h5>
						<p class="color-white" style="border-bottom: 1px solid #fff;">Xem bài giảng video</p>
						
						<img src="./site/img/icon-1.png">
					</div>
				</div>
			</div>
			<div class="col-sm-4 tamgiac" href="#luyentap" role="tab" data-toggle="tab">
				<div class="row row-intro-learn">
					<div class="col-sm-12 luyen-tap">
						<h5 class="color-white">LUYỆN TẬP</h5>
						<p class="color-white" style="border-bottom: 1px solid #fff;">Làm bài tập tổng hợp</p>
						<img src="./site/img/icon-2.png">
					</div>
				</div>
			</div>
			<div class="col-sm-4 tamgiac" href="#chienluochoctap" role="tab" data-toggle="tab">
				<div class="row row-intro-learn">
					<div class="col-sm-12 luyen-de">
						<h5 class="color-white">VÀO HỌC</h5>
						<p class="color-white" style="border-bottom: 1px solid #fff;">Thi thử THPT QG</p>
						<img src="./site/img/icon-3.png">
					</div>
				</div>
			</div>
		</div>
		<div class="tab-content row pad-30">
			<div class="tab-pane fade in active" role="tabpanel" id="vaohoc">
				<div class="col-sm-8">
				<div class="container add-lesson-border">
					<div class="row add-lesson-pad">
						<div class="col-sm-6 mr-b-10">
							<i class="fa fa-list-ul" aria-hidden="true"></i>
							<span style="font-size: 22px;">Danh sách bài giảng</span>
						</div>
						<div class="col-sm-6">
							<input type="text" class="text-search add-lesson-input" placeholder="Tên bài giảng">
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="row choosen-courses">
							<table class="table">
									<tbody>
									  <tr>
										<td><p class="markDescription">Lựa chọn theo Khóa học</p><p><i>(theo mức điểm kỳ vọng)</i></p></td>
										<td>
											<div class="form-check form-check-1">
												<label class="container-btn mdl-radio__label">10 điểm
												  <input type="radio" checked="checked" name="radio">
												  <span class="checkmark"></span>
												</label>
											</div>
											<p><i>116 bài</i></p>
										</td>
										<td>
											<div class="form-check form-check-1">
												<label class="container-btn mdl-radio__label">8.5 điểm
												  <input type="radio" checked="checked" name="radio">
												  <span class="checkmark"></span>
												</label>
											</div>
											<p><i>108 bài</i></p>
										</td>
										<td>
											<div class="form-check form-check-1">
												<label class="container-btn mdl-radio__label">7.5 điểm
												  <input type="radio" checked="checked" name="radio">
												  <span class="checkmark"></span>
												</label>
											</div>
											<p><i>78 bài</i></p>
										</td>
										
									  </tr>
									  <tr>
										<td><p  class="markDescription">Lọc bài giảng</p><p><i>(Theo kết quả)</i></p></td>
										<td>
											<div class="form-check-inline">
												<label class="container-btn1 mdl-radio__label">Giỏi
												  <input type="checkbox" checked="checked">
												  <span class="checkmark1"></span>
												</label>
											</div>
											<p><i>0 bài</i></p>
										</td>
										<td>
											<div class="form-check-inline">
												<label class="container-btn1 mdl-radio__label">Trung Bình
												  <input type="checkbox">
												  <span class="checkmark1"></span>
												</label>
											</div>
											<p><i>0 bài</i></p>
										</td>
										<td>
											<div class="form-check-inline mdl-radio__label">
												<label class="container-btn1 color-red">Yếu
												  <input type="checkbox">
												  <span class="checkmark1"></span>
												</label>
											</div>
											<p><i>0 bài</i></p>
										</td>
										<td>
											<div class="form-check-inline mdl-radio__label">
												<label class="container-btn1">Khá
												  <input type="checkbox">
												  <span class="checkmark1"></span>
												</label>
											</div>
											<p><i>0 bài</i></p>
										</td>
									  </tr>
									</tbody>
							</table>
					</div>
				</div><br><br>
				<div class="container add-lesson-border add-lesson-pad">
					<div class="row list-courses">
						<div class="container">
							<div class="row">
								<div class="container">
									<div id="accordion" class="accordion">
										<div class="card mb-0">
											<div class="card-header toggle1 js-card-header">
												<img class ="img-fluid1 mrgr-10" src="./site/img/h1.png">
												<a class="card-title text-upper-case color-organe">
													HH00 - Giới thiệu chương trình Ôn thi THPT quốc gia môn Hóa học
												</a>
												<div id="collapse1" class="card-body js-card-body">
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-not-yet">Chưa học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>			
												</div>
												<div class= "row" style ="display: flex; justify-content: center;">
													<a class="btn-background-green btn-border btn-style-general" href="#"><img class="mrgr-10-w" src="./site/img/h10.png">Đánh Giá Chuyên Đề HH01</a>
												</div>
											</div>
											
									<br>
									<hr>

											<div class="card-header toggle2 js-card-header">
												<img class ="img-fluid1 mrgr-10" src="./site/img/h2.png">
												<a class="card-title text-upper-case color-organe">
													HH01-este-lipit
												</a>
												<div id="collapse1" class="card-body js-card-body">
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-not-yet">Chưa học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>			
												</div>
												<div class= "row" style ="display: flex; justify-content: center;">
													<a class="btn-background-green btn-border btn-style-general" href="#"><img class="mrgr-10-w" src="./site/img/h10.png">Đánh Giá Chuyên Đề HH01</a>
												</div>
											</div>

									<br>
									<hr>
											<div class="card-header toggle3 js-card-header">
												<img class ="img-fluid1 mrgr-10" src="./site/img/h3.png">
												<a class="card-title text-upper-case color-organe">
													HH02-cacbonhidrat
												</a>
												<div id="collapse1" class="card-body js-card-body">
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-not-yet">Chưa học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>
													<div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;">bài học 1</div>
														<div class="col-3"><span class="status-card-lesson status-learned">đã học</span></div>
													</div>			
												</div>
												<div class= "row" style ="display: flex; justify-content: center;">
													<a class="btn-background-green btn-border btn-style-general" href="#"><img class="mrgr-10-w" src="./site/img/h10.png">Đánh Giá Chuyên Đề HH01</a>
												</div>											
											</div>
											
									<br>
									<hr>
										</div>
									</div>
								</div>							
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-sm-4 add-lesson-border add-lesson-pad d-none d-sm-block">
				<div class="block-buy">
						<div class="header">
							<i class="fa fa-cubes" aria-hidden="true"></i>
							<span style="font-size: 20px">Khóa Ôn thi THPT Quốc Gia môn Hóa Học</span>
						</div>
						<div class="teacher-info">
							
							<p>Thầy <span class="teacherName">Trần Hoàng Phi</span></p>
							
								<p>Học phí: <span style="color: red;text-decoration: line-through;">499K</span></p>
								<p>Ưu đãi: <span style="color: var(--bg-color)">100K</span></p>
							
							<button class="btn-buy" onclick="gotoHocPhi(5928805940592640, 13)">
								<i class="fa fa-forward" aria-hidden="true"></i>
								Mua ngay
								<i class="fa fa-backward" aria-hidden="true"></i>
							</button>
						</div>
						<div class="teacher-img">
						
							<img src="./site/img/thay-phi.png">
						</div>
					</div>
				</div>
			</div>
	  		<div class="tab-pane fade" role="tabpanel" id="luyentap">noi dung ne</div>
  			<div class="tab-pane fade" role="tabpanel" id="chienluochoctap">noi dung cua chien luoc hoc tap ne</div>
  		</div>
	</div>
</content>

<script type="text/javascript">
	$(document).ready(function(){
	  $('.js-card-header').click(function(){
	  	var findCard = $('.js-card-header');
	  	var _this = $(this);
	  	if(findCard.find('.js-card-body').hasClass('open')){
	  		$(findCard.find('.js-card-body')).slideUp(400, function(){
				$(findCard.find('.js-card-body')).removeClass('open');
	  		});
	  		
	  	}
	  	else{
	  		_this.find('.js-card-body').slideDown(400, function(){
	  			_this.find('.js-card-body').addClass('open');
	  	});
	  	}

			
	  });
		  
	});
</script>

<?php include("footer.php"); ?></body>
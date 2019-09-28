
<body>
<!-- feature general -->
<!-- modal Login, Sign in -->
<div class="container">	  
		<!-- Modal đăng nhập -->
		<div class="modal fade" id="logIn" role="dialog">
			<div class="modal-dialog">			  
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<h4 class ="color-white">Đăng Nhập!</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="container">
							
							<form action="/action_page.php">
								<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
								</div>
								<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
								</div>
								<div class="form-group form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="remember"> Remember me
								</label>
								</div>
								<button type="submit" class="btn btn-background-red">Submit</button>
							</form>
							</div>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-background-blue-bold-white" data-dismiss="modal">Close</button>
				</div>
			</div>				
			</div>
		</div>
		<!-- Modal đăng kí-->
		<div class="modal fade" id="signIn" role="dialog">
			<div class="modal-dialog">			  
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<h4 class ="color-white"> Đăng ký thành viên! </h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="container"> 
							<div class="row"> 
								<div class="col-12 col-sm-12 col-md-12 well well-sm col-md-offset-4"> 
								
								</legend> 
								<form action="http://hocwebgiare.com" method="post" class="form" role="form"> 
								<div class="row"> 
								<div class="col-6 col-md-6"> <input class="form-control" name="firstname" placeholder="Họ" required="" autofocus="" type="text"> 
								</div> 
								<div class="col-6 col-md-6"> <input class="form-control" name="lastname" placeholder="Tên" required="" type="text"> 
								</div> 
								</div> <input class="form-control" name="youremail" placeholder="Email" type="email"> <input class="form-control" name="password" placeholder="Mật khẩu" type="password"> <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password"> <label for=""> Ngày sinh</label> 
								<div class="row"> 
								<div class="col-4 col-md-4"> <select class="form-control">              <option value="Day">Ngày</option>            </select> 
								</div> 
								<div class="col-4 col-md-4"> <select class="form-control">              <option value="Month">Tháng</option>            </select> 
								</div> 
								<div class="col-4 col-md-4"> <select class="form-control">              <option value="Year">Năm</option>            </select> 
								</div> 
								</div> <label class="radio-inline">          <input name="sex" id="inlineCheckbox1" value="male" type="radio">          Nam </label> <label class="radio-inline">          <input name="sex" id="inlineCheckbox2" value="female" type="radio">          Nữ </label> 
								<br> 
								<br> 
								<button class="btn btn-background-white" type="submit"> Đăng ký</button> 
								</form> 
								</div> 
							</div>
							</div>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-background-blue-bold-white" data-dismiss="modal">Close</button>
				</div>
			</div>				
			</div>
		</div>
</div>
<!-- end feature general -->
<header>
	<div class="container-fluid container-header">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xl-4 header-logo-left">
						<h5>Đề Thi THPT Quốc Gia</h5>
						<p>Tự học - Tự lập - Tự do</p>
					</div>
					<div class="col-sm-6 col-xl-8 header-user">
						<input type="text" class="text-search" placeholder="Nhập mã câu hỏi để tìm đáp án">
						<i class="fa fa-search"></i>
						<button type="button" class="btn btn-background-blue-bold btn-style mrgr-10 " data-toggle="modal" data-target="#logIn">Đăng Nhập</button>
						<button type="button" class="btn btn-background-blue-bold-white btn-style" data-toggle="modal" data-target="#signIn">Đăng ký</button>
					</div>
				</div>
			</div> 
		</div>
	</div> 
	<div class="container-fluid container-header-menu">
		<div class="row">
			<div class="container">
				<div class="row header-menu">
					<nav class="navbar navbar-expand-lg navbar-light">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav">
							<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Ôn thi THPT QG
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="./learningStrategy.html">Chiến lược học tập</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.php">Toán học</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./vatly.php">Vật lý</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.php">Hóa học</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./tree.php">Tiếng anh</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./vanhoc.php">Ngữ Văn</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./lichsu.php">Lịch Sử</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./dialy.php">Địa Lý</a>
									</div>
							</li>
							<li class="nav-item dropdown">		
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Tổng ôn
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="./learningStrategy.html">Chiến lược học tập</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Toán học</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Vật lý</a>
									</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Lớp 11
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="./learningStrategy.html">Chiến lược học tập</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Toán học</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Vật lý</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Hóa học</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Tiếng anh</a>
									</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Lớp 10
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="./learningStrategy.html">Chiến lược học tập</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Toán học</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Vật lý</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Hóa học</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./addListlesson.html">Tiếng anh</a>
									</div>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="./practiceExam.html">Luyện đề</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="./toeic.html">TOEIC</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="./fee.html">Học Phí</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="./.php">Định Hướng</a>
							</li>
						  </ul>
					  </div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
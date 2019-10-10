
<?php include("general.php"); ?>
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

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <img src="./site/img/img_avatar2.png">
        <a class="" href="#page-top">UserName</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="#page-top">Tổng ôn</a>
      </li>
      <li class="sidebar-nav-item dropdown">
        <a class="js-scroll-trigger1 dropdown-toggle" id="lop11-Dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lớp 11</a>
          <div class="dropdown-menu" aria-labelledby="lop11-Dropdown">
	          <a class="dropdown-item" href="#">Toán Học</a>
	          <a class="dropdown-item" href="#">Vật Lý</a>
	          <a class="dropdown-item" href="#">Hóa Học</a>
   		  </div>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="#services">Lớp 10</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="#portfolio">Luyện đề</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="#contact">TOEIC</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="#contact">Định Hướng</a>
      </li>
      <li class="last-li-menu">
      	<button class="btn-logout">Log Out</button>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead-more d-flex">
  		<div class="header-get-started">
		<a class="btn-primary btn-xl js-scroll-trigger">Get Started</a>
	</div>                    
<!-- 	<a class="btn btn-primary btn-xl js-scroll-trigger" style="visibility: visible;" data-toggle="modal" data-target="#logIn">Đăng Nhập</a>
     
     <a class="btn btn-primary btn-xl js-scroll-trigger" style="visibility: visible;" data-toggle="modal" data-target="#signIn">Đăng Ký</a> -->
    <div class="container text-center my-auto">
      <h3 class="mb-1">Ôn Thi THPT Quốc Gia</h3>
    </div>
    <div class="overlay"></div>
  </header>



  <script src="./site/vendor/jquery/jquery.min.js"></script>
  <script src="./site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="./site/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./site/js/stylish-portfolio.js"></script>
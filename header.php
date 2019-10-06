
<?php include("general.php"); ?>
<!-- feature general -->
<!-- modal Login, Sign in -->
<style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }
    * {
      box-sizing: border-box;
    }
    .slider {
        width: 100%;
        margin: 0px auto;
        height: 550px;
    }
    .slick-list.draggable{
    	height: 550px;
    }
    .slick-slide {
      margin: 0px 20px;
    }
    .slick-slide img {
      width: 100%;
    }
    .slick-prev:before,
    .slick-next:before {
      color: black;
    }
    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }
    .slick-current {
      opacity: 1;
    }
    .slick-next{
    	right: 35px;
    }
    .slick-pre{
    	left: 35px;
    	z-index: 99999;
    }
  </style>
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
        <a class="" href="#page-top">UserName</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Tổng ôn</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">Lớp 11</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Lớp 10</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Luyện đề</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">TOEIC</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Định Hướng</a>
      </li>
      <li>
        <img src="./site/img/img_avatar2.png" style=" width: 100%;">
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container-fluid text-center">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="./site/img/slide3.jpg">
                  <div class="carousel-caption">
                    <h1 class="mb-1 bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;">Ôn Thi THPT Quốc Gia</h1>
                    <a class="btn btn-primary btn-xl js-scroll-trigger bounceIn" tyle="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;" data-toggle="modal" data-target="#logIn">Đăng Nhập</a>
                    <a class="btn btn-primary btn-xl js-scroll-trigger bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;" data-toggle="modal" data-target="#signIn">Đăng Ký</a>
                  </div>
              </div>  
              <div class="carousel-item">
                  <img src="./site/img/sllide2.jpg">
                  <div class="carousel-caption">
                    <h1 class="mb-1 bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;">Ôn Thi THPT Quốc Gia</h1>
                    <a class="btn btn-primary btn-xl js-scroll-trigger bounceIn" tyle="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;" data-toggle="modal" data-target="#logIn">Đăng Nhập</a>
                    <a class="btn btn-primary btn-xl js-scroll-trigger bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;" data-toggle="modal" data-target="#signIn">Đăng Ký</a>
                  </div>
              </div> 
              <div class="carousel-item">
                  <img src="./site/img/slide5.jpg">
                  <div class="carousel-caption">
                    <h1 class="mb-1 bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;">Ôn Thi THPT Quốc Gia</h1>
                    <a class="btn btn-primary btn-xl js-scroll-trigger bounceIn" tyle="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;" data-toggle="modal" data-target="#logIn">Đăng Nhập</a>
                    <a class="btn btn-primary btn-xl js-scroll-trigger bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;" data-toggle="modal" data-target="#signIn">Đăng Ký</a>
                  </div>
              </div> 
            </div>  
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="overlay"></div>
  </header>



  <script src="./site/vendor/jquery/jquery.min.js"></script>
  <script src="./site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="./site/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./site/js/stylish-portfolio.js"></script>
  		    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="site/slick/slick.js" type="text/javascript" charset="utf-8"></script>
	
</script>
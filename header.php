
<?php include("general.php"); ?>
<!-- feature general -->
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
<!-- modal Login, Sign in -->
<?php include("modalLogin.php"); ?>
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
    <li class="sidebar-nav-item">
      <a class="js-scroll-trigger1 dropdown-toggle" id="lop11-Dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lớp 11</a>
        <div class="dropdown-menu" aria-labelledby="lop11-Dropdown">
          <a class="dropdown-item" href="#">Toán Học</a>
          <a class="dropdown-item" href="#">Vật Lý</a>
          <a class="dropdown-item" href="#">Hóa Học</a>
      </div>
    </li>
    <li class="sidebar-nav-item">
      <a class="js-scroll-trigger1 dropdown-toggle" id="lop10-Dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lớp 10</a>
        <div class="dropdown-menu" aria-labelledby="lop10-Dropdown">
          <a class="dropdown-item" href="#">Toán Học</a>
          <a class="dropdown-item" href="#">Vật Lý</a>
          <a class="dropdown-item" href="#">Hóa Học</a>
      </div>
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
                      <div class="header-get-started">
                        <a class="btn-xl js-scroll-trigger btn-get-started btn-style-general" data-toggle="modal" data-target="#dangnhap">Get Started</a>
                      </div>  
                </div>
            </div>  
            <div class="carousel-item">
                <img src="./site/img/sllide2.jpg">
                <div class="carousel-caption">
                    <h1 class="mb-1 bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;">Ôn Thi THPT Quốc Gia</h1>
                    <div class="header-get-started">
                      <a class="btn-xl js-scroll-trigger btn-get-started btn-style-general" data-toggle="modal" data-target="#dangnhap">Get Started</a>
                  </div>  
                </div>
            </div> 
            <div class="carousel-item">
                <img src="./site/img/slide5.jpg">
                <div class="carousel-caption">
                      <h1 class="mb-1 bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;">Ôn Thi THPT Quốc Gia</h1>
                      <div class="header-get-started">
                        <a class="btn-xl js-scroll-trigger btn-get-started btn-style-general" data-toggle="modal" data-target="#dangnhap">Get Started</a>
                    </div>  
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
	
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./site/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
<link href="./site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="./site/vendor/jquery/jquery.min.js"></script>
<script src="./site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<style>
	body {
		background-color: #FDF6E6;
		/* text-align: center;
		background-image: url(./site/img/slide3-left-bg.png), url(./site/img/slide3-right-bg.png);
		background-repeat: no-repeat no-repeat;
		background-position: 0% center, right center;
		background-size: 15% auto, 15% auto;
		overflow: hidden; */
	}
	.super_container {
		margin:30px auto;
	}
	.btn-question {
		background-color: #BC5642;
		border-radius: 6px;
		border: none;
		padding: 12px 24px;
		color: #FDF6E6;
		font-size: 16px;
		margin-bottom: 20px;
	}
	.btn-comeback {
		background-color: var(--color-border);
		border: 1px solid var(--color-border);
		border-radius: 4px;
		font-weight: 400;
		color: var(--color-title);
		padding: 6px 20px;
		font-size: 16px;
		line-height: 20px;
		display: inline-block;
		cursor: pointer;
		margin-top:30px;
	}
	.btn-comeback i {
		margin-right:5px;
	}
	.course_boxes img {
		width:100%;
	}
	.section-title-h {
		color: #BC5642;
		font-weight: 500;
		margin-bottom:50px;
		padding: 30px;
		border-radius: 10px;
		border: 1px solid #BC5642;
		box-shadow: 1px 1px 21px 0px #999;
	}
	.question-mini {
		margin-bottom:30px;
		padding: 30px;
		border-radius: 10px;
		border: 1px solid #BC5642;
		box-shadow: 1px 1px 21px 0px #999;
	}
	.col-question {
		padding: 0 50px;
	}
	.question-box {
		padding: 30px 0;
		border-radius: 10px;
		border: 1px solid #BC5642;
		box-shadow: 1px 1px 21px 0px #999;
	}
</style>
</head>
<body>
<?php 
// include('inc/myconnect.php');
// include('inc/function.php');
?>
<div class="super_container">

	<div class="popular page_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					
				</div>
			</div>

			<div class="row course_boxes">
				<div class="col-5">		
					<div class="section_title text-center">
						<h3 class="section-title-h">CHU KỲ CON LẮC LÒ XO</h3>
					</div>
					<img src="./site/img/images/people_01.svg">
				</div>
				<div class="col-7 text-center col-question">
					<div class="main"> 
						<div class="form">	
								<h4 class="question-mini text-left">Câu số 1:Chiều dài của con lắc lò xo treo thẳng đứng dao động điều hoà biến đổi từ 20 cm đến 40 cm, khi lò xo có chiều dài 30 cm thì:</h4>
								<div class="question-box">
									<button class="btn-question <?= $answers['id']; ?>" value="<?php echo $answers['id']; ?>">Biên độ dao động lớn hơn độ biến dạng của lò xo khi vật qua vị trí cân bằng.</button>
									<br/>
									<button class="btn-question <?= $answers['id']; ?>" value="<?php echo $answers['id']; ?>">Biên độ dao động lớn hơn độ biến dạng của lò xo khi vật qua vị trí cân bằng.</button>
									<br/>
									<button class="btn-question <?= $answers['id']; ?>" value="<?php echo $answers['id']; ?>">Biên độ dao động lớn hơn độ biến dạng của lò xo khi vật qua vị trí cân bằng.</button>
									<br/>
									<button class="btn-question <?= $answers['id']; ?>" value="<?php echo $answers['id']; ?>">Biên độ dao động lớn hơn độ biến dạng của lò xo khi vật qua vị trí cân bằng.</button>
									<br/>
									<button type="" class="btn btn-check btn-block confirm" id="xn" style="display:none;">check</button>
									<button class="btn btn-next btn-block disabled next" id="ne_xt" style="display:none;" >Tiếp theo</button>
								</div>
								<div><a class= "btn-comeback" href="lesson.php"><i class="fa fa-chevron-left" aria-hidden="true"></i>Quay lại bài học</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>

</body>
</html>
<?php //include("footer.php"); ?>

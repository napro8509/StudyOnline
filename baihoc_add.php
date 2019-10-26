<title>Contact V6</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script type="text/javascript" src="assets/tinymce/tinymce/tinymce.min.js"></script>
--><!-- <script type="text/javascript" src="assets/tinymce/tiny.js"></script>
-->  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class ="main-container" style="display: flex;">
  	<?php include("navBar.php"); ?>
	<div class ="wrapper">
	<?php include("headerAdmin.php"); ?>
	<?php
		setcookie('MaChuong', '0');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$title=$_POST['title'];
			setcookie('MaChuong', $title);
			header('Location:baihoc.php');
		}
	?>
	<div class="container-add-baihoc container-baihoc">
		<form name="frmbaiviet" method="POST" enctype="multipart/form-data">
			<div class="baihoc-header-title"><h3><i class="fa fa-pencil" aria-hidden="true"></i>THÊM MỚI</h3></div>
			<div class="pad-30 no-pad-30"><a href="baihoc.php" class="btn-style-remove"><i class="fa fa-cog" aria-hidden="true"></i>Chương đã có sẵn</a></div>
			<div class="form-group pad-30 no-pad-30">
				<label>Tên chương</label>
				<input type="text" name="title" value="<?php if (isset($_POST['title'])) {echo $_POST['title'];}?>" class="form-control" placeholder="Tên Chương ">
				<?php
                    if (isset($errors) && in_array('title', $errors)) {
                        echo "<p class='required'>Bạn chưa nhập tiêu đề của chương</p>";
                    }
                    ?>
			</div>
			<div class="pad-30"><input type="submit" name="submit" class="btn btn-primary btn-style-general" value="Thêm mới"></div>
		</form>
	</div>
	</div>
</div>


</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script type="text/javascript" src="assets/tinymce/tinymce/tinymce.min.js"></script>
 --><!-- <script type="text/javascript" src="assets/tinymce/tiny.js"></script>
 -->  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class="container pad-60 mrg-30 baihoc-header" id="addQuiz">
	<div class="row">
		<div class="col-12 choise-quiz-textArea">
			<textarea id = "myTextarea" name="cauhoi"></textarea>
		</div>
		
		<br/>
		
		<div class="col-12 choise-quiz">
			<div class="grid-col">
				<div class="">
					<input type="radio" name="rdo" id="opt1" />
					<span class="checkmark3"></span>
					<input name="dapan1"></input>
				</div>
				<div class="">
					<input type="radio" name="rdo" id="opt2" />
					<span class="checkmark3"></span>
					<input name="dapan2"></input>
				</div>
				<div class="">
					<input type="radio" name="rdo" id="opt3" />
					<span class="checkmark3"></span>
					<input name="dapan3"></input>
				</div>
				<div class="">
					<input type="radio" name="rdo" id="opt4" />
					<span class="checkmark3"></span>
					<input name="dapan4"></input>
				</div>
			</div>
		</div>
	</div>


		<div data-validate = "Message is required" class="pad-30">
			<select>
			  	<option value="volvo">Nhận biết</option>
			  	<option value="saab">Thông hiểu</option>
			  	<option value="opel">Vận dụng</option>
			  	<option value="audi">Vận dụng cao</option>
			</select>
		</div>
		<div class="pad-30">
			<button class="contact100-form-btn btn-style-general">
			<span>
				Câu tiếp theo
				<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
			</span>
		</button>
		<a style="button" href="baihoc.php" class="contact100-form-btn btn-style-remove">
			<span>
				Hoàn tất
				<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
			</span>
		</a>
		</div>


</div>



<?php include("general.php"); ?>
<?php include("headerMore.php"); ?>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css">
<div id="second-section2" class="quiz-container pad-60">
    <div class="container pad-60">
        <div class="row" >
            <div class="col-md-10">
				<div class="row">
					<form id="form" method="post" action="check.php">
						<div class="col-sm-6 text-right" align="right">
						</div>
						<?php
							$limit=2;
							$arranswer;
							if(isset($_GET['s']) && filter_var($_GET['s'],FILTER_VALIDATE_INT,array('min_range'=>1)))
							{
								$start=$_GET['s'];
							}
							else
							{
								$start=0;
							}
							if(isset($_GET['p']) && filter_var($_GET['p'],FILTER_VALIDATE_INT,array('min_range'=>1)))
							{
								$per_page=$_GET['p'];
							}
							else
							{
								$record=5;
								if($record > $limit)
								{
									$per_page=ceil($record / $limit);
								}
								else
								{
									$per_page=1;
								}
							}
							
							for($i=0;$i<2;$i++)
							{
								$cauhoi=$i+$start;
							?>
								<div class="w3-example">
									<div>
										<span class="question-id cauhoi"><?php echo $cauhoi; ?></span>
										<span class="cauhoi"><?php echo "Cau hoi"; ?></span>
									</div>
									<div class="w3-code">
										<?php
										

										for($j=0;$j<4;$j++)
										{
											?>
												<div class="_3Rn0u">
													<p margin-right: 5px;><input name="<?php echo $j; ?>" type="radio" value="<?php echo $j; ?>" />
							  							<?php echo $j; ?>
													</p>
												</div>
											<?php
										}
										?>
									</div>
									</div>
									<?php
								}
							
								?>
					</form>
					<div class="col-sm-6 text-right" align="right">
						<?php
						echo "<ul class='pagination' >";
						if($per_page > 1)
						{
							$current_page=($start / $limit) + 1;
							if($current_page !=1)
							{
								echo "<li><a href='quiz.php?s=".($start-$limit)."&p={$per_page}'>Back</a></li>";
							}
							for ($i=1; $i <= $per_page ; $i++) 
							{ 
								if($i!=$current_page)
								{
									echo "<li><a href='quiz.php?s=".($limit*($i-1))."&p={$per_page}'>{$i}</a></li>";
								}
								else
								{
									echo "<li class='active'><a>{$i}</a></li>";
								}
							}
							if($current_page !=$per_page)
							{
								echo "<li><a href='quiz.php?s=".($start+$limit)."&p={$per_page}'>Next</a></li>";
							}
						}
						echo "</ul>";
						$s= $_SERVER['REQUEST_URI'];
						?>
					</div>
					<form name="form" action="" method="POST">
						<input hidden id="answer" VALUE ="answer_get" NAME = "answer_get">
					</form>	
				</div>
			</div>
			<div class="col-md-2">
				<div class="col-12"><p id="time" class="text-center"></p></div><br>
				<div class="col-12 text-center" align="center">
					<button class='submit' id="nextPage" onclick="showKQ();" >Nạp Bài</button>
				</div>	
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	function getAnswers(){
		var questions = document.getElementsByClassName("question-id")
		var answers = {}
		for (var i = 0; i < questions.length; i++) {
			var questID = questions[i].innerHTML
			var ansDOM = document.querySelector('input[name="'+questID+'"]:checked')
			if (ansDOM) {
				answers[questID]=ansDOM.value
			}
		}

		return answers
	}

	function updateHref(){
		var links = document.querySelectorAll(".pagination a")
		for (var i = 0; i < links.length; i++) {
			var href = links[i].getAttribute("href")
			if (href) {
				var paths = href.split("?")
				if (paths.length<2) continue

				var newAnswers = {}

				var params = new URLSearchParams(paths[1])

				// add answers in other page
				var searchParams = new URLSearchParams(window.location.search)
				oldAnswers = searchParams.get("answers");
				if (oldAnswers) {
					oldAnswers = decodeURIComponent(oldAnswers);
					oldAnswers = JSON.parse(atob(oldAnswers))
				} else {
					oldAnswers = {}
				}
				newAnswers = Object.assign(newAnswers, oldAnswers)

				// add
				newAnswers = Object.assign(newAnswers, getAnswers())

				document.getElementById('answer').value=btoa(JSON.stringify(newAnswers));

			    params.set("answers", decodeURIComponent(btoa(JSON.stringify(newAnswers))));
				links[i].setAttribute("href", paths[0] + "?" + params.toString())
			}
		}
	}
	
	window.addEventListener("load", function(e){
		// get answers from other page
		var searchParams = new URLSearchParams(window.location.search)
		answers = searchParams.get("answers");
		if (answers) {
			answers = decodeURIComponent(answers);
			answers = JSON.parse(atob(answers))
		} else {
			answers = {}
		}

		// update link in pagination
		updateHref()

		// add event
		var inputs = document.querySelectorAll('#form input')
		for (var i = 0; i < inputs.length; i++) {
			inputs[i].addEventListener("change", function(e){
				updateHref()
			})
			var questID = inputs[i].getAttribute("name")
			if (answers[questID] == inputs[i].value) {
				inputs[i].checked = true
			}
		}
	})
</script>
<script type="text/javascript">
	// $(document).ready(function(){
	// 			let btnnext =document.getElementById('nextPage');
	// 			setTimeout(function(){ btnnext.click(); }, 2000);
			
	// 		});
	function showKQ(){
		var a = document.getElementById('answer').value;
		var md = <?php Print($md); ?>;
		var b="ketqua.php?md=".concat(md,"&a=",a);//..concat(a);
		window.location=b;
		}
</script>
<script type="text/javascript">
	var startTime;
		var currentTime = Math.floor(new Date().getTime()/1000,3);
		
		var time_="";
	var timeless;
	var onTime = setInterval(function(){


		if(!document.cookie)
		{
			startTime = Math.floor(new Date().getTime()/1000,3);
			var t = startTime;
			String(t);
		}
		else{
			var ti_me = decodeURIComponent(document.cookie);
			//document.write(ti_me);
			var t=ti_me.split(';');
			time_ = t[0].replace("_time=", "");
			String(time_)

			//if(time_ == ""||time_ == " NaN" || time_ == "NaN" || time_ == " NaN "|| time_ ==" ")
			if(isNaN(time_))
			{
				startTime = Math.floor(new Date().getTime()/1000,3);
			}
			else {
				startTime = parseInt(time_);
			}
		}

		console.log("startTime: ", startTime);
		//if(time_ == ""||time_ == " NaN" || time_ == "NaN" || time_ == " NaN "|| time_ ==" ")
		if(isNaN(time_))
		{
			var endTime = startTime + 5 * 60; //Tính giờ 5 phút = 5 * 60 giây
		}

		else
		{
			var endTime = startTime;
		}


		currentTime = Math.floor(new Date().getTime()/1000,3);
		timeless=endTime-currentTime;
		var min=parseInt(timeless/60);
		var second=timeless%60;
		document.getElementById("time").innerHTML = min+" : "+second;
		console.log("currentTime: ", currentTime);
	console.log("endTime: ", endTime);
		if(currentTime == endTime){
			document.cookie = "_time=";
			clearInterval(onTime);
			let btnnext =document.getElementById('nextPage');
				setTimeout(function(){ btnnext.click(); }, 2000);
		}
		var a = endTime;
	String(a);
	var c = currentTime;
	var s = endTime;
	var test = parseInt(c)-parseInt(s);
	if(test>0)
		document.cookie = "_time=";
	else		
		document.cookie = "_time="+a;
	},1000);
	



	// 			var startTime;
	// var currentTime = Math.floor(new Date().getTime()/1000,3);
	
	// var time_="";
	// if(!document.cookie)
	// {
	// 	startTime = Math.floor(new Date().getTime()/1000,3);
	// 	var t = startTime;
	// 	String(t);
	// }
	// else{
	// 	var ti_me = decodeURIComponent(document.cookie);
	// 	document.write(ti_me);
	// 	var t=ti_me.split(';');
	// 	time_ = t[0].replace("_time=", "");
	// 	String(time_)

	// 	//if(time_ == ""||time_ == " NaN" || time_ == "NaN" || time_ == " NaN "|| time_ ==" ")
	// 	if(isNaN(time_))
	// 	{
	// 		startTime = Math.floor(new Date().getTime()/1000,3);
	// 	}
	// 	else {
	// 		startTime = parseInt(time_);
	// 	}
	// }

	// console.log("startTime: ", startTime);
	// //if(time_ == ""||time_ == " NaN" || time_ == "NaN" || time_ == " NaN "|| time_ ==" ")
	// if(isNaN(time_))
	// {
	// 	var endTime = startTime + 1 * 60; //Tính giờ 5 phút = 5 * 60 giây
	// }

	// else
	// {
	// 	var endTime = startTime;
	// }
	// var timeless;
	// var onTime = setInterval(function(){
	// 	currentTime = Math.floor(new Date().getTime()/1000,3);
	// 	timeless=endTime-currentTime;
	// 	var min=parseInt(timeless/60);
	// 	var second=timeless%60;
	// 	document.getElementById("time").innerHTML = min+" : "+second;
	// 	console.log("currentTime: ", currentTime);
	// console.log("endTime: ", endTime);
	// 	if(currentTime == endTime){
	// 		document.cookie = "_time=";
	// 		clearInterval(onTime);
	// 		let btnnext =document.getElementById('nextPage');
	// 			setTimeout(function(){ btnnext.click(); }, 2000);
	// 	}
	// 	var a = endTime;
	// String(a);
	// var c = currentTime;
	// var s = endTime;
	// var test = parseInt(c)-parseInt(s);
	// if(test>0)
	// 	document.cookie = "_time=";
	// else		
	// 	document.cookie = "_time="+a;
	// },1000);

	// var startTime = Math.floor(new Date().getTime()/1000,3);
	// console.log("startTime: ", startTime);
	// var endTime = startTime + 180 * 60; //Tính giờ 5 phút = 5 * 60 giây
	// var onTime = setInterval(function(){
	// 	var currentTime = Math.floor(new Date().getTime()/1000,3);
	// 	var timeless=endTime-currentTime;
	// 	var min=parseInt(timeless/60);
	// 	var second=timeless%60;
	// 	document.getElementById("time").innerHTML = min+" : "+second;
	// 	console.log("currentTime: ", currentTime);
	// console.log("endTime: ", endTime);
	// 	if(currentTime == endTime){
	// 		clearInterval(onTime);
	// 		let btnnext =document.getElementById('nextPage');
	// 			setTimeout(function(){ btnnext.click(); }, 2000);
	// 	}
	// },1000);
</script>



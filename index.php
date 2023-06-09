<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="home_style.css?v=<?php echo time(); ?>"> <!-- Link Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Link Boostrap --> 
	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<title>Mimir</title>
	<link rel="icon" type="image/x-icon" href="logo/favicon.ico">

</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  	<div class="container-fluid">

    	<!-- Logo -->
		<a class="navbar-brand" href="index.php">
  			<img src="logo/Medium-black-logo.png">
  		</a>

  		<!-- navigation button -->
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>


    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
      		<ul class="navbar-nav me-auto mb-2 mb-lg-0">

      			<!-- home page -->
        		<li class="nav-item">
          			<a class="nav-link active" aria-current="page" href="index.php">Home</a>
        		</li>

        		<!-- our lesson -->
        		<li class="nav-item">
          			<a class="nav-link" href="lesson/lesson.php">Lesson</a>
        		</li>

        		<!-- last year information and static -->
       			<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Information</a>
          			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            			<li><a class="dropdown-item" href="static/static.php">Statistics</a></li>
            			<li><a class="dropdown-item" href="team/our_team.php">Our team</a></li>
            			<li><a class="dropdown-item disabled" href="#">Examination Room</a> <!-- will anable soon --> 
          			</ul>
        		</li>

        		<!-- sign up / sign in (will anable soon)-->
        		<li class="nav-item">
          			<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sign in</a>
        		</li>
      		</ul>
    	</div>
  	</div>
</nav>

<!-- Introduce -->
<div class="blankspace">
	<div class="container">
		<div class="introduce">
			<div class="row">
				<div class="col-lg">
					<img src="image/introduce.jpeg" class="img-fluid" alt="Responsive image">
				</div>
				<div class="col-lg">
					<h1>Mimir Project</h1>
					<div class="color_line"></div>
					<h2>A project to increase knowledge and develop academic abilities</h2>
					<h2>โครงการเพื่อเพิ่มความรู้และพัฒนาความสามารถด้านวิชาการ</h2>
					<a href="#" class="btn btn-primary btn-lg  btn-outline-dark" role="button" aria-pressed="true">Application 
						<i class="bi bi-arrow-right-circle-fill"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- about us -->
<div class="about_us">
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h1>About Us</h1>
				<br>
				<p>ในปัจจุบันนักเรียนมีแนวโน้มที่ต้องการพัฒนาความรู้ และความสามารถในด้านวิชาการ เพื่อใช้ในการสอบแข่งขัน, ปรับใช้กับการเรียนในห้องเรียน ฯลฯ โครงการจึงจัดมาเพื่อตอบโจทย์นักเรียนโดยจะนำผู้ที่ได้ผ่านการอบรมในโครงการ สอวน. ที่มีความสมัครใจมาเป็นวิทยากรในการสอน เพื่อให้มีคุณภาพมากที่สุด</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg">
				<div class="box">
					<h2>Academic</h2>
					<h3>ผู้เข้าร่วมโครงการจะได้รับความรู้ทางด้านวิชาการตามความต้องการของตน</h3>
					<div class="color_line_1"></div>
				</div>
			</div>
			<div class="col-lg">
				<div class="box">
					<h2>Ability</h2>
					<h3>พัฒนาความสามารถในการทำโจทย์ และการเรียนรู้ให้สามารถนำไปประยุกต์ใช้ได้</h3>
					<div class="color_line_2"></div>
				</div>
			</div>
			<div class="col-lg">
				<div class="box">
					<h2>Opportunity</h2>
					<h3>เพิ่มโอกาสในการเรียนรู้ และโอกาสในการเข้าร่วมการแข่งขัน หรืออบรมอื่นๆ</h3>
					<div class="color_line_3"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- target -->
<div class="target">
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h1>Target</h1>
				<h2>เป้าหมายของเรา</h2>
			</div>
		</div>
		<div class="color_line"></div>
		<div class="row">
			<div class="col-lg box">
				<div class="pic"><i class="bi bi-book-half"></i></div>
				<h3>Academic</h3>
				<div class="color_line_box"></div>
				<p>เพื่อพัฒนาความรู้ และความสามารถด้านวิชาการ</p>
			</div>
			<div class="col-lg box">
				<div class="pic"><i class="bi bi-cursor-fill"></i></div>
				<h3>Ability</h3>
				<div class="color_line_box"></div>
				<p>นำความรู้ไปปรับใช้ในอนาคตได้อย่างเหมาะสม</p>
			</div>
			<div class="col-lg box">
				<div class="pic"><i class="bi bi-bookmark-star-fill"></i></div>
				<h3>Opportunity</h3>
				<div class="color_line_box"></div>
				<p>ผู้ที่ประสงค์ที่จะสอบแข่งขันมีโอกาสในการผ่านรอบคัดเลือกมากขึ้น</p>
			</div>
			<div class="col-lg box">
				<div class="pic"><i class="bi bi-bar-chart-line-fill"></i></div>
				<h3>Improve</h3>
				<div class="color_line_box"></div>
				<p>นำมาปรับปรุง และพัฒนาต่อยอดโครงการในปีถัดไป</p>
			</div>
		</div>
	</div>
</div>

<!-- some statics -->
<div class="static">
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h1>Statistics This Year</h1>
				<div class="color_line"></div>
				<h2>สถิตินักเรียนที่ได้เข้ารับการอบรมณ์ สอวน. ในโครงการที่มีเพิ่มมากขึ้น</h2>
			</div>
			<div class="col-lg">
				<h1 class="percentage">48%</h1>
			</div>
		</div>
	</div>
</div>

<!-- subject -->
<div class="subject">
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h1>Subject</h1>
				<h2>รายวิชาที่เปิดอบรม</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<a href="#">
					<div class="card card-1">
				        <h3>MATH</h3>
				        <p>ศึกษาเกี่ยวกับจํานวนและการดําเนินการ พีชคณิต เรขาคณิต สถิติและความน่าจะเป็น และทักษะ และกระบวนการทางคณิตศาสตร์</p>
				    </div>
				</a>
			</div>
			<div class="col-sm">
				<a href="#">
					<div class="card card-2">
				        <h3>PHYSIC</h3>
				        <p>ศึกษาเกี่ยวกับคณิตศาสตร์เพื่อนํามาประยุกต์ใช้ในวิชาฟิสิกส์ จลศาสตร์ การเคลื่อนที่ใน 1 และ 2 มิติ งาน โมเมนตัม ฯลฯ</p>
				    </div>
				</a>
			</div>
			<div class="col-sm">
				<a href="#">
					<div class="card card-3">
				        <h3>CHEMICAL</h3>
				        <p>การเสนอแบบจําลองอะตอมของนักวิทยาศาสตร์ อธิบายวิวัฒนาการของแบบจําลองอะตอมเขียนสัญลักษณ์ ฯลฯ</p>
				    </div>
				</a>
			</div>
			<div class="col-sm">
				<a href="#">
					<div class="card card-4">
				        <h3>BIOLOGY</h3>
				        <p>สารเคมีในสิ่งมีชีวิต กล้องจุลทรรศน์กับการศึกษาโครงสร้างของเซลล์ เซลล์ พันธุกรรม กายวิภาคและ สรีรวิทยา ฯลฯ</p>
				    </div>
				</a>
			</div>
			<div class="col-sm">
				<a href="#">
					<div class="card card-5">
				        <h3>COMPUTER</h3>
				        <p>ศึกษาในเรื่องระบบจำนวน ความสัมพันธ์ อสมการ เซต ตรรกศาสตร์ เรขาคณิต ความน่าจะเป็น และกระบวนการคิด</p>
				    </div>
				</a>
			</div>
			<div class="col-sm">
				<a href="https://www.facebook.com/profile.php?id=100082453218251" target="_blank">
					<div class="card card-6">
				        <h3>ANOTHER</h3>
				        <p>ณ ขนะนี้ยังมีบางรายวิชาที่เปิดอบรม เช่น ดาราศาสตร์ และ ภูมิศาสตร์ ซึ่งสามารถติดต่อได้ผ่าน facebook ของเรา</p>
				    </div>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- bottom -->
<div class="bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="logo/Medium-black-logo.png">
				<p>A project to increase knowledge and develop academic abilities
				<br>
				โครงการเพื่อเพิ่มความรู้และพัฒนาความสามารถด้านวิชาการ</p>
			</div>
			<div class="col-md-3">
				<h1>Contact us</h1>
				<a href="https://www.facebook.com/profile.php?id=100082453218251">facebook</a>
				<br>
				<a href="#">instagram</a>
				<br>
				<a href="#">twitter</a>
			</div>
			<div class="col-md-3">
				<h1>Mimir Project</h1>
				<a href="index.html">Home</a>
				<br>
				<a href="#">Applcation</a>
				<br>
				<a href="team/our_team.html">Our team</a>
				<br>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>

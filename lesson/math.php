<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="lesson.css?v=<?php echo time(); ?>"> <!-- Link Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Link Boostrap --> 
	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<title>Math</title>
	<link rel="icon" type="image/x-icon" href="../logo/favicon.ico">

</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  	<div class="container-fluid">

    	<!-- Logo -->
		<a class="navbar-brand" href="../index.php">
  			<img src="../logo/Medium-black-logo.png">
  		</a>

  		<!-- navigation button -->
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>


    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
      		<ul class="navbar-nav me-auto mb-2 mb-lg-0">

      			<!-- home page -->
        		<li class="nav-item">
          			<a class="nav-link" aria-current="page" href="../index.php">Home</a>
        		</li>

        		<!-- our lesson -->
        		<li class="nav-item">
          			<a class="nav-link active" href="../lesson/lesson.php">Lesson</a>
        		</li>

        		<!-- last year information and static -->
       			<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Information</a>
          			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            			<li><a class="dropdown-item" href="../static/static.php">Statistics</a></li>
            			<li><a class="dropdown-item" href="../team/our_team.php">Our team</a></li>
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

<!-- introduce -->
<div class="introduce">
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h1>Math</h1>
				<h2>เนื้อหาคณิตศาสตร์</h2>
			</div>
		</div>
		<div class="color_line_math"></div>
		<div class="row">
			<div class="col-lg">
				<p>ศึกษาเกี่ยวกับจํานวนและการดําเนินการ พีชคณิต เรขาคณิต สถิติและความน่าจะเป็น และทักษะ และกระบวนการทางคณิตศาสตร์</p>
			</div>
		</div>
	</div>
</div>

<!-- course -->
<div class="table">
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h1>Objective</h1>
				<h2>วัตถุประสงค์การเรียนรู้</h2>
				<hr>
				<p class="thai">
					1. อธิบายถึงรายละเอียด และความสําคัญของค่ายสอวน. วิชาคณิตศาสตร์ได้
					<br>2. มีความเข้าใจและอธิบายเนื้อหาเรอื่งจํานวนและการดําเนินการได้
					<br>3. มีความเข้าใจและอธิบายเนื้อหาเรอื่งพีชคณิตได้
					<br>4. มีความเข้าใจและอธิบายเนื้อหาเรอื่งการวัดได
					<br>5. มีความเข้าใจและอธิบายเนื้อหาเรอื่งเรขาคณิตได้
					<br>6. มีความเข้าใจและอธิบายเนื้อหาเรอื่งสถิติและความน่าจะเป็นได้
					<br>7. มีความเข้าใจและอธิบายเนื้อหาเรอื่งทกัษะและกระบวนการทางคณิตศาสตร์ได้
					<br>8. สามารถประยุกต์ใช้ในห้องเรียนได้
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg">
				<h1>Course</h1>
				<h2>แผนการสอน</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table table-striped table-bordered  thai">
  					<thead>
    					<tr>
      						<th scope="col">ระยะเวลา</th>
      						<th scope="col">หัวข้อ</th>
      						<th scope="col">เนื้อหาการเรียนรู้</th>
    					</tr>
  					</thead>
  					<tbody>
    					<tr>
					      	<td>2 ชม.</td>
					      	<td>แนะนํารายวิชา</td>
					      	<td>- แนะนําหัวข้อ <br>- แนวทางการเตรียมสอบ</td>
    					</tr>
    					<tr>
						    <td>4 ชม.</td>
						    <td>จํานวนและการ ดําเนินการ</td>
						    <td>- จํานวนตรรกยะ <br>- เลขยกกําลัง <br>- จํานวนจริง <br>- พหุนามอัตราส่วน</td>
    					</tr>
    					<tr>
						    <td>4 ชม.</td>
						    <td>พีชคณิต</td>
						    <td>- เซต <br>- สมการเชิงเส้นตัวแปรเดียว <br>- สมการเชิงเส้นสองตัวแปร <br>- สมการกําลังสองตัวแปรเดียว <br>- อสมการเชิงเส้นตัวแปรเดียว	<br>- ระบบสมการ <br>- การแยกตัวประกอบของพหุนาม <br>- ฟังก์ชันกําลังสอง</td>
    					</tr>
    					<tr>
						    <td>4 ชม.</td>
						    <td>การวัด</td>
						    <td>- เส้นขนาน <br>- การแปลงทางเรขาคณิต <br>- ความเท่ากันทุกประการ <br>- ทฤษฎีบทพีทาโกรัส <br>- ความคล้าย <br>- อัตราส่วนตรีโกณมิติ <br>- วงกลม</td>
    					</tr>
    					<tr>
						    <td>4 ชม.</td>
						    <td>เรขาคณิต</td>
						    <td>- จํานวนตรรกยะ <br>- เลขยกกําลัง <br>- จํานวนจริง <br>- พหุนามอัตราส่วน</td>
    					</tr>
    					<tr>
						    <td>4 ชม.</td>
						    <td>สถิติและความน่าจะเป็น</td>
						    <td>- การนําเสนอและวิเคราะห์ข้อมูลความน่าจะเป็น</td>
    					</tr>
    					<tr>
						    <td>4 ชม.</td>
						    <td>ทักษะและกระบวนการทางคณิตศาสตร์</td>
						    <td>- การให้เหตุผลการแก้ปัญหาตรรกศาสตร์</td>
    					</tr>
    					<tr>
						    <td>4 ชม.</td>
						    <td>เฉลยข้อสอบ</td>
						    <td>- เฉลยและแนะแนวทางข้อสอบในทุกหัวข้อการเรียนรู้</td>
    					</tr>
  					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- bottom -->
<div class="bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="../logo/Medium-black-logo.png">
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
				<a href="../index.html">Home</a>
				<br>
				<a href="#">Applcation</a>
				<br>
				<a href="../team/our_team.html">Our team</a>
				<br>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
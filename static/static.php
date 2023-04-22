<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="static.css?v=<?php echo time(); ?>"> <!-- Link Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Link Boostrap --> 
	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<title>Mimir</title>
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
          			<a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        		</li>

        		<!-- our lesson -->
        		<li class="nav-item">
          			<a class="nav-link" href="../lesson/lesson.php">Lesson</a>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
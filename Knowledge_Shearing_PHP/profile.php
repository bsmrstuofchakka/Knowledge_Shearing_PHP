<!DOCTYPE html>
<html>
	<head>
		<title>Knowledge Shearing</title>
		<meta charset="UTF-8"/>
		<meta name="language" content="English">
		<meta name="description" content="It is a website about education">
		<meta name="keywords" content="blog,cms blog">
		<link rel="stylesheet" href="style.css">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({
					effect:'random',
					slices:10,
					animSpeed:500,
					pauseTime:5000,
					startSlide:0, //Set starting Slide (0 index)
					directionNav:false,
					directionNavHide:false, //Only show on hover
					controlNav:false, //1,2,3...
					controlNavThumbs:false, //Use thumbnails for Control Nav
					pauseOnHover:true, //Stop animation while hovering
					manualAdvance:false, //Force manual transitions
					captionOpacity:0.8, //Universal caption opacity
					beforeChange: function(){},
					afterChange: function(){},
					slideshowEnd: function(){} //Triggers after all slides have been shown
				});
			});
		</script>
	</head>

<body>
	<div class="headersection templete clear">
		<a href="#">
			<div class="logo">
				<img src="images/logo.jpg" alt="Logo"/>
				<h2>Knowledge Shearing</h2>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
				<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
			<div class="searchbtn clear">
			<form action="" method="post">
				<input type="text" name="keyword" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="#">User Login</a>
			<ul>
				<li><a href="login.php" >Login</a></li>
				<li><a href="register.php" >Register</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="#">Logout</a></li>
			</ul>

		</li>

		<li><a href="question.php">Question?? Click Here</a></li>
	</ul>
</div>



			<div class="contentsection contemplete clear">
				<div class="maincontent clear">
					<div class="about">
						<h2>User Profile</h2>
							<form action="" method="post">
								<div class="form-group">

									<div>
										<label for="id">ID</label>
									</div>
									<div>
										<input type="text" id="id" name="id" class="form-control" />
									</div>


									<div>
										<label for="dept_name">Department Name</label>
									</div>
									<div>
										<input type="text" id="dept_name" name="dept_name" class="form-control" />
									</div>


									<div>
										<label for="name">Your Name</label>
									</div>
									<div>
										<input type="text" id="name" name="name" class="form-control" />
									</div>



									<div>
										<label for="phone_number">Phone Number</label>
									</div>
									<div>
										<input type="text" id="phone_number" name="phone_number" class="form-control" />
									</div>


									<div>
										<label for="email">Email Address</label>
									</div>
									<div>
										<input type="text" id="email" name="email" class="form-control" required="enter your email"/>
									</div>

									<div>
										<label for="district">District</label>
									</div>
									<div>
										<input type="text" id="district" name="district" class="form-control" />
									</div>

									

								</div>
							
								<tr>
		                            <td>
		                                <input type="submit" name="submit" Value="Update" />
		                            </td>
		                        </tr>
							<form>	
					</div>	
				</div>		
	</div>

	<div class="footersection templete clear">
			  <div class="footermenu clear">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
				
				</ul>
			  </div>
			  <p>&copy; Copyright Konwledge Is Power.</p>
	</div>
</body>
</html>
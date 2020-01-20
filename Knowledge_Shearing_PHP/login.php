<?php include ('inc/header.php');?>


<!--

?php
    $login = session::get("login");
    if($login==true){
        header("Location:question.php");
    }


?>
-->

	<?php

    $message="";

	if($_SERVER['REQUEST_METHOD'] =='POST'){



		$em = mysqli_real_escape_string($db->link, $_POST['email']);
		$pass = md5(mysqli_real_escape_string($db->link, $_POST['password']));

		$query = "select * from user_register where email='$em' AND password='$pass'";



		$result = $db->select($query);

			if($result !=false){
				$value = mysqli_fetch_array($result);
				$row = mysqli_num_rows($result);

				if($row >0){

				    $_SESSION["email"] = $row['email'];
				    $_SESSION["password"] =$row["password"];
				   // header("Location:question.php");
				//	session::set("login",false);

				//	session::set("email",$value['email']);
				//	session::set("password",$value['password']);
				//	header("Location:question.php");



				}else{
					echo "<span class='error'>No Result Found!!!!</span>";
				}

			}else{
				echo "<span class='error'>Username or Password does not match!</span>";
			}


	}


?>

			<div class="contentsection contemplete clear">
				<div class="maincontent clear">
					<div class="about_login">
						<h2 class="h2">User Login</h2>
							<form action="login.php" method="post" id="frmLogin">
                                <div class="error-message"> <?php if(isset($message)) {echo $message;}?></div>
								<div class="form-group ">

									<div>
										<label for="email">Email Address</label>
									</div>
									<div>
										<input type="text" id="email" name="email" class="form-control" required="enter your email"/>
									</div>

									<div>
										<label for="password">Password</label>
									</div>
									<div>
										<input type="password" id="password" name="password" class="form-control"  required="enter password"/>
									</div>

									</div>
							
								<tr>
		                            <td>
		                                <input type="submit" name="login" Value="Login" />
		                            </td>
		                        </tr>
							<form>
							<div class="sign"><a id="active" href="register.php">Haven't an Account? Please Sign Up</a></div>	
					</div>



				</div>		


	<!---		<div class="sidebar clear">
						<div class="samesidebar clear">
							<h2>Categories</h2>
								<ul>
									<li><a href="#">Java Technology</a></li>
									<li><a href="#">Computer Graphics</a></li>
									<li><a href="#">Database Management System</a></li>
									<li><a href="#">Compiler Design</a></li>
									<li><a href="#">Software Engineering</a></li>						
									<li><a href="#">Computer Network</a></li>						
									<li><a href="#">Microprocessor and Assembly Language</a></li>						
									<li><a href="#">System Analysis and Design</a></li>						
									<li><a href="#">Structured Programming Language</a></li>						
									<li><a href="#">Object Oriented Programming</a></li>						
									<li><a href="#">Digital Logic Design</a></li>						
									<li><a href="#">Data Structure</a></li>						
									<li><a href="#">Design and Analysis of Algorithm</a></li>						
									<li><a href="#">Automata Theory</a></li>						
									<li><a href="#">Operating System</a></li>						
									<li><a href="#">Computer Architecture</a></li>
									<li><a href="#">Numerical Analysis and Concrete Analysis</a></li>
									<li><a href="#">Discrete Mathematics</a></li>
									<li><a href="#">Computer Fundamental</a></li>
									<li><a href="#">Digital Signal Processing</a></li>
									<li><a href="#">Communication Engineering</a></li>
									<li><a href="#">Artificial Intelligence</a></li>
									<li><a href="#">Digital Image Processing</a></li>
									<li><a href="#">Parallel Processing and Distributed System</a></li>
								</ul>
						</div>
			</div>
-->



	</div>

<?php include ('inc/footer.php');?>
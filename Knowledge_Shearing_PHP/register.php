<?php include ('inc/header.php');?>

	<?php

	if($_SERVER['REQUEST_METHOD'] =='POST'){


		$id1 = mysqli_real_escape_string($db->link, $_POST['id']);
		$dept = mysqli_real_escape_string($db->link, $_POST['d_name']);
		$nam = mysqli_real_escape_string($db->link, $_POST['name']);
		$phone = mysqli_real_escape_string($db->link, $_POST['phone_number']);
		$em = mysqli_real_escape_string($db->link, $_POST['email']);
		$dis = mysqli_real_escape_string($db->link, $_POST['district']);
		$pass = md5(mysqli_real_escape_string($db->link, $_POST['password']));
		

		if($id1=="" || $dept=="" || $nam=="" || $phone=="" || $em=="" || $dis=="" || $pass==""){
			echo "<span class='error'>Field must not be empty</span>";
		}
		else{
			$query = "INSERT INTO user_register(`id`, `dept_name`, `name`, `phone_number`, `email`, `district`, `password`) VALUES ('$id1','$dept','$nam ','$phone','$em','$dis','$pass')";



			$inserted_rows = $db->insert($query);

			if($inserted_rows){
				echo "<span class='success'>Data Inserted sucessfully.</span>";
			}else{
				echo "<span class='error'>Not Inserted!</span>";
			}
		}

	}


?>


			<div class="contentsection contemplete clear">
				<div class="maincontent clear">
					<div class="about_login">
						<h2 class="h2">User Registration</h2>
							<form action="register.php" method="post">
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
										<input type="text" id="dept_name" name="d_name" class="form-control" />
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

									<div>
										<label for="password">Password</label>
									</div>
									<div>
										<input type="password" id="password" name="password" class="form-control"  required="enter password"/>
									</div>

									</div>
							
								<tr>
		                            <td>
		                                <input type="submit" name="submit" Value="Register" />
		                            </td>
		                        </tr>
							<form>
						  <div class="sign"><a id="active" href="login.php">Have an Account? Please Log In</a></div>

					</div>	
				</div>		

	</div>

<?php include ('inc/footer.php');?>
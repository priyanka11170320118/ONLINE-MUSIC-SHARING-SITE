<?php 
	// session_start(); 

	// if (!isset($_SESSION['username'])) {
	// 	$_SESSION['msg'] = "You must log in first";
	// 	header('location: login.php');
	// }

	// if (isset($_GET['logout'])) {
	// 	session_destroy();
	// 	unset($_SESSION['username']);
	// 	header("location: login.php");
	// }

?>


<!-- //Index  -->

<?php 
include 'db.php';////Connect the Dbase $con

	//------------------------------- REGISTER ---------------------------
	if (isset($_POST['register'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$user_fullname = mysqli_real_escape_string($con, $_POST['user_fullname']);
		$user_email = mysqli_real_escape_string($con, $_POST['user_email']);
		$user_age = mysqli_real_escape_string($con, $_POST['user_age']);
		$user_gender = mysqli_real_escape_string($con, $_POST['user_gender']);
		$password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

		//
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}


				//code for image uploading
			if($_FILES['user_img']['name'])
			{
			move_uploaded_file($_FILES['user_img']['tmp_name'], "../files/".$_FILES['user_img']['name']);
			$item_img="./files/".$_FILES['user_img']['name'];
			}

		
			$password = md5($password_1);//encrypt the password before saving in the database
			//<!-- INSERT INTO `users`(`user_id`, `username`, `password`, `user_fullname`, `user_email`, `user_age`, `user_gender`, `user_img`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->
			$query = "INSERT INTO users (username, password, user_fullname,user_email,user_age,user_gender,user_img) 
					  VALUES('$username', '$password', '$user_fullname', '$user_email', '$user_age', '$user_gender', '$user_img)";
			mysqli_query($con, $query);

			if(mysqli_query($con, $query))
				{
				echo "<script type='text/javascript'>alert('Inserted successfully..!')</script>";
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				// header('location: home.php');
				}
				else {
					echo "<script type='text/javascript'>alert('NOT inserted! ! ! Error!!')</script>";
				}

			
		

	}
	//------------------------------- REGISTER ---------------------------






 ?>





<!--  Header Starts  -->
<?php include 'header.php'; ?>
<!--  Header Ends  -->


<!-- 
================================================DIsplay block=============================================================
-->
<div class="row">
	<div class="col-md-12 container-fluid">
			<div class="p-2 " 
		      style="
		      background: #ff5db1;/*Old browsers*/
		      background: -moz-linear-gradient(top, #ff5db1 0%, #ef017c 100%);/*FF3.6-15*/
		      background: -webkit-linear-gradient(top, #ff5db1 0%,#ef017c 100%);/*Chrome10-25,Safari5.1-6*/
		      background: linear-gradient(to bottom, #ff5db1 0%,#ef017c 100%);/*W3C,IE10+,FF16+,Chrome26+,Opera12+,Safari7+*/
		      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5db1',endColorstr='#ef017c',GradientType=0);/* IE6-9*/
		      ">
		      
			  <h1 class="text-center text-light"> Welcome to </h1>
			  <h1 class="display-2 text-white text-center"> MusiC SharE </h1>
			  <p class="lead text-white text-center">Lets listen and share all the best music that you like with all.</p>
			  <hr class="my-4 bg-light">
			 
					<div class="row">
						<!-- ==================================================================== -->


						<div class="col-md-5 offset-md-1">
							<!-- ----------------------------------------- -->
							
							<div class="row m-1 p-1">
							<form class="form" method = "POST" enctype = "multipart/form-data">
								
								<div class="form-group p-2">
									<h5 class="text-white text-center">Register here</h5>

								</div>	
									<!-- INSERT INTO `users`(`user_id`, `username`, `password`, `user_fullname`, `user_email`, `user_age`, `user_gender`, `user_img`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->
										
								<div class="form form-row p-2">
									

									<input type="text" name="user_fullname" placeholder="Full Name"  class="form-control form-control form-control-lg mr-sm-2">
								</div>
								<div class="form form-row p-2">

						      		<input type="text" name="username" placeholder="Username"  class="form-control form-control form-control-lg mr-sm-2">
						      		
								</div>
								<div class="form-inline form-row p-2">
									
						      		<input type="text" name="user_age" placeholder="Age(Must Be >18)"  class="form-control form-control-lg  mr-sm-2">
						      		<select type="text" name="user_gender" placeholder="Gender" class="form-control form-control-lg mr-sm-2">
									  <option>Male</option>
									  <option>Female</option>
									  <option>Others</option>
									  <option>Fussion</option>
									  
									</select>
						      		
								</div>
								<div class="form-inline form-row p-2">
									<input type="text" name="user_email" placeholder="Email"  class="form-control form-control form-control-lg mr-sm-2">
								</div>
								<div class="form-inline form-row p-2">
									<input type="password" name="password_1" placeholder="Password"  class="form-control form-control form-control-lg mr-sm-2">
						      		<input type="password" name="password_2" placeholder="Confirm Password"  class="form-control form-control-lg mr-sm-2">
						      		
								</div>
						      	<div class="form-row p-2">
						      		<label>Upload Your Profile Image</label>
						      		<input type="file" name="song_des"  class="form-control form-control-lg ">
								</div>

								<div class="form-row m-1 p-2">
									<input type="submit" name="register" value="Register Now!" class="btn btn-lg btn-outline-light">
								</div>
						    </form>
						    </div>
						    


						<!-- -------------------------------------------- -->
						</div>



						<div class="col-md-4 offset-md-1">
							<!-- ----------------------------------------- -->
							<div class="row m-1 p-1">
							<form class="form" method = "POST" enctype = "multipart/form-data">
								
								<div class="form form-group p-2">
									<h5 class="text-white text-center">Login here</h5>

								</div>	
									<!-- INSERT INTO `users`(`user_id`, `username`, `password`, `user_fullname`, `user_email`, `user_age`, `user_gender`, `user_img`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->
										
								<div class="form form-group p-2">
						      		<input type="text" name="username" placeholder="Username"  class="form-control form-control-lg mr-sm-2">
						      		
								</div>
								
								<div class="form form-group p-2">
									<input type="text" name="password" placeholder="Password"  class="form-control form-control-lg mr-sm-2">
								</div>
						      	

								<div class="form-row m-1 p-2">
									<input type="submit" name="login" value="Login...!" class="btn btn-lg btn-outline-light">
								</div>
						    </form>


							<!-- ----------------------------------------- -->
						</div>


						<!-- ==================================================================== -->
					</div>
			  

			  <p class="lead">
			    <!-- <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a> -->
			  </p>
			</div>

	</div>	
<!-- 
================================================DIsplay block=============================================================
-->


</div>

	<!-- Empty row -->
<!-- 	<div class="row">
		<div class="col-md-12">
			<br>
			<br>
		</div>
	</div> -->
	<!-- Empty row -->












<!-- footer Starts  -->
<?php include 'footer.php'; ?>
<!--  footer Ends  -->
   

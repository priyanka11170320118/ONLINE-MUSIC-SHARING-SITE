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


						<div class="col-md-5 offset-md-3">
							<!-- ----------------------------------------- -->
							
							<div class="row m-1 p-1">
							<form class="text-center" method = "POST" enctype = "multipart/form-data">
								
								<div class="form-row p-2">
									<h5 class="text-white text-center">Register here</h5>

								</div>	
										
								<div class="form-inline form-row p-2">
									
									<!-- `users`(`user_id`, `username`, `password`, `user_fullname`, `user_email`, `user_age`) -->

									<input type="text" name="song_link" placeholder="Paste The Link Here.."  class="form-control mr-sm-2">
						      		<input type="text" name="song_name" placeholder="Name of Song"  class="form-control mr-sm-2">
						      		<input type="text" name="song_singer" placeholder="Singer"  class="form-control mr-sm-2">
						      		<input type="text" name="song_album" placeholder="Album"  class="form-control mr-sm-2">
								</div>

						      	<div class="form-row p-2">
						      		<input type="file" name="song_des" placeholder="Write About The song"  class="form-control ">
								</div>

								<div class="form-row m-1 p-2">
									<input type="submit" name="submit" class="btn btn-lg btn-outline-light">
								</div>
						    </form>
						    </div>
						    


						<!-- -------------------------------------------- -->
						</div>



						<div class="col-md-5 offset-md-3">
							<!-- ----------------------------------------- -->



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
	<div class="row">
		<div class="col-md-12">
			<br>
			<br>
		</div>
	</div>
	<!-- Empty row -->












<!-- footer Starts  -->
<?php include 'footer.php'; ?>
<!--  footer Ends  -->
   

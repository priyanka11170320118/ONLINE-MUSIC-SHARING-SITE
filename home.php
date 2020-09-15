<?php 
session_start();//Session Begin
//VAriable
$loggeduser="";
$loggeduserimg="";
//<!-- Log Out -->
                if (isset($_GET['action'])) {
                  if ($_GET['action']=='logout') {
                    // session_destroy();
                    unset($_SESSION['username']);
                    unset($_SESSION['user_img']);
                    header("location: index.php");
                  }
              }
                //<!-- Log Out -->
//Redirect to login
if (!isset($_SESSION['username'])) {
		header('location: index.php');
	}

$loggeduser=$_SESSION['username'];
$loggeduserimg=$_SESSION['user_img'];
 ?>



<!--  Header Starts  -->
<?php include 'header.php'; ?>
<!--  Header Ends  -->

<?php
error_reporting(0);
//Connect the Dbase
//$con= mysqli_connect("localhost","root","","musicshare");


include 'db.php';////Connect the Dbase $con
//

//https://github.com/priyanka11170320118/ONLINE-MUSIC-SHARING-SITE

//Delete Songs
if (isset($_GET['action'])) {
    if ($_GET['action']=='delete') {
        $song_id=$_GET['id'];
           
        	$i="DELETE FROM songs WHERE song_id ='$song_id' ";
	//INSERT INTO `songs`(`song_id`, `username`, `song_link`, `song_name`, `song_singer`, `song_album`, `song_langauge`, `song_type`, `song_des`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

	if(mysqli_query($con, $i))
	{
	echo "<script type='text/javascript'>alert('Deleted successfully..!')</script>";
	}
	else {
		echo "<script type='text/javascript'>alert('NOT Deleted! ! ! Error!!')</script>";
	}

    }
}

//Store to DB
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	 // $song_link=$_POST['song_link'];

	 $song_linkget=(end(explode('=',$_POST['song_link'])));
	 echo "  song_link  ". $song_link."\n||||";
	 echo "  song_linkget  ". $song_linkget."\n|||";
	 $song_link=$song_linkget;
	$song_name=$_POST['song_name'];
	$song_singer=$_POST['song_singer'];
	$song_album=$_POST['song_album'];
	$song_langauge=$_POST['song_langauge'];
	$song_type=$_POST['song_type'];
	$song_des=$_POST['song_des'];
	

	//INSERT INTO `songs`(`song_id`, `username`, `song_link`, `song_name`, `song_singer`, `song_album`, `song_langauge`, `song_type`, `song_des`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])



	$i="INSERT INTO songs (username,song_link,song_name,song_singer,song_album,song_langauge,song_type,song_des)values('$username','$song_link','$song_name','$song_singer','$song_album','$song_langauge','$song_type','$song_des')";
	

	if(mysqli_query($con, $i))
	{
	echo "<script type='text/javascript'>alert('Inserted successfully..!')</script>";
	}
	else {
		echo "<script type='text/javascript'>alert('NOT inserted! ! ! Error!!')</script>";
	}
	 
	//code for SONG uploading
			// if($_FILES['song_link']['name'])
			// {
			//move_uploaded_file($_FILES['song_link']['tmp_name'], "./files/".$_FILES['song_link']['name']);

			// $srcfile = $_FILES['song_link']['name'];
			// $destfile = "/files/".$_FILES['song_link']['name'];
		    // echo copy($srcfile, $destfilefile);
	// 	    echo  copy($srcfile, $destfile);
			
	// 		if (!copy($srcfile, $destfilefile)) { 
	// 	    	echo "File cannot be copied!"; 
	// 		} 
	// 		else { 
	// 		    echo "File has been copied!"; 
	// 		}

	// 	$song_link="./files/".$_FILES['song_link']['name'];
	// }
	 


}?>
<!-- <script type="text/javascript">alert()</script> -->

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
			 

				<!-- -----------------------------------Audio File Upload code ---------------------------------------------- -->
						<?php
						//error_reporting(0);
						   // if(isset($_POST['submit'])){
						   //    $errors= array();
						   //    $file_name = $_FILES['song']['name'];
						   //    $file_size = $_FILES['song']['size'];
						   //    $file_tmp = $_FILES['song']['tmp_name'];
						   //    $file_type = $_FILES['song']['type'];
						   //    $file_ext=strtolower(end(explode('.',$_FILES['song']['name'])));
						      
						   //    $extensions= array("mp3","wav","avi","3gp");
						   //    //$extensions= array("jpeg","jpg","png");
						      
						   //    if(in_array($file_ext,$extensions)==false){
						   //       $errors[]="extension not allowed, please choose a mp3 wav or avi file.";
						   //    }
						      
						   //    if($file_size > 2097152) {
						   //       $errors[]='File size must be excately 2 MB';
						   //    }
						      
						   //    if(empty($errors)==true) {
						   //       move_uploaded_file($_FILES['song']['tmp_name'],"./songs/".$_FILES['song']['name']);
						   //       echo "Success";
						   //    }else{
						   //       //print_r($errors);
						   //       echo $errors[0];
						   //    }
						   // }
						?>
				<!-- -----------------------------------Audio File Upload code ---------------------------------------------- -->
					<div class="row">
						<div class="col-md-7 offset-md-3">
							
							<!-- ----------------------------------------- -->
							
							<div class="row m-1 p-1">
							<form class="text-center" method = "POST" enctype = "multipart/form-data">
								
								<div class="form-row p-2">
									<h2 class="text-white text-center">Upload your music here</h2>

								</div>	
										
								<div class="form-inline form-row p-2">
									<!-- <input type="file" name="song_link" placeholder="Paste The Link Here.."  class="form-control mr-sm-2"> -->
									<input type="text" name="song_link" placeholder="Paste The Link Here.."  class="form-control mr-sm-2">
						      		<input type="text" name="song_name" placeholder="Name of Song"  class="form-control mr-sm-2">
						      	</div>
						      	<div class="form-inline form-row p-2">
						      		<input type="text" name="song_singer" placeholder="Singer"  class="form-control mr-sm-2">
						      		<input type="text" name="song_album" placeholder="Album"  class="form-control mr-sm-2">
								</div>
						      	
						      	<div class="form-inline form-row p-2">
							      	<!-- <input type="text" name="song_langauge" placeholder="Eng,Hindi,Bengali"  class="form-control mr-sm-2"> -->
							      	<select type="text" name="song_langauge" placeholder="Eng,Hindi,Bengali" class="form-control form-control-md mr-sm-2">
									  <option>Bengali</option>
									  <option>English</option>
									  <option>Urdu</option>
									  <option>Hindi</option>
									  <option>Others</option>
									</select>

									<select type="text" name="song_type" placeholder="Modern,Folk,Rock, Jazz" class="form-control form-control-md mr-sm-2">
									  <option>Modern</option>
									  <option>Folk</option>
									  <option>Fussion</option>
									  <option>Mashup</option>
									  <option>Jazz</option>
									  <option>Party Song</option>
									  <option>Re-mix</option>
									  <option>Bollywood</option>
									  <option>Others</option>
									</select>
							      	<input type="text" name="username" placeholder="User name"  class="form-control mr-sm-2">
						      	</div>
						      	
						      	<div class="form-row p-2">
						      		<input type="text" name="song_des" placeholder="Write About The song"  class="form-control ">

								</div>

								<div class="form-row m-1 p-2">
									<input type="submit" name="submit" class="btn btn-lg btn-outline-light">

								</div>
						    </form>
						    </div>
						    
							<!-- -------------------------------------------- -->
						</div>
					</div>
			  

			  <p class="lead">
			    <!-- <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a> -->
			  </p>
			</div>

	</div>	



</div>

	<!-- Empty row -->
	<!-- <div class="row">
		<div class="col-md-12">
			<br>
			<br>
		</div>
	</div> -->
	<!-- Empty row -->

<!-- Music List -->
<div class="row h-50" id="play">
		<div class="col-md-6" >
			<!-- ========================================Video Player=================================================== -->
				
				<?php 
				//Play Button
				$song_play_link="";
				if (isset($_GET['action'])) {
				    if ($_GET['action']=='play') {
				        // $song_id=$_GET['song_id'];
				        $song_play_link=$_GET['link'];
				        echo $song_play_link;
				    
				
				 ?>
						<iframe width="100%" height="380" src="https://www.youtube.com/embed/<?php echo $song_play_link;?>?controls=1"></iframe>
				<?php 
					
						}
					}else{
				 ?>
						<iframe width="100%" height="380" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=1"></iframe>
				<?php
					}
				 ?>
			<!-- ========================================Video Player=================================================== -->
		</div>

		<div class="col-md-6">
			 <!-- ---------------------------------------- -->

			 <div class="row">
			 	<div class="col-md-10" 
			 	style="
		      background: #ff5db1;/*Old browsers*/
		      background: -moz-linear-gradient(top, #ff5db1 0%, #ef017c 100%);/*FF3.6-15*/
		      background: -webkit-linear-gradient(top, #ff5db1 0%,#ef017c 100%);/*Chrome10-25,Safari5.1-6*/
		      background: linear-gradient(to bottom, #ff5db1 0%,#ef017c 100%);/*W3C,IE10+,FF16+,Chrome26+,Opera12+,Safari7+*/
		      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5db1',endColorstr='#ef017c',GradientType=0);/* IE6-9*/
		      "		
				>
			 		<h3 class="text-white">
			 			Music List
			 		</h3>
			 	</div>
			 </div>

			 <div class="row ">
			 	<div class="col-md-10">
			 		<!-- ---------------------------Your Songs Table------------------------------------- -->
			 		
			 			<div class="alert alert-danger">
			 				

			 					<!-- ====================================================================== -->
			 					<table class="table table-responsive"  style=" height: 310px; overflow: scroll;">
			 						
			 						 <?php 

                                            	// $usr="test";
                                             //    $query= "SELECT*FROM songs ORDER BY song_name asc where username='$usr'";
                                                $query= "SELECT*FROM songs ORDER BY song_name asc";
                                                $result= mysqli_query($con, $query);
                                                $num_rows=mysqli_num_rows($result);
                                                
                                                if ($num_rows > 0){
                                                	$num= 1;
                                                    while ($value = mysqli_fetch_assoc($result)){  
                                                ?>
                                                <!-- Fetch Songs Dynamically -->
						    	<!-- `username`, `song_link`, `song_name`, `song_singer`, `song_album`, `song_langauge`, `song_type`, `song_des -->

                                                <tbody>
                                                  <tr>
                                                    <th scope="row"><?php echo $num; ?></th>
                                                    <th scope="row"><?php echo $value['inv_cartno']; ?></th>
                                                    <td>
                                                    	<a href ="home.php?action=play&link=<?php echo $value['song_link']; ?>#play"><span class="btn btn-lg btn-outline-success">  PLAY  </span>
                                                    	</a>
                                                    </td>

                                                    <td>
                                                    	<p><b><em>SONG     : </em></b><?php echo $value['song_name']; ?></p>
                                                    	<p><b><em>Singer   : </em></b><?php echo $value['song_singer']; ?></p>
                                                    	<p><b><em>Album    : </em></b><?php echo $value['song_album']; ?></p>
                                                    	<p><b><em>Type     : </em></b><?php echo $value['song_type'];?></p>
                                                    	<p><b><em>Language : </em></b><?php echo $value['song_langauge'];?></p>
                                                    	<p><b><em>Description : </em></b><?php echo ($value['song_des']);?></td></p>
                                                    </td>
                                                    <!-- <td><?php echo ($value['song_des']);?></td> -->
                                                    <td>Uploaded by <?php echo $value['username'];?></td>
                                                    <td>

                                                    	<?php 
                                                    	if ($loggeduser== $value['username']) {
                                                    		
                                                    	 ?>
                                                    		<a href ="home.php?action=delete&id=<?php echo $value['song_id']; ?>"><span class="badge-danger" >  DELETE  </span></a>

                                                    	<?php 
                                                    	 }
                                                    	?>

                                                    </td>
                                                  </tr>
                                               

                                                  
                                                  
                                                <!-- Fetch Cart Items Dynamically -->
                                            <?php 
                                            		$num+=1;
                                                }
                                                    
                                              }

                                            ?>
                                          
                                            <!-- Fetch Cart Items Dynamically -->
                                         </tbody>
			 					</table>
			 					<!-- ====================================================================== -->

      
  

			 			</div>


			 		<!-- ---------------------------Table------------------------------------- -->
			 	</div>
			 </div>



			 <!-- ---------------------------------------- -->
		</div>
	</div>
<!-- Music List -->



<!-- Emptey row -->
	<div class="row">
		<div class="col-md-12">
			<br>
				
			<br>
		</div>
	</div>
<!-- Emptey row -->

<!--================================================DIsplay block====================================================-->



<!--==============================================  footer Starts ==================================== -->
<?php include 'footer.php'; ?>
<!-- =============================================  footer Ends   ======================================  -->
   

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./bgcolor.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Music Share- Priyanka</title>
  </head>
  <body>

    <div class="container-fluid">
    <!-- =========================================
                          Nav bar
        ============================================ -->

          <div class="row bg-dark">
          <div class="col-md-12">
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
              <h3>
                <i>Music Share</i>
              </h3>
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav ml-8 mr-1 mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="./home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Users List </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./registerdonor.php">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./admin/index.php">ADMIN</a>
                </li>
                <!-- Log Out -->
                <?php
                
                
                  if (!empty($_SESSION['username'])) {

                ?>


                    <li class="nav-item">
                      <a class="nav-link" href="index.php?logout='1'">Log Out<span class="sr-only">(current)</span></a>
                    </li>

                <?php
                   }
                ?>
                <!-- Log Out -->
                </ul>


                <ul class="navbar-nav text-right ml-auto mr-4 mt-2 mt-lg-0">
              <li class="nav-item text-right">
              <?php 
                  if (!empty($loggeduser)) {


              ?>
              <span class="navbar-text">
                  <!-- user_img -->
                  <img src="<?php echo $loggeduserimg; ?>" class="img-fluid img-thumbnail" alt="<?php echo $loggeduser; ?>" style="width: 15% !important; height: 15% !important;" >
                  <?php echo $loggeduser; ?>
                
              </span>
            </li>
            

              <?php 
                }
              ?>
              </ul>
            </div>
          </nav>


          </div>  
          </div>  

    <!-- =========================================
                          Nav bar
        ============================================ -->




        <!--------------------------------- Header Ends----------------------- -->


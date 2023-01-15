
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Home</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="assets/css/style-liberty.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
<?php
include('header-sidebar.php');
?>
<section>

<!-- header and sidebar section starts -->


<!-- header and sidebar section ends -->


<!-- main content starts here -->

<!-- user dashboard details here -->
<?php       
                if(isset($_SESSION['login']) && $_SESSION['login']=="success")
                {
                  $userfname = $_SESSION['username'];
                  // saving current time format
                  // date_default_timezone_set("Asia/Calcutta");
                  // $currentdate = date("h:i:sa"); 
                
                  $userftext = $userfname[0];
                  echo('<div class="main-content">
                  <!-- content -->
                  <div class="container-fluid content-top-gap">
                      <div class="welcome-msg pt-5 ">
                          <h1>Hi <span class="text-primary">'.$userfname.'</span>, Welcome 
                           back</h1>
                          <p>Very detailed & featured admin.</p>
                      </div>
              
                      <!-- statistics data -->
                      <div class="statistics">
                          <div class="row">
                              <div class="col-xl-6 pr-xl-2">
                                  <div class="row">
                                      <div class="col-sm-6 pr-sm-2 statistics-grid">
                                          <div class="card card_border border-primary-top p-4">
                                              <i class="lnr lnr-clock"> </i>
                                              <h3 class="text-primary number" id="timer"></h3>
                                              <script>
                                              var timerVar = setInterval(countTimer, 1000);
                                          var totalSeconds = 0;
                                          function countTimer() {
                                                     ++totalSeconds;
                                                     var hour = Math.floor(totalSeconds /3600);
                                                     var minute = Math.floor((totalSeconds - 
                                                      hour*3600)/60);
                                                     var seconds = totalSeconds - (hour*3600 + 
                                                      minute*60);
                                                     if(hour < 10)
                                                       hour = "0"+hour;
                                                     if(minute < 10)
                                                       minute = "0"+minute;
                                                     if(seconds < 10)
                                                       seconds = "0"+seconds;
                                                     document.getElementById("timer").innerHTML 
                                                      = hour + "h:" + minute + "m:" + seconds+ 
                                                       "s";
                                                  }
                                            </script>
                                              <p class="stat-text">Logged in since</p>
                                          </div>
                                      </div>
                                      <div class="col-sm-6 pl-sm-2 statistics-grid">
                                          <div class="card card_border border-primary-top p-4">
                                              <i class="lnr lnr-eye"> </i>
                                              <h3 class="text-secondary number">51.25 K</h3>
                                              <p class="stat-text">Daily Visitors</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-6 pl-xl-2">
                                  <div class="row">
                                      <div class="col-sm-6 pr-sm-2 statistics-grid">
                                          <div class="card card_border border-primary-top p-4">
                                              <i class="lnr lnr-cloud-download"> </i>
                                              <h3 class="text-success number">166.89 M</h3>
                                              <p class="stat-text">Downloads</p>
                                          </div>
                                      </div>
                                      <div class="col-sm-6 pl-sm-2 statistics-grid">
                                          <div class="card card_border border-primary-top p-4">
                                              <i class="lnr lnr-cart"> </i>
                                              <h3 class="text-danger number">1,250k</h3>
                                              <p class="stat-text">Purchased</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- //statistics data -->
              
                  </div>
                  <!-- //content -->
              </div>');
                }

                else
                {
                  echo('  <div class="row">
     
                  <div class="col-lg-12">
                    <div class="card card_border">
                    
            
                      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">

                          <div class="carousel-item active layer">
                            <img src="assets/images/brand/Puma.jpg " style="height: 90vh;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Best Shoes, For the Best Style</h3>
                              <p>You only wear your expensive touch.</p>
                            </div>
                          </div>
                          <div class="carousel-item layer">
                            <img src="assets/images/brand/Adidas.jpg " style="height: 90vh;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h3>A power that Runs you</h3>
                              <p>See the light of comfort and perfection.</p>
                            </div>
                          </div>

                          <div class="carousel-item layer">
                            <img src="assets/images/brand/Nike.jpg " style="height: 90vh;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Imagine the Best in Every Shoe</h3>
                              <p>Make sure you are on the correct path.</p>
                            </div>
                          </div>

                         

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>');
                }

                ?>
<!-- user dashboard detail ends here -->

<!-- top brands starts here -->
<div class="main-content mt-0">
  <!-- content -->
  <div class="container-fluid content-top-gap">
    <!-- faq block style-->
    <div class="card card_border p-1 mb-4">
      <!-- card heading -->
      <div class="cards__heading">
        <h3>Top Brands</h3>
      </div>
      <!-- //card heading -->
      <div class="card-body">
      <div class="row px-2">
           <!-- printing top brands from server -->
           <?php
              //  connecting to server
               include('handlers/connection.php');
               
              //  getting data from the server
              $sql = 'SELECT * FROM `brands`';
              $result = mysqli_query($conn, $sql);
               while($row=mysqli_fetch_assoc($result))
               {
                // storing server data in the local veriables
                  $brand_name = $row['brand_name'];
                  $rating_score = $row['rating_score'];
                  $price_range = $row['price_range'];
                  $orders = $row['orders'];
                  $people_love = $row['people_love'];

                  // printing output using local veriables

                  echo('<div class="col-lg-4 col-md-6 px-2 mb-4">
                  <div class="card card_border">
                    <div class="content">
                      <div class="content-overlay"></div>
                      <img src="assets/images/brand/'.$brand_name.'.jpg" class="img-fluid" style="height: 40vh; width: 100% ;">
                      <div class="content-details fadeIn-top">
                        <a href="products.php"  target="_blank" class="btn-primary btn-style">Shop Now</a>
                      </div>
                    </div>
                    <div class="card-footer text-muted chart-grid__footer p-4">
                      <a class="card__title" href="#link">'.$brand_name.'</a>
                      <ul class="star">
                        <li><span class="fa fa-star" aria-hidden="true"></span></li>
                        <li><span class="fa fa-star" aria-hidden="true"></span></li>
                        <li><span class="fa fa-star" aria-hidden="true"></span></li>
                        <li><span class="fa fa-star" aria-hidden="true"></span></li>
                        <li><span class="fa fa-star-o" aria-hidden="true"></span></li>
                        <li>('.$rating_score.' ratings)</li>
                      </ul>
                      <ul class="cost d-flex">
                        <li><span class="fa fa-inr"></span>'. $price_range.'</li>
                        <li class="ml-3"><span class="fa fa-download"></span> '.$orders.'</li>
                        <li class="ml-3"><a href="#fav" title="Add this to Favorite"><span class="fa fa-heart-o m-0"></span>'.$people_love.'</a></li>
                      </ul>
                    </div>
                  </div>
                </div>');
                   
               }

                
           ?>



      </div>
    </div>
    <!-- //faq block style-->


  </div>
  <!-- //content -->
</div>

<!-- top brands ends here -->
<!-- main content ends here -->

</section>
  <!--footer section start-->
  <?php
     include('footer.php');
   ?>
<!--footer section end-->
  <!-- all scripts used here -->
<?php
     include('scripts.php');
   ?>
  <!-- all scripts used here -->



</body>

</html>
  
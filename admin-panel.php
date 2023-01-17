<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin-panel</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&amp;display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
    <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="/assests/css/font-awesome.min.css">
    <!-- New toolbar-->


    <!-- printing admin action result here -->
    <?php       
                                    session_start();
                                     if(isset($_SESSION['delete']) && $_SESSION['delete']=="success")
                                     {
                  
                                        echo('<div class="outgoing_msg">
                                        <div class="sent_msg">
                                          <p>Success, Brand Deleted Successfully. </p>
                                        </div>
                                      </div>');
                                      session_destroy();
                                    }
                                    if(isset($_SESSION['edit']) && $_SESSION['edit']=="success")
                                    {
                 
                                       echo('<div class="outgoing_msg">
                                       <div class="sent_msg">
                                         <p>Success, Brand Edited Successfully. </p>
                                       </div>
                                     </div>');
                                     session_destroy();
                                   }
                                   if(isset($_SESSION['add']) && $_SESSION['add']=="success")
                                   {
                
                                      echo('<div class="outgoing_msg">
                                      <div class="sent_msg">
                                        <p>Success, Brand Added Successfully. </p>
                                      </div>
                                    </div>');
                                    session_destroy();
                                  }
                                    ?>
    <!-- printing admin action result here -->

    <section>
        <!-- main content start -->
        <div class="main-content">

            <!-- content -->
            <div class="container-fluid content-top-gap">
                <!-- data tables -->
                <div class="data-tables">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card card_border p-4">
                                <h3 class="card__title position-absolute">All Brands Info</h3>
                       
                                <div class="table-responsive">
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dataTables_length" id="example_length"><label></label></div>
                                        <div id="example_filter" class="dataTables_filter"><label><input type="search"
                                                    class="" placeholder="Search" aria-controls="example"></label></div>
                                   
                                        <table id="example" class="display dataTable no-footer" style="width: 100%;"
                                            role="grid" aria-describedby="example_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" style="width: 317px;">Brand Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        style="width: 317px;">Rating Score</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        style="width: 306px;">Price Range</th>
                                                    <th class="sorting" tabindex="0" style="width: 317px;"> Orders
                                                    </th>
                                                    <th class="sorting" tabindex="0" style="width: 317px;"> Likes
                                                    </th>
                                                    <th class="sorting" tabindex="0" style="width: 580px;">Actions
                                                    </th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                    </td>
                                                    <td></td>  
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <span type="button" data-toggle="modal"
                                                            data-target="#addnewmodal"
                                                            class="badge badge-success">Add</span>
                                                            <a href="logout.php"> <span type="button" data-toggle="modal"
                                                            data-target="#addnewmodal"
                                                            class="badge badge-danger">Log-out</span></a>
                                                    </td>

                              <!-- modal -->
                              <div class="modal fade" style="width: 100vw;" id="addnewmodal" tabindex="-1" role="dialog"
                                                       aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                                       <div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 100vw;">
                                                           <div class="modal-content" style="min-width: 100vw;">
                                                               <div class="modal-header">
                                                                   <h5 class="modal-title" id="exampleModalLongTitle">Admin</h5>
                                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                       <span aria-hidden="true">×</span>
                                                                   </button>
                                                               </div>
                                                               <div class="modal-body">
                                                                   <section class="login-form py-md-5 py-3">
                                                                       <div class="card card_border p-md-4">
                                                                           <div class="card-body">
                                                                               <!-- form -->
                                                                               <form action="add-brand.php" method="GET">
                                                                                   <div class="login__header text-center mb-lg-5 mb-4">
                                                                                       <h3 class="login__title mb-2"> Add New Brand</h3>
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="bname" class="input__label">Brand Name</label>
                                                                                       <input type="text"
                                                                                           class="form-control login_text_field_bg input-style" id="bname"
                                                                                           aria-describedby="emailHelp" name="bname"  placeholder="" required=""
                                                                                           autofocus="">
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="brating" class="input__label">Rating Score</label>
                                                                                       <input type="number"
                                                                                           class="form-control login_text_field_bg input-style"
                                                                                           id="brating" aria-describedby="emailHelp" name="brating" placeholder=""
                                                                                           required="" autofocus="">
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="bprice" class="input__label">Price Range</label>
                                                                                       <input type="text"
                                                                                           class="form-control login_text_field_bg input-style" id="bprice"
                                                                                           aria-describedby="emailHelp" name="bprice"  placeholder="" required=""
                                                                                           autofocus="">
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="border" class="input__label">Orders</label>
                                                                                       <input type="number"
                                                                                           class="form-control login_text_field_bg input-style" id="border"
                                                                                           aria-describedby="emailHelp" name="border"   placeholder="" required=""
                                                                                           autofocus="">
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="blike" class="input__label">Likes</label>
                                                                                       <input type="number"
                                                                                           class="form-control login_text_field_bg input-style" id="blike"
                                                                                           aria-describedby="emailHelp" name="blike"   placeholder="" required=""
                                                                                           autofocus="">
                                                                                   </div>
                                                                                   <div
                                                                                       class="d-flex align-items-center flex-wrap justify-content-between">
                                                                                       <button type="submit"
                                                                                           class="btn btn-success btn-style mt-4">Add</button>
                                   
                                                                                   </div>
                                   
                                                                               </form>
                                                                               <!-- //form -->
                                   
                                                                           </div>
                                                                       </div>
                                                                   </section>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <!-- modal -->
                                                </tr>

                                               <?php
                                                    // connecting to server
                                                    $conn = mysqli_connect("localhost", "root", "", "php-project");
                                                    
                                                    // getting all brands from server

                                                    $sql = "SELECT * FROM `brands`";
                                                    $result= mysqli_query($conn, $sql);
                                                     
                                                    // printing server data to page

                                                    while($row= mysqli_fetch_assoc($result))
                                                    {
                                                       $bname= $row['brand_name'];
                                                       $brating= $row['rating_score'];
                                                       $bprice= $row['price_range'];
                                                       $border= $row['orders'];
                                                       $blike= $row['people_love'];

                                                       echo('  <tr role="row" class="odd">
                                                       <td class="sorting_1">
                                                           '.$bname.'</td>
                                                       <td>'. $brating.'</td>
                                                       <td>'.$bprice.'</td>
                                                       <td>'.$border.'</td>
                                                       <td>'.$blike.'</td>
                                                       <td><span type="button" data-toggle="modal" data-target=" #'.$bname.'" class="badge badge-warning">Edit</span>
                                                           <span type="button" data-toggle="modal" data-target="#'.$bname.'remove" class="badge badge-danger">Delete</span>
                                                       </td>
                                                   </tr>
                                                   <!-- modal -->
                                                   <div class="modal fade" style="width: 100vw;" id="'.$bname.'" tabindex="-1" role="dialog"
                                                       aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                                       <div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 100vw;">
                                                           <div class="modal-content" style="min-width: 100vw;">
                                                               <div class="modal-header">
                                                                   <h5 class="modal-title" id="exampleModalLongTitle">Admin</h5>
                                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                       <span aria-hidden="true">×</span>
                                                                   </button>
                                                               </div>
                                                               <div class="modal-body">
                                                                   <section class="login-form py-md-5 py-3">
                                                                       <div class="card card_border p-md-4">
                                                                           <div class="card-body">
                                                                               <!-- form -->
                                                                               <form action="edit-brand.php" method="GET">
                                                                                   <div class="login__header text-center mb-lg-5 mb-4">
                                                                                       <h3 class="login__title mb-2"> Edit This Brand</h3>
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="bname" class="input__label">Brand Name</label>
                                                                                       <input type="text"
                                                                                           class="form-control login_text_field_bg input-style" id="bname"
                                                                                           aria-describedby="emailHelp" name="bname" value="'.$bname.'" placeholder="" required=""
                                                                                           autofocus="">
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="brating" class="input__label">Rating Score</label>
                                                                                       <input type="number"
                                                                                           class="form-control login_text_field_bg input-style"
                                                                                           id="brating" aria-describedby="emailHelp" name="brating" value="'.$brating.'"  placeholder=""
                                                                                           required="" autofocus="">
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="bprice" class="input__label">Price Range</label>
                                                                                       <input type="text"
                                                                                           class="form-control login_text_field_bg input-style" id="bprice"
                                                                                           aria-describedby="emailHelp" name="bprice" value="'.$bprice.'"  placeholder="" required=""
                                                                                           autofocus="">
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="border" class="input__label">Orders</label>
                                                                                       <input type="number"
                                                                                           class="form-control login_text_field_bg input-style" id="border"
                                                                                           aria-describedby="emailHelp" name="border" value="'.$border.'"  placeholder="" required=""
                                                                                           autofocus="">
                                                                                   </div>
                                                                                   <div class="form-group">
                                                                                       <label for="blike" class="input__label">Likes</label>
                                                                                       <input type="number"
                                                                                           class="form-control login_text_field_bg input-style" id="blike"
                                                                                           aria-describedby="emailHelp" name="blike" value="'.$blike.'"  placeholder="" required=""
                                                                                           autofocus="">
                                                                                   </div>
                                                                                   <div
                                                                                       class="d-flex align-items-center flex-wrap justify-content-between">
                                                                                       <button type="submit"
                                                                                           class="btn btn-warning btn-style mt-4">Edit</button>
                                   
                                                                                   </div>
                                   
                                                                               </form>
                                                                               <!-- //form -->
                                   
                                                                           </div>
                                                                       </div>
                                                                   </section>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <!-- modal -->
                                                   <div class="modal fade" id="'.$bname.'remove" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
                                                style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Admin</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form>
                                                        <div class="login__header text-center mb-lg-5 mb-4">
                                                            <h3 class="login__title mb-2"> Delete '.$bname.' Brand</h3>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="bname" class="input__label">Brand Name</label>
                                                            <input type="text"
                                                                class="form-control login_text_field_bg input-style" id="bname"
                                                                aria-describedby="emailHelp" name="bname" value="'.$bname.'" placeholder="'.$bname.'" disabled
                                                                autofocus="">
                                                        </div>
                                                     
                                                        <div class="form-group">
                                                            <label for="bprice" class="input__label">Price Range</label>
                                                            <input type="text"
                                                                class="form-control login_text_field_bg input-style" id="bprice"
                                                                aria-describedby="emailHelp" name="bprice" value="'.$bprice.'" placeholder="'.$bprice.'"disabled
                                                                autofocus="">
                                                        </div>
                                                      
                                                     
                                                        <div
                                                            class="d-flex align-items-center flex-wrap justify-content-between">
                                                         <a href="delete-brand.php?bname='.$bname.'">   <button  type="button"
                                                            class="btn btn-danger btn-style mt-4">Delete</button></a>
        
                                                        </div>
        
                                                    </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                   
                                                   
                                                   ');
                                                     
                                                    }
                                               ?>
                                                 
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- //data tables -->
            </div>
            <!-- //content -->
        </div>
        <!-- main content end-->
    </section>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top" style="display: block;">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <!-- /move top -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-1.10.2.min.js"></script>

    <!-- data tables js -->
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
    <!-- //data tables js -->

    <script src="assets/js/jquery.dataTables.min.js"></script>


    <script src="assets/js/faq.js"></script>

    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- close script -->
    <script>
    var closebtns = document.getElementsByClassName("close-grid");
    var i;

    for (i = 0; i < closebtns.length; i++) {
        closebtns[i].addEventListener("click", function() {
            this.parentElement.style.display = 'none';
        });
    }
    </script>
    <!-- //close script -->

    <!-- disable body scroll when navbar is in active -->
    <script>
    $(function() {
        $('.sidebar-menu-collapsed').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
    </script>
    <!-- disable body scroll when navbar is in active -->

    <!-- loading-gif Js -->
    <script src="assets/js/modernizr.js"></script>
    <script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>
    <!--// loading-gif Js -->


    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>






</body>

</html>
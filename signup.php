<?php
  include('handlers/connection.php');
      if($_SERVER['REQUEST_METHOD'] == 'POST')
        {   
    $username = $_POST['susername'];
    $userid = $_POST['suserid'];
    $userpass = $_POST['suserpass'];
    // checking users mail with server
    $sql1 = "SELECT * FROM `user-login-data` where user_id= '$userid'";
    $result1 = mysqli_query($conn, $sql1);
    $totalrows = mysqli_num_rows($result1);
    if($totalrows>0)
    {
        // mail already exists
        echo(' <div class="container-fluid mt-2">
        <!-- faq block style-->
        <div class="card card_border  mb-0">
          <!-- card heading -->
          <div class="cards__heading">
            <span  style="Color:Red; font-size:2.5em;">Error! </span>
            <span  style="Color:black; font-size:1.5em;">User-Id already exists. Please try with different account. </span>
          </div>
      
        </div>
      </div>');
    }
    else
    {
        // mail does not exists
        // we can insert users data to ther server
        $sql = "INSERT INTO `user-login-data` ( `user_name`, `user_id`, `user_pass`, `timespan`) 
       VALUES ( '$username', '$userid', '$userpass', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
          echo(' <div class="container-fluid mt-2">
          <!-- faq block style-->
          <div class="card card_border  mb-0">
            <!-- card heading -->
            <div class="cards__heading">
              <span  style="Color:Green; font-size:2.5em;">Success. </span>
              <span  style="Color:black; font-size:1.5em;">Your account created. Please login to your account. </span>
            </div>
         
          </div>
        </div>');
        }
    }  
             }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
    <section class="register-form mt-0">
        <div class="card card_border p-md-4">
            <div class="card-body">
                <!-- form -->
                <form action="signup.php" method="POST" entype="multipart/form-data">
                    <div class="register__header text-center mb-lg-5 mb-4">
                        <h3 class="register__title mb-2"> Signup</h3>
                        <p>Create your account here, and continue </p>
                    </div>
                    <div class="form-group">
                        <label for="username" class="input__label">Your Name</label>
                        <input type="text" name="susername" class="form-control login_text_field_bg input-style"
                            id="username" aria-describedby="emailHelp" placeholder="" required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="userid" class="input__label">Email address</label>
                        <input type="email" name="suserid" class="form-control login_text_field_bg input-style"
                            id="userid" aria-describedby="emailHelp" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="userpass" class="input__label">Password</label>
                        <input type="password" name="suserpass" class="form-control login_text_field_bg input-style"
                            id="userpass" placeholder="" required="">
                    </div>
                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                        <button type="submit" class="btn btn-primary btn-style mt-4">Create Account</button>
                        <p class="signup mt-4">Already have an account? <a href="login.php" class="signuplink">Login
                            </a>
                        </p>
                    </div>
                </form>
                <!-- //form -->
                <p class="backtohome mt-4"><a href="index.php" class="back"><i class="fa fa-chevron-left"
                            aria-hidden="true"></i>Back to Home </a></p>
            </div>
        </div>
        <div id="liveAlertPlaceholder"></div>

    </section>
</body>

</html>

<?php
include('handlers/connection.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$fusername = $_POST['user-id'];
$fuserpass = $_POST['user-pass'];
$sql = "SELECT * FROM `user-login-data` where user_id= '$fusername'";
$result = mysqli_query($conn, $sql);  
$row = mysqli_num_rows($result);

if($row<1)
{
  echo(' <script>alert("Error! user-id not found. Please signup first.");</script>');
}
else
{
  $output = mysqli_fetch_assoc($result);
  $susername = $output['user_name'];
  $suserpass = $output['user_pass'];
    if($fuserpass == $suserpass)
    {
        session_start();
        $_SESSION['login']="success";
        $_SESSION['username']="$susername";
        header("Location: http://localhost/php-project/index.php");
        
    }
    else
    {
      echo(' <script>alert("Error! Password do not match. Please login again");</script>');
    }
}
}



?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Login</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

</head>

<body class="sidebar-menu-collapsed">
    <section class="register-form ">
    <div class="card card_border">
        <div class="card-body">
            <!-- form -->
            <form action="login.php" method="POST">
                <div class="login__header text-center mb-lg-5 mb-4">
                    <h3 class="login__title mb-2"> Login</h3>
                    <p>Welcome back, login to continue</p>
                </div>
                <div class="form-group">
                    <label for="user-id" class="input__label">Username</label>
                    <input type="email" class="form-control login_text_field_bg input-style" 
                     id="user-id" aria-describedby="emailHelp" placeholder="e.g. abc@gmail.com" 
                      required="" autofocus="" name="user-id" >
                </div>
                <div class="form-group">
                    <label for="user-pass" class="input__label">Password</label>
                    <input type="password" class="form-control login_text_field_bg input-style" id="user-pass" 
                      name="user-pass"  required="">
                </div>
                <div class="form-check check-remember check-me-out">
                    <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                    <label class="form-check-label checkmark" for="exampleCheck1">Remember
                        me</label>
                </div>
                <div class="d-flex align-items-center flex-wrap justify-content-between">
                    <button type="submit" class="btn btn-primary btn-style mt-4">Login now</button>
                    <p class="signup mt-4">Don’t have an account? <a href="signup.php" class="signuplink">Sign
                            up</a></p>
                </div>
            </form>
            <!-- //form -->
            <p class="backtohome mt-4"><a href="index.php" class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back to Home </a></p>
        </div>
    </div>
    </section>  



<!-- /move top -->




<!-- Bootstrap Core JavaScript -->


</body>

</html>
  
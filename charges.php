
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Home</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
<section>

<!-- header and sidebar section starts -->
<?php
include('header-sidebar.php');
?>
<!-- header and sidebar section ends -->

<!-- main content starts here -->

<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mt-5">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Charges</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->


    <!-- faq block style-->
    <div class="card card_border p-1 mb-4">
      <!-- card heading -->
      <div class="cards__heading">
        <h3>Our Services Charges </h3>
      </div>
      <!-- //card heading -->
      <div class="card-body">
      <div class="card card_border">
            <div class="card-body">
              <div class="table-main">
                <table class="table">
                  <thead class="sub-titles">
                    <tr>
                      <th class="fixed">Value</th>
                      <th>Under</th>
                      <th>Between</th>
                      <th>Above</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- price -->
                    <tr class="price">
                      <td class="top-bottom-gap fixed">
                        <h5 class="sub-titles">Price Range</h5>
                      </td>
                      <td class="top-bottom-gap">
                        <span class="sign">&#8377</span>
                        <span class="currency">500</span>
                        <p>When you purchases products from our site under this range you will get:-
                        </p>
                      </td>
                      <td class="top-bottom-gap">
                        <span class="sign">&#8377</span>
                        <span class="currency">500-2000</span>
                        <p>When you purchases products from our site under this range you will get:-
                        </p>
                      </td>
                      <td class="top-bottom-gap">
                        <span class="sign">&#8377</span>
                        <span class="currency">2000</span>
                        <p>When you purchases products from our site under this range you will get:-
                        </p>
                      </td>
                    </tr>
                    <!--//price -->
                    <!-- Hosting -->
                    <tr>
                      <td class="fixed">
                        <h5 class="sub-titles">Minimum Order Charges</h5>
                      </td>
                      <td class="check">✓</td>
                      <td class="check">_____</td>
                      <td class="check">_____</td>
                    </tr>
                    <!-- //Hosting -->
                    <!-- Connect of domain -->
                    <tr>
                      <td class="fixed">
                        <div class="d-grid align-pricing">
                          <h5 class="sub-titles">Delivery Charges</h5>
                        </div>
                      </td>
                      <td class="check">✓</td>
                      <td class="check">✓</td>
                      <td class="check">_____</td>
                    </tr>
                    <!--//Connect of domain -->
                    <!-- SSL certificate -->
                    <tr>
                      <td class="fixed">
                        <h5 class="sub-titles">Cashback</h5>
                      </td>
                      <td class="check">_____</td>
                      <td class="check">_____</td>
                      <td class="check">✓</td>
                    </tr>
                    <!-- //SSL certificate -->
                    <!-- Monthly visits -->
                    <tr>
                      <td class=" fixed">
                        <div class="grid-class">
                          <h5 class="sub-titles">Discount Coupens </h5>
                        </div>
                      </td>
                      <td class="check">_____</td>
                      <td class="check">_____</td>
                      <td class="check">✓</td>
                    </tr>
                    <!--//Monthly visits -->
                    <!-- CMS items -->
                    <tr>
                      <td class="fixed">
                        <div class="grid-class">
                          <h5 class="sub-titles">Membership </h5>
                        </div>
                      </td>
                      <td class="check">_____</td>
                      <td class="check">_____</td>
                      <td class="check">✓</td>
                    </tr>
                    <!--//CMS items -->
                    <!-- SSL -->
                    <tr>
                      <td class=" fixed border-none">
                        <h5 class="sub-titles">Refund</h5>
                      </td>
                      <td class="check">_____</td>
                      <td class="check">_____</td>
                      <td class="check">✓</td>
                    </tr>
                    <!--//SSL -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- //faq block style-->


  </div>
  <!-- //content -->
</div>


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
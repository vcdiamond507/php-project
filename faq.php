
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
        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->


    <!-- faq block style-->
    <div class="card card_border p-1 mb-4">
      <!-- card heading -->
      <div class="cards__heading">
        <h3>Frequently asked questions </h3>
      </div>
      <!-- //card heading -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <section class="w3l-faq-block" id="faq">
              <div class="faq-page">
                <ul>
                  <li>
                    <input type="checkbox" checked="">
                    <i></i>
                    <h2><span class="badge bg-primary">1</span> Is there a minimum order?</h2>
                    <p>No, you can order as little as 1 shoe! There is a delivery charge for 
                            orders under&#8377 500 .</p>
                  </li>
                  <li>
                    <input type="checkbox" checked="">
                    <i></i>
                    <h2><span class="badge bg-primary">2</span>When will my order be confirmed and my card charged?</h2>
                    <p>You will first receive an automatic order acknowledgement email. When we have finished processing your order, we send you a second email. We only charge your card when your order is confirmed.</p>
                  </li>
                  <li>
                    <input type="checkbox" checked="">
                    <i></i>
                    <h2><span class="badge bg-primary">3</span> Can I change or cancel my order before it’s despatched?
                    </h2>
                    <p>If you want to change or cancel your order please contact us as soon as possible. Once you have received your confirmation email we may have to charge you an admin fee.</p>
                  </li>
                  <li>
                    <input type="checkbox" checked="">
                    <i></i>
                    <h2><span class="badge bg-primary">4</span> Do you give a discount for large orders?</h2>
                    <p>We are a wholesaler and always welcome large orders! We would be very happy to give discounts for special orders. Don’t be shy – give us a call!</p>
                  </li>
                  <li>
                    <input type="checkbox" checked="">
                    <i></i>
                    <h2><span class="badge bg-primary">5</span> What is the delivery charge?
                    </h2>
                    <p>Delivery to most Indian postcodes is free when you spend &#8377 120. Orders by 12pm are usually delivered the next working day in India. We will confirm to you by email your delivery date once your order is processed. Deliveries to remote Indian addresses and other counties take longer and may be charged by the case. Any additional cost will be calculated when you check out.</p>
                  </li>
                  <li>
                    <input type="checkbox" checked="">
                    <i></i>
                    <h2><span class="badge bg-primary">6</span>Do you offer same day delivery?</h2>
                    <p>Only for H.P. postcodes deliveries and subject to availability. We need to receive your order by 10am. The charge for this is &#8377 25.</p>
                  </li>
                  <li>
                    <input type="checkbox" checked="">
                    <i></i>
                    <h2><span class="badge bg-primary">6</span>Do you offer Saturday delivery?</h2>
                    <p>No we do not</p>
                  </li>
                  <li>
                    <input type="checkbox" checked="">
                    <i></i>
                    <h2><span class="badge bg-primary">6</span>How can I track my order?</h2>
                    <p>It is not yet possible to track your order online. If you leave your contact number in the delivery instructions, the driver will be able to contact you to give you an ETA. Alternatively, please get in touch with us</p>
                  </li>
                </ul>
              </div>
            </section>


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
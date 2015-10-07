
<!DOCTYPE>
<?php
include ("functions/functions.php");
?>

<html>
<head>
  <title>E-shop</title>

  <!-- {Bootstrap}-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/style.css" media="all" />
</head>
<body>

  <div class="main_container">
<!--Header-->
    <div class="header_container"="header_container">

      <img id="ricon" src="images/1.png" height="150px" width="800px"  />

      <a href="index.php"><img id="licon" src="https://s-media-cache-ak0.pinimg.com/736x/1e/29/77/1e2977ca1225981e307ad8d2c26a9040.jpg
      " height="150px" width="200px"  /></a>

    </div>
<!--End Header-->

<!--Start menubar -->
    <div class="menubar">

      <ul class="nav nav-tabs">

        <li><a href="index.php">Home</a> </li>
        <li><a href="all_products.php">All Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="#">Sign up</a></li>
        <li><a href="Customer/my_account.php">My Profile</a></li>
          <li>
            </ul>



          </div>
        </div>

<!--End menubar-->

<!--sideBar Categories and Brands-->
        <div class="content_container">
          <div id="sidebar">
            <div id="sidebar_title"> Categories</div>
            <ul id="cats">

              <?php
              getCats();
              ?>

            </ul>

            <div id="sidebar_title">Brands</div>
            <ul id="cats">
              <?php
              getBrands();
              ?>


            </ul>
          </div>


        </div>

      </div>


      <div id="content_area">
        <div id="cart">
          <span style="float:right" ; font-size:20px; padding:px ; line-height:40px;>

            Guest <a href="cart.php">Cart</a></span>
        </div>

          <div id="products_display">
            <?php getPro(); ?>
            <?php getCatPro(); ?>
            <?php getBrandPro(); ?>
          </div>
      </div>


    </div>

<!--footer-->
    <div id="footer"></div>
    <h3 style="text-align:center; ">&copy; 2015 by Kira</h2>
  </div>
  </div>



</body>
</html>


<!DOCTYPE>
<?php
include ("functions/functions.php");
?>

<html>
<head>
  <title>E-shop</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/style.css" media="all" />
</head>
<body>

  <div class="main_container">

    <div class="header_container"="header_container">

      <img id="ricon" src="images/1.png" height="150px" width="800px"  />

      <img id="licon" src="https://s-media-cache-ak0.pinimg.com/736x/1e/29/77/1e2977ca1225981e307ad8d2c26a9040.jpg
      " height="150px" width="200px"  />

    </div>

    <div class="menubar">

      <ul class="nav nav-tabs">
        <li><a href="#">Home</a> </li>
        <li><a href="#">All Products</a></li>
        <li><a href="#">Cart</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">My Profile</a></li>
        <li>  <form class="navbar-search pull-left">
          <li>
            <div id="form">
              <form action="results.php" method="get" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="search a product">
                <input type="submit" name="search" value="Search">
              </form></li>
            </ul>



          </div>
        </div>


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

      </div>


    </div>

    <div id="footer"></div>
    <h3 style="text-align:center; ">&copy; 2015 by Kira</h2>
  </div>
  </div>



</body>
</html>

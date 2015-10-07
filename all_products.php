
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
      <?php global $con;
        $get_pro = "select * from products order by RAND() Limit 0,6";
        $run_pro = mysqli_query($con, $get_pro);


      while($row_pro=mysqli_fetch_array($run_pro))
      {
        $pro_id = $row_pro['product_id'];
        $pro_cat = $row_pro['product_cat'];
        $pro_brand = $row_pro['product_brand'];
        $pro_name = $row_pro['product_name'];
        $pro_price = $row_pro['product_price'];

        $pro_image = $row_pro['product_image'];


        echo " <div id='single_product' >
                    <h3>$$pro_name</h3>
                    <img src= 'admin/product_images/$pro_image' width='100' height='180'/>
                    <p>$pro_price</p>
                    <a href='details.php?pro_id=$pro_id' style= float:left> Details</a>
                    <a href='index.php?pro_id=$pro_id'><button style='float:right'> Add to cart</button></a>
                </div>";
      } ?>
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

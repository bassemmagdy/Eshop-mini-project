
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

      <img id="licon" src="https://s-media-cache-ak0.pinimg.com/736x/1e/29/77/1e2977ca1225981e307ad8d2c26a9040.jpg
      " height="150px" width="200px"  />

    </div>
<!--End Header-->

<!--Start menubar -->
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


            <?php
            if(isset($_GET['pro_id']))
            {
              $product_id=$_GET['pro_id'];

            $get_pro = "select * from products  where product_id='$product_id'";
            $run_pro = mysqli_query($con, $get_pro);


          while($row_pro= mysqli_fetch_array($run_pro))
          {
            $pro_id = $row_pro['product_id'];
            $pro_cat = $row_pro['product_cat'];
            $pro_brand = $row_pro['product_brand'];
            $pro_name = $row_pro['product_name'];
            $pro_price = $row_pro['product_price'];
            $pro_desc = $row_pro['product_desc'];
            $pro_image = $row_pro['product_image'];


            echo " <div id='single_product' >


                        <img src= 'admin/product_images/$pro_image' width='350' height='220'/>
                        <h3>$$pro_name</h3>
                        <p>$pro_price</p>
                        <p>$pro_desc</p>
                        <a href='index.php?pro_id=$pro_id' style= float:left> Home</a>
                        <a href='index.php?pro_id=$pro_id'><button style='float:right'> Add to cart</button></a>
                    </div>";
          }
          }

             ?>
          </div>
      </div>




<!--footer-->
    <div id="footer"></div>
    <h3 style="text-align:center; ">&copy; 2015 by Kira</h2>
  </div>
  </div>



</body>
</html>

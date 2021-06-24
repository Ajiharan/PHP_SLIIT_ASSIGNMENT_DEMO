<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="index.css.css" />
    <link
      rel="icon"
      href="image/logo/download.png"
      type="image/gif"
      sizes="16x16"
    />

    <meta charset="utf-8" />
    <title>Apple</title>
  </head>
  <body>
  <?php 
     include('./header/Header.php')
    ?>

    <div class="topnav" id="myTopnav">
      <div class="dropdown">
        <button class="dropbtn">
          Apple Products
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="iphone.php">iPhone</a>
          <a href="ipad.php">iPad</a>
          <a href="mac.php">Mac </a>
          <a href="iwatch.php">iWatch</a>
        </div>
      </div>
      <a href="About Us.php">About Us</a>
      <a href="Contact Us.php">Contact Us</a>
      <div class="dropdown">
        <button class="dropbtn">
          More
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="FAQ.php">FAQ</a>
          <a href="Terms and Conditions.php">Terms & Conditions</a>
          <a href="Privacy Policy.php">Privacy Policy</a>
        </div>
      </div>

      <input type="text" placeholder="Search.." />
    </div>

    <img src="image/home01.jpg" style="width: 100%" />

    <br /><br />

    <h1 align="center" style="color: #e8c301">NEW ARRIVALS!</h1>
    <div class="container1">
      <div class="box">
        <div class="details">
          <img src="image/iphone/ph1.png" class="product" />
        </div>
      </div>

      <div class="box">
        <div class="details">
          <img src="image/iphone/ph.png" class="product" />
        </div>
      </div>

      <div class="box">
        <div class="details">
          <img src="image/ipad/new.png" class="product" />
        </div>
      </div>

      <div class="box">
        <div class="details">
          <img src="image/mac/new.png" class="product" />
        </div>
      </div>

      <div class="box">
        <div class="details">
          <img src="image/iwatch/new.png" class="product" />
        </div>
      </div>
    </div>

    <br /><br /><br /><br />
    <h1 align="center" style="color: black">Shop By Product</h1>
    <br /><br />
    <table width="75%" align="center">
      <tr>
        <td align="center">
          <img src="image/iphone/product.png" />
          <p class="producttext">PHONES</p>
        </td>

        <td align="center">
          <img src="image/ipad/product.png" />
          <p class="producttext">PADS</p>
        </td>

        <td align="center">
          <img src="image/mac/product.png" />
          <p class="producttext">MACS</p>
        </td>

        <td align="center">
          <img src="image/iwatch/product.png" />
          <p class="producttext">WATCHS</p>
        </td>
      </tr>
    </table>

    <br /><br /><br /><br />
    <img src="image/home/c.png" style="width: 100%" />
    <br /><br />

    <table width="75%" align="center">
      <tr>
        <td>
          <img src="image/logo/a.png" />
        </td>
        <td>
          <img src="image/logo/b.png" />
        </td>
        <td>
          <img src="image/logo/c.png" />
        </td>
      </tr>

      <tr>
        <td>
          <img src="image/logo/d.png" />
        </td>
        <td>
          <img src="image/logo/e.png" />
        </td>
        <td>
          <img src="image/logo/f.png" />
        </td>
      </tr>
    </table>
    <br /><br />

    <img src="image/home/h1.png" style="width: 100%" />

    <br /><br /><br /><br />
    <form class="newsform">
      <label for="email">Subscribe to our Newsletter</label>
      <input
        type="email"
        value=""
        name="email"
        placeholder="Email Address"
        required
      />
      <input type="submit" value="Subscribe" name="subscribe" />
    </form>
    <br /><br /><br /><br />

    <h1 align="center" style="color: #e8c301">TRENDING PRODUCTS!</h1>
    <div class="container1">
      <div class="box">
        <div class="details">
          <img src="image/iphone/12purple.png" class="product" />
        </div>
      </div>

      <div class="box">
        <div class="details">
          <img src="image/iwatch/3nike.png" class="product" />
        </div>
      </div>

      <div class="box">
        <div class="details">
          <img src="image/mac/new.png" class="product" />
        </div>
      </div>

      <div class="box">
        <div class="details">
          <img src="image/ipad/pd.png" class="product" />
        </div>
      </div>

      <div class="box">
        <div class="details">
          <img src="image/iwatch/6pride.png" class="product" />
        </div>
      </div>
    </div>
    <br /><br /><br /><br />

    <img class="mySlides" src="image/home/1.png" width="100%" />
    <img class="mySlides" src="image/home/2.png" width="100%" />
    <img class="mySlides" src="image/home/3.png" width="100%" />
    <img class="mySlides" src="image/home/4.png" width="100%" />

    <br /><br /><br /><br />
    <img src="image/home/black.png" style="width: 100%" />
    <br /><br />

    <script>
      var slideIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
          slideIndex = 1;
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(carousel, 5000); // Change image every 2 seconds
      }
    </script>

    <br /><br /><br /><br />
    <!-- FOOTER START -->
    <div class="footer">
  <div class="col">
    <h2>Shop By Product</h2>
    <ul>
      <li><a href="iphone.php">iPhone</a></li>
      <li><a href="ipad.php">iPad</a></li>
      <li><a href="mac.php">Mac</a></li>
      <li><a href="iwatch.php">iWatch</a></li>
    </ul>
  </div>
  <div class="col">
    <h2>More</h2>
    <ul>
      <li><a href="AboutUs.php">About Us</a></li>
     	<li><a href="ContactUs.php">Contact Us</a></li>
		<li><a href="FAQ.php">FAQ</a></li>
		<li><a href="TAC.php">Terms & Conditions</a></li>
		<li><a href="PrivacyPolicy.php"> Privacy Policy</a></li>
    </ul>
  </div>
  <div class="col">
    <h2>Branches</h2>
    <ul>
      <li>Jaffna</li>
      <li>Colombo</li>
      <li>Kilinochchi</li>
      <li>Vavuniya</li>
      <li>Trincomalee</li>
    </ul>
  </div>
	<div class="clearfix"></div>
</div>

    <!-- END OF FOOTER -->
  </body>
</html>

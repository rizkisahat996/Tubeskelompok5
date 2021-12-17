<?php
include "layout/header.php";

?>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../akun/logout-user.php">Logout</a>
        </div>
    </div>
</div>
</div>
  <!-- Banner Component -->
  <div class="container my-5 border px-2 py-2 bg-light">

    <div class="row hero-icon">

      <!-- Hero-section -->
      <div class="col-lg-5">
        <div class=" container-fluid hero px-4 py-4">
          <h2 class="my-3">Looking for a Good Phone ?</h3>
            <p class="my-1"> </p>
        </div>
      </div>

      <!-- carousel -->
      <div class="col-lg-7 px-4 py-4 d-none d-md-block">
        <div class="banner my-2">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="pict/iphone.jpg" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="pict/realme.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="pict/samsung2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Category -->
  <div class="container bg-light px-2 pb-4 my-4 ">
    <div class="container-fluid category-food px-4 py-2">
      <h3 class="category-title ">Category</h3>
    </div>
    <div class="row px-4">
      <div class="col-lg-3 col-sm-6 py-2">
        <div class="category-card my-2">
          <img src="pict/logoiphone.jpg" alt="Beefburger" class="mx-auto">
          <a href="#iphone" class="mx-auto my-2">
            <h5>iPhone</h5>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 py-2">
        <div class="category-card my-2">
          <img src="pict/logosamsung.png" alt="Mian-Dish" class="mx-auto">
          <a href="#samsung" class="mx-auto my-2">
            <h5>SAMSUNG</h5>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 py-2">
        <div class="category-card my-2">
          <img src="pict/logoxiaomi.png" alt="Pizza" class="mx-auto">
          <a href="#xiaomi" class="mx-auto my-2">
            <h5>Xiaomi</h5>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 py-2">
        <div class="category-card my-2">
          <img src="pict/logooppo.png" alt="Exotic-Drink" class="mx-auto">
          <a href="#oppo" class="mx-auto my-2">
            <h5>OPPO</h5>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 py-2">
        <div class="category-card my-2">
          <img src="pict/comingsoon.jpg" alt="ComingSoon" class="mx-auto">
          <a href="" class="mx-auto my-2">
            <h5>Coming Soon</h5>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 py-2">
        <div class="category-card my-2">
          <img src="pict/comingsoon.jpg" alt="ComingSoon" class="mx-auto">
          <a href="" class="mx-auto my-2">
            <h5>Coming Soon</h5>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 py-2">
        <div class="category-card my-2">
          <img src="pict/comingsoon.jpg" alt="ComingSoon" class="mx-auto">
          <a href="" class="mx-auto my-2">
            <h5>Coming Soon</h5>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 py-2">
        <div class="category-card my-2">
          <img src="pict/comingsoon.jpg" alt="ComingSoon" class="mx-auto">
          <a href="" class="mx-auto my-2">
            <h5>Coming Soon</h5>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- IPhone -->
  <div class="container food-section bg-light px-2 py-4 my-5">
    <div class="container-fluid category-food px-4 py-2">
      <a href="foods.html">
        <h3 class="food-title " id="iphone">iPhone</h3>
      </a>
    </div>

    <div class="container-fluid px-4 card-container">
      <div class="row" id="iphone-item">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/iphone13promax.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/iphone13promax.php" class="mx-auto">iPhone 13 Pro Max</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>240g, 7.7mm thickness</li>
                <li>iOS 15, up to iOS 15.1</li>
                <li>128GB/256GB/1TB storage, no card slot</li>
              </ul><br>
              <a class="card-btn" href="hp/iphone13promax.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/iphone12promax.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/iphone12promax.php" class="mx-auto">iPhone 12 Pro Max</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>228g, 7.4mm thickness</li>
                <li>iOS 14.1, up to iOS 15.1</li>
                <li>128GB/256GB/512GB storage, no card slot</li>
              </ul>
              <a class="card-btn" href="hp/iphone12promax.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/apple-iphone-11-pro-.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/iphone11promax.php" class="mx-auto">iPhone 11 Pro Max</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>226g, 8.1mm thickness</li>
                <li>iOS 13, up to iOS 15.1</li>
                <li>64GB/256GB/512GB storage, no card slot</li>
              </ul><br>
              <a class="card-btn" href="hp/iphone11promax.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/apple-iphone-xs-max-new1.png" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/iphonexsmax.php" class="mx-auto">iPhone XS Max</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>208g, 7.7mm thickness</li>
                <li>iOS 12, up to iOS 15.1</li>
                <li>64GB/256GB/512GB storage, no card slot</li>
              </ul><br>
              <a class="card-btn" href="hp/iphonexsmax.php">View</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SAMSUNG -->
  <div class="container food-section bg-light px-2 py-4 my-5">
    <div class="container-fluid category-food px-4 py-2">
      <a href="drinks.html">
        <h3 class="food-title " id="samsung">SAMSUNG</h3>
      </a>
    </div>
    <div class="container-fluid px-4 card-container">
      <div class="row" id="samsung-item">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/samsung-galaxy-s21-ultra-5g-4.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/samsunggalaxys21.php" class="mx-auto">Samsung Galaxy S21 Ultra 5G</a>
              </h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>227g (Sub6), 229g (mmWave), 8.9mm thickness</li>
                <li>Android 11, One UI 3.1</li>
                <li>128GB/256GB/512GB storage, no card slot</li>
              </ul>
              <a class="card-btn" href="hp/samsunggalaxys21.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/samsung-galaxy-s20-ultra-10-.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/samsunggalaxys20.php" class="mx-auto">Samsung Galaxy S20 Ultra 5G</a>
              </h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>222g, 8.8mm thickness</li>
                <li>Android 10, up to Android 11, One UI 3.0</li>
                <li>128GB/256GB/512GB storage, microSDXC</li>
              </ul><br>
              <a class="card-btn" href="hp/samsunggalaxys20.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/galaxy-z-flip3-1.jpg" style="height: 209px;" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/samsungflip3.php" class="mx-auto">Samsung Galaxy Z Flip3 5G</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>183g, 6.9mm thickness</li>
                <li>Android 11, up to Android 12, One UI 4.0</li>
                <li>128GB/256GB storage, no card slot</li>
              </ul>
              <a class="card-btn" href="hp/samsungflip3.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/samsung-galaxy-a52s-5g_auto_x2.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/samsunga52s.php" class="mx-auto">Samsung Galaxy A52s 5G</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>189g, 8.4mm thickness</li>
                <li>Android 11, One UI 3.1</li>
                <li>128GB/256GB storage, microSDXC</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/samsunga52s.php">View</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- xiaomi -->
  <div class="container food-section bg-light px-2 py-4 my-5">
    <div class="container-fluid category-food px-4 py-2">
      <a href="foods.html">
        <h3 class="food-title " id="xiaomi">xiaomi</h3>
      </a>
    </div>
    <div class="container-fluid px-4 card-container">
      <div class="row" id="realme-item">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/xiaomi-mi11-ultra-5g-k1_auto_x2.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/mi11ultra.php" class="mx-auto">Xiaomi Mi 11 Ultra</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>234g, 8.4mm thickness</li>
                <li>Android 11, MIUI 12.5</li>
                <li>256GB/512GB storage, no card slot</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/mi11ultra.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/xiaomi-poco-x3-pro-_auto_x2.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/pocox3pro.php" class="mx-auto">Xiaomi Poco X3 Pro</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>215g, 9.4mm thickness</li>
                <li>Android 11, MIUI 12.5 for POCO</li>
                <li>128GB/256GB storage, microSDXC</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/pocox3pro.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/xiaomi-redmi-note11-pro_auto_x2.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/redminote11pro.php" class="mx-auto">Xiaomi Redmi Note 11 Pro</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>207g, 8.3mm thickness</li>
                <li>Android 11, MIUI 12.5</li>
                <li>128GB/256GB storage, no card slot</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/redminote11pro.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/xiaomi-mi-10t-5g-pro.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/mi10tpro.php" class="mx-auto">Xiaomi Mi 10T Pro 5G</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>218g, 9.3mm thickness</li>
                <li>Android 10, up to Android 11, MIUI 12.5</li>
                <li>128GB/256GB storage, no card slot</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/mi10tpro.php">View</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- OPPO -->
  <div class="container food-section bg-light px-2 py-4 my-5">
    <div class="container-fluid category-food px-4 py-2">
      <a href="foods.html">
        <h3 class="food-title " id="oppo">OPPO</h3>
      </a>
    </div>
    <div class="container-fluid px-4 card-container">
      <div class="row" id="realme-item">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/oppo-reno7-pro-r.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/opporeno7.php" class="mx-auto">Oppo Reno7 Pro 5G</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>180g, 7.5mm thickness</li>
                <li>Android 11, ColorOS 12</li>
                <li>256GB storage, no card slot</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/opporeno7.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/oppo-reno6-5g.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/pocox3pro.php" class="mx-auto">Oppo Reno6 5G</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>182g, 7.6mm thickness</li>
                <li>Android 11, ColorOS 11.3</li>
                <li>128GB/256GB storage, no card slot</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/pocox3pro.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/oppo-a95.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/oppoa95.php" class="mx-auto">Oppo A95</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>175g, 8mm thickness</li>
                <li>Android 11, ColorOS 11.1</li>
                <li>128GB storage, microSDXC</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/oppoa95.php">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2" style="width: 100%;">
            <img src="pict/oppo-a54.jpg" class="card-img-top iphone-img" alt="">
            <div class="card-body">
              <h5 class="card-title"><a href="hp/oppoa54.php" class="mx-auto">Oppo A54</a></h5>
              <p>
              <ul class="specs-spotlight-features" style="overflow:hidden; font-size: small;">
                <li>192g, 8.4mm thickness</li>
                <li>Android 10, ColorOS 7.2</li>
                <li>64GB/128GB storage, microSDXC</li>
              </ul>
              <br>
              <a class="card-btn" href="hp/oppoa54.php">View</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>

   

      </div>

    </div>
  </section>

  <?php
include "layout/footer.php";
?>
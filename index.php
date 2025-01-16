<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/New.css">
    <link rel="stylesheet" href="CSS/login.css">
    <title>The Mobile</title>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="row">
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js">

    </script>
    <header>
      <div class="header">
        <div class="container">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
          <div class="full">
              <div class="center-desk">
                  <div class="logo">
                      <h2><b>The Mobile Phone</b></h2>
                  </div>
              </div>
          </div>
        </div>

        <!--navbar-->
        <div class="nav1">
          <!--<nav class="navbar navbar-expand-lg bg-body-tertiary">-->
            <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#newrelease">New Released Phones</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Models
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="models_sam.php">Samsung</a></li>
                      <li><a class="dropdown-item" href="models_iphone.php">iPhone</a></li>
                      <!--<li><hr class="dropdown-divider"></li>-->
                      <li><a class="dropdown-item" href="models_redmi.php">Redmi</a></li>
                    </ul>
                  </li>
                  <!--login Button-->
                  <li class="nav-item">
                    <a class="nav-link"  href="signup_login/login.php">Sign In</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

          </div>

        <br>


 <!--first page-->
  <div class="row">
    <div class="firstpage card text-bg-dark">
        <img src="banner.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h1 class="card-title1" align="center">All New Phones</h1>
          <p class="card-text" align="center">up to 25% Flat Sale</p>
          <p class="card-text" align="center"><small>Offer Available Only This Month</small></p>
          <div class="buy-bt">
            <div class="vertical-center">
              <a href="#01" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
  </div>


<br><br><br>

  <!--slide page-->
  <div class="row">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Img/phone1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Img/phone2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Img/phone3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>

  <br>
  <hr>
  <br>

  <div class="row">
    <p></p>
    <h1 id="newrelease">New Released Phones</h1>
  </div>
  <br><br>

<!-- Products Group-->
<div class="row-products">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="products card h-100">
      <img src="Img/Apple-iPhone-16.jpg" class="card-img-top" alt="Iphone 16">
      <div class="card-body">
        <h5 class="card-title">Iphone 16</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/iphone15.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Iphone 15</h5>
        <p class="card-text">Display: 6.1-inch (15) Super Retina XDR OLED<br>
          Chip: A16 Bionic<br>
          Camera: Dual 48MP main + 12MP ultra-wide<br>
          Battery: 20 hours (15), 26 hours (15 Plus) video playback<br>
          Storage: 128GB, 256GB, 512GB<br>
          Build: Aluminum frame, Ceramic Shield front<br><br>
          Rs.250000.00
        </p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/samsung_S24.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Samsung S23</h5>
        <p class="card-text">Display: 6.1" Dynamic AMOLED 2X, 120Hz, FHD+<br>
          Chipset: Snapdragon 8 Gen 2 (USA/China) or Exynos 2200 (Global)<br>
          Storage: 128 GB or 256 GB (no microSD)<br>
          Cameras:<br>
          Rear: 50 MP (main), 12 MP (ultrawide), 10 MP (telephoto, 3x zoom)<br>
          Front: 12 MP<br>
          Battery: 3,900 mAh, 25W fast charging<br>
          Other: IP68 water resistance, 5G, no headphone jack, stereo speakers<br>
          <br>
          Rs.175000.00
        </p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="products card h-100">
      <img src="Img/samsung_S22n.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Samsung S22</h5>
        <p class="card-text">Display: 6.1" Dynamic AMOLED 2X, 120Hz, FHD+<br>
          Chipset: Snapdragon 8 Gen 1 (USA/China) or Exynos 2200 (Global)<br>
          Storage: 128 GB or 256 GB (no microSD)<br>
          Cameras:<br>
          Rear: 50 MP (main), 12 MP (ultrawide), 10 MP (telephoto, 3x zoom)<br>
          Front: 10 MP<br>
          Battery: 3,700 mAh, 25W fast charging<br>
          Other: IP68 water resistance, 5G, stereo speakers, no headphone jack<br><br>
          Rs.139000.00
        </p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/galaxy-s24-ultra-1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy S24 Ultra</h5>
        <p class="card-text">6.8" QHD+ Dynamic AMOLED display<br>
Snapdragon 8 Gen 3 processor<br>
Up to 12GB RAM and 1TB storage<br>
200MP main camera with enhanced AI features<br>
5000mAh battery<br>
S Pen support</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="products card h-100">
      <img src="Img/S24.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy S24</h5>
        <p class="card-text">6.2" FHD+ Dynamic AMOLED display<br>
Snapdragon 8 Gen 3 processor<br>
8GB RAM and up to 256GB storage<br>
50MP main camera<br>
4000mAh battery</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/Z fold5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy Z Fold5</h5>
        <p class="card-text">7.6" main display when unfolded<br>
6.2" cover display<br>
Snapdragon 8 Gen 2 processor<br>
12GB RAM<br>
Improved hinge design.</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/Samsung-Galaxy-Z-Flip-5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy Z Flip5</h5>
        <p class="card-text">6.7" main display when unfolded<br>
3.4" cover display<br>
Snapdragon 8 Gen 2 processor<br>
8GB RAM.</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
</div>
    </div>
  </div>
</div>
</div>

<div class="row-products">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="products card h-100">
      <img src="Img/Samsung Galaxy A55-500x500.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy A55 5Gs</h5>
        <p class="card-text">6.6" Super AMOLED display<br>
Exynos 1480 processor<br>
Up to 8GB RAM, 256GB storage<br>
50MP main camera<br>
5000mAh battery<br>
IP67 water resistance.</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/A35.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy A35 5G</h5>
        <p class="card-text">6.6" Super AMOLED display<br>
Exynos 1380 processor<br>
6/8GB RAM, up to 256GB storage<br>
48MP main camera<br>
5000mAh battery</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
</div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/Samsung-Galaxy-A25-5G-Fantasy-Blue.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy A25 5G</h5>
        <p class="card-text">6.5" Super AMOLED display<br>
Exynos 1280 processor<br>
6/8GB RAM, 128GB storage<br>
50MP main camera<br>
5000mAh battery</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="products card h-100">
      <img src="Img/MBPSSM-M556BLGASLK-S-1--1730187495.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy M55 5G</h5>
        <p class="card-text">6.7" Super AMOLED display<br>
Snapdragon 7 Gen 1 processor<br>
Up to 8GB RAM, 256GB storage<br>
50MP main camera<br>
5000mAh battery</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/Samsung-Galaxy-M35-8GB-RAM-256GB-Price-In-Sri-Lanka.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy M35 5G</h5>
        <p class="card-text">6.6" Super AMOLED display<br>
MediaTek processor<br>
6GB RAM, 128GB storage<br>
50MP main camera<br>
6000mAh battery.</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/SAMSUNG-C55-CHINA1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Galaxy F55 5G</h5>
        <p class="card-text">Similar specs to A55 with market-specific variations<br>
Online exclusive availability<br>
Competitive pricing</p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
</div>
</div>

  <div class="col">
    <div class="products card h-100">
      <img src="Img/redminote13.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Redmi Note 13</h5>
        <p class="card-text">Display: 6.72" AMOLED, 120Hz<br>
          Processor: MediaTek Dimensity 6080<br>
          Camera: 50 MP (main), 13 MP front<br>
          Battery: 5,000mAh, 33W fast charging<br>
          OS: MIUI 14 based on Android 13<br><br>
          Rs.49900.00
        </p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div
</div>
  <div class="col">
    <div class="products card h-100">
      <img src="Img/redmi13c.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Redmi 13c</h5>
        <p class="card-text">Display: 6.79-inch LCD, FHD+ (90Hz)<br>
          Processor: MediaTek Helio G88<br>
          RAM: 4GB/6GB<br>
          Storage: 128GB/256GB, expandable via microSD<br>
          Cameras:<br>
          Rear: 50 MP (main), 8 MP (ultra-wide), 2 MP (macro)<br>
          Front: 8 MP<br>
          Battery: 5,000mAh, 18W fast charging<br>
          OS: MIUI 14 (Android 13)<br>
          Design: Plastic back, 198g weight<br><br>
          Rs.45999.99
        </p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>
</div>
</div>


<!-- footer -->
<br>
<br>
<div class="row">
  <h2 align="center">Contact Us</h2>
</div>
<footer style="background-color: black; color: #ddd; padding: 40px 20px; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; padding: 0 20px;">

        <!-- Newsletter Section -->
        <div style="flex: 1; min-width: 250px; margin-bottom: 20px; margin-top:20px; padding-right:10%;">
            <h4 style="color: #f39c12;">Subscribe to Our Newsletter</h4>
            <form action="/subscribe" method="POST" style="margin-top: 10px;">
                <input type="email" name="email" placeholder="Enter your email" required 
                    style="padding: 10px; width: 100%; max-width: 300px; border: none; border-radius: 5px; margin-bottom: 10px; font-size: 14px;">
                <button type="submit" style="padding: 10px 20px; background-color: #f39c12; border: none; border-radius: 5px; color: #fff; font-size: 14px; cursor: pointer;">Subscribe</button>
            </form>
        </div>

        <!-- Useful Links Section -->
        <div style="flex: 1; min-width: 250px; margin-bottom: 20px; margin-top: 20px; padding-right:15%;">
            <h4 style="color: #f39c12;">Quick Links</h4>
            <ul style="list-style: none; padding: 0;">
                <li><a href="/" style="color: #ddd; text-decoration: none; font-size: 14px;">Home</a></li>
                <li><a href="/about" style="color: #ddd; text-decoration: none; font-size: 14px;">About</a></li>
                <li><a href="/services" style="color: #ddd; text-decoration: none; font-size: 14px;">Services</a></li>
                <li><a href="/contact" style="color: #ddd; text-decoration: none; font-size: 14px;">Contact</a></li>
            </ul>
        </div>

        <!-- Social Media Section -->
        <div style="padding: 20px; text-align: center;">
            <h4 style="color: #f39c12;">Follow Us</h4>
            <div style="display: flex; justify-content: center; gap: 20px; margin-top: 5px;">
              <!-- Facebook -->
              <a href="https://facebook.com" target="_blank" style="text-decoration: none;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" style="width: 30px; height: 30px;">
              </a>
              <!-- Twitter -->
              <a href="https://twitter.com" target="_blank" style="text-decoration: none;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" style="width: 30px; height: 30px;">
              </a>
              <!-- Instagram -->
              <a href="https://instagram.com" target="_blank" style="text-decoration: none;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram" style="width: 30px; height: 30px;">
              </a>
              <!-- LinkedIn -->
              <a href="https://linkedin.com" target="_blank" style="text-decoration: none;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn" style="width: 30px; height: 30px;">
              </a>
            </div>
        </div>

    </div>

    <!-- Bottom Section: Copyright and Legal Links -->
    <div style="background-color: #333; padding: 20px 0;">
        <p style="font-size: 12px;">&copy; 2024 The Mobile Phone. All Rights Reserved. | 
            <a href="/privacy-policy" style="color: #ddd; text-decoration: none; font-size: 12px;">Privacy Policy</a> | 
            <a href="/terms" style="color: #ddd; text-decoration: none; font-size: 12px;">Terms of Service</a>
        </p>
    </div>
</footer>



    <div class="row">
      <p>
      </p>
    </div>


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="img/profile_avat.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <p><label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required></p>

      <p><label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required></p>

      <p><button type="submit">Login</button></p>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <p>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></p>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!--Script for login-->
<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


  </body>
</html>
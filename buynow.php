<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/buy.css">
</head>
<body>
  <?php
    require_once 'public/dbconnect.php';
    require_once 'public/functions.php';

    function addData($connect,$model,$fullname,$email,$address){
      try{
        $sql = "INSERT INTO buynow values('$model','$fullname','$email','$address')";
      
      $result = mysqli_query($connect,$sql);
      if($result){
        //echo "record successfully";
      }else{
        die("Error".mysqli_error($connect));
      }
      }catch(Exception $e) {
        die($e->getMessage());
      }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      //echo "Get the post request from the client";
      //$product_id = $_POST['product_id'];
      $product_name = $_POST['product_name'];
      $description = $_POST['description'];
      $price = $_POST['price'];

  }

  addData($connect,$product_id,$product_name,$description,$price);

  ?>
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
                    <a class="nav-link" href="about.html">About Us</a>
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
                    <a class="nav-link" onclick="document.getElementById('id01').style.display='block'" href="#">Login</a>
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
        <hr>

        <form>
          <div class="row">
            <div class="col-75">
              <div class="container-1">
                <form action="/action_page.php">
                  <div class="row">
                    <div class="col-50">
                      <h3>Billing Address</h3>
                      <label for="mdl"><i class="fa fa-model-card-o"></i> Model</label>
                      <input type="text" id="model" name="model" placeholder="SAMSUNG A55">
                      <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                      <input type="text" id="fname" name="firstname" placeholder="Your Name">
                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="youremail@gmail.com">
                      <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                      <input type="text" id="adr" name="address" placeholder="542 , Street">
          
                      <div class="row">
                        <div class="col-50">
                          <label for="city">City</label>
                          <input type="text" id="city" name="city" placeholder="Colombo">
                        </div>
                        <div class="col-50">
                          <label for="zip">Postal Code</label>
                          <input type="text" id="zip" name="zip" placeholder="10001">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-50">
                    <h3>Payment</h3>
                    <label for="fname">Accepted Cards</label>
                    <div class="icon-container">
                      <i class="fa fa-cc-visa" style="color:navy;"></i>
                      <i class="fa fa-cc-amex" style="color:blue;"></i>
                      <i class="fa fa-cc-mastercard" style="color:red;"></i>
                      <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
                    <label for="cname">Name on Card</label>
                    <input type="text" id="cname" name="cardname" placeholder="Card Holder Name">
                    <label for="ccnum">Credit card number</label>
                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                    <label for="expmonth">Exp Month</label>
                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
        
                    <div class="row">
                      <div class="col-50">
                        <label for="expyear">Exp Year</label>
                        <input type="text" id="expyear" name="expyear" placeholder="2025">
                      </div>
                      <div class="col-50">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" placeholder="352">
                      </div>
                    </div>
                  </div>

                  
                  <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                  </label>
                  <input type="submit" value="Continue to checkout" class="btn-1">
                </form>
              </div>
            </div>
          </div> 
        </form>

    
</body>
</html>
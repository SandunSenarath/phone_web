<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<link rel="stylesheet" href="New.css">
	<link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="head-c">
	<div class="row">
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <header>
      <div class="header">
        <div class="container">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
          <div class="full">
              <div class="center-desk">
                  <div class="logo">
                      <h2><b>The Smart Phone</b></h2>
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
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Brand</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="singup page.php">Sing Up</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Models
</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="models_sam.php">Samsung</a></li>
                      <li><a class="dropdown-item" href="models_iphone.php">iPhone</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="models_redmi.php">Redmi</a></li>
                    </ul>
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
         </div>

    <br>
    <hr>
    
    <br><br><br>
    <form action='public/contactus.php'>
    <div class="row-form" style="padding-left: 20%; padding-right: 20%">
    	<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Your Name</label>
		  <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name" name='name'>
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Contact No</label>
		  <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Phone" name='contact_no'>
		</div>
    	<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Email address</label>
		  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com" name='email'>
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
		  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='message'></textarea>
		</div>
 	</div>


  <p style="padding-left: 20%">
  <button type="reset" class="btn btn-secondary btn-sm">Clear All</button>
  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
  </p>
</from>

</body>
</html>
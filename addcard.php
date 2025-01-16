<?php
try {
  require_once "public/dbconnect.php";
  require_once "public/myfunc.php";
 // if (isset($_GET['types'])) {
    //$tids=$_GET['types'];
    //print_r($tids);
    //$items = FilterBooksByTypes($connect,$tids);
  //} else {
    $items = GetTypes($connect);
  //}
  
  
  foreach ( $books as $key => $value) {
    $image = $value['image_name'];
    $price = $value['price'];
    $name = $value['name'];
    $description=$value['description'];
?>

<!-- <div class="card float-start" style="width: 12rem; margin: 5px;">
  <img class="card-img-top img-thumbnail" src="Img/<?php echo $image; ?>" class="card-img-top" alt="<?php echo $name; ?>">
  <div class="card-body">
    <p class="card-text">Price:<?php echo $price; ?></p>
    <a href="#" class="btn btn-primary">Buy </a>
  </div>
</div> -->

<div class="row-products">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="products card h-100">
      <img src="Img/<?php echo $image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $name; ?></h5>
        <p class="card-text">
          <br>
          <?php echo $price; ?></p>
      </div>
      <div class="card-footer">
        <a href="buynow.php" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>

<?php
  } //loop close
}//try close
  catch (e) {
    echo "<h1>500 Internal error</h1>";
  }
?>
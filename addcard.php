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

<div class="card float-start" style="width: 12rem; margin: 5px;">
  <img class="card-img-top img-thumbnail" src="Img/<?php echo $image; ?>" class="card-img-top" alt="<?php echo $name; ?>">
  <div class="card-body">
    <p class="card-text">Price:<?php echo $price; ?></p>
    <a href="#" class="btn btn-primary">Buy </a>
  </div>
</div>

<?php
  } //loop close
}//try close
  catch (e) {
    echo "<h1>500 Internal error</h1>";
  }
?>
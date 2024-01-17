<?php
require_once __DIR__ . '/db/db.php';
class AnimalProduct
{
  public $cibo;
  public $cucce;
  public $giochi;

  public function __construct($_cibo, $_cucce, $_giochi)
  {
    $this->cibo = $_cibo;
    $this->cucce = $_cucce;
    $this->giochi = $_giochi;
  }

  public function get_cibo()
  {
    return $this->cibo;
  }

  public function get_cucce()
  {
    return $this->cucce;
  }

  public function get_giochi()
  {
    return $this->giochi;
  }
}

class CatProduct extends AnimalProduct
{

}
class DogProduct extends AnimalProduct
{

}

$catProduct = [];

$dogProduct = [];

foreach ($dogProduct_db as $product) {


  array_push($dogProduct, new CatProduct($product['categoria'], $product['name'], $product['src']));

}

foreach ($catProduct_db as $product) {


  array_push($catProduct, new CatProduct($product['categoria'], $product['name'], $product['src']));

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Gatti</h1>

  <?php foreach ($catProduct as $product): ?>
    <hr>
    <h2>
      <?php echo $product->get_cibo(); ?>
    </h2>
    <div>
      <ul>

        <li>
          <?php echo $product->get_cucce(); ?>
        </li>
        <img src=" <?php echo $product->get_giochi(); ?>" alt="">


      </ul>
    </div>

  <?php endforeach; ?>


  <h1>Cani</h1>

  <?php foreach ($dogProduct as $product): ?>
    <hr>
    <h2>
      <?php echo $product->get_cibo(); ?>
    </h2>
    <div>
      <ul>

        <li>
          <?php echo $product->get_cucce(); ?>
        </li>
        <img src=" <?php echo $product->get_giochi(); ?>" alt="">


      </ul>
    </div>

  <?php endforeach; ?>

</body>

</html>
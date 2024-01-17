<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';

// Category
$dog = new Category('Cani', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('Gatti', '<i class="fa-solid fa-cat"></i>');

// Product
$product = new Product(100, 'Prova Prodotto', $dog, 10, '');

// Food Animals 

$food_cani = new Food(10, 'croccantini', $dog, 10, 'https://rep.grupposme.net/RepAP?code=D1446868&skey=968356899d00369a281ad152d81484e5&resize=200');
$food_cani->set_ingredients('carne');

$food_gatti = new Food(40, 'croccantini', $cat, 15, 'https://arcaplanet.vtexassets.com/arquivos/ids/286717/12538616_1.jpg?v=638215445264130000');
$food_gatti->set_ingredients('pollo');


// Games Animals
$game_cani = new Game(20, 'Peluche', $dog, 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSibpknQ36BCOGf9BBXQUOZTv4an7yNZTnq-Q&usqp=CAU');
$game_cani->set_material('stoffa');

$game_gatti = new Game(80, 'palla', $cat, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQesbCFW75DAot-_2d0rZeWiuuXMtf9CDiCjh09KtHX7BHcBprbSY3LLN8dbuTagueEUEQ&usqp=CAU');
$game_gatti->set_material('Lana');

$products = [$food_cani, $food_gatti, $game_cani, $game_gatti];
// var_dump($product, $food_cani, $food_gatti);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php shop</title>

  <!-- bootstrasp -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- bootstrasp -->

  <!-- font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- font Awesome -->

</head>

<body>
  <div class="container">
    <h1 class=" text-center my-4">Php Shop</h1>
    <div class=" row">
      <?php foreach ($products as $product): ?>
        <div class="col-3">
          <div class="card text-center">
            <div class="card-body">
              <h4 class="card-title text-uppercase">
                <?php echo $product->get_name() ?>
              </h4>
              <img src="<?php echo $product->get_image() ?>" class="card-img-top" alt="...">
              <p class="card-text">
                Categoria:
                <?php echo $product->get_category()->get_icon() ?>
                <?php echo $product->get_category()->get_name() ?>
              </p>
              <p class="card-text">
                Prezzo:
                <?php echo $product->get_price() ?> €.
              </p>

            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>
<?php
  include __DIR__.'/database/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>php-oop-2</title>
</head>

<body>
  <div class="container-fluid text-center mt-5">
    <h1 class="text-success">Animal store</h1>
  </div>
  <div class="container d-flex flex-wrap justify-content-around mt-5 gap-5 pb-5">
    <?php foreach($products as $product){ ?>
        <div class="card px-0 pb-0" style="width: 18rem;">
          <img src="<?php echo $product->image; ?>" class="card-img-top" alt="img not found">
          <div class="card-body d-flex flex-column gap-3">
            <h5 class="card-title"><?php echo $product->name ?></h5>
            <div class="d-flex gap-2 text-success-emphasis">
              <?php echo $product->getIcon(); ?>
              <?php 
                foreach(Category::$animalsIcon as $animal => $icon)
                  if($animal === $product->category->type)
                      echo $icon;
              ?>
            </div>
            <p class="card-text mb-0"><?php echo $product->price ?>€</p>
            <p class="card-text">
              <?php 
                switch(get_class($product)){
                  case 'Food':
                    echo "Ingredienti: ".implode(', ', $product->ingredients);
                    break;
                  case 'Toy':
                    echo "Materiali: ".implode(', ', $product->materials);
                    break;
                  case 'Cage':
                    echo "Dimensioni: ".$product->dimensions;
                    break;
                }
              ?>
            </p>
            <div class="d-flex justify-content-center">
              <a href="#" class="btn btn-success">Purchase</a>
            </div>
          </div>
        </div>
    <?php } ?>
  </div>
</body>

</html>
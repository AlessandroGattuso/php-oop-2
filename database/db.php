<?php
  include __DIR__.'../../models/product.php';
  include __DIR__.'../../models/product_types/food.php';
  include __DIR__.'../../models/product_types/cage.php';
  include __DIR__.'../../models/product_types/game.php';
  
  $products = [
    new Food('Mangime per uccelli', 'bird', 20),
    new Food('Mangime per pesci', 'fish', 12),
    new Game('Gomitolo per gatti', 'cat', 30),
    new Game('Castello per pesci', 'fish', 30),
    new Game('Bastone per cani', 'dog', 25),
    new Cage('Gabbia per cani', 'dog', 100),
    new Cage('Gabbia per gatti', 'cat', 150),
    new Cage('Gabbia per uccelli', 'bird', 75),
  ];

?>
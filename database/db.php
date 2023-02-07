<?php
  include __DIR__.'../../models/category.php';
  include __DIR__.'../../models/product.php';
  include __DIR__.'../../models/product_types/food.php';
  include __DIR__.'../../models/product_types/cage.php';
  include __DIR__.'../../models/product_types/game.php';
  
  $products = [
    new Food('Mangime per uccelli', new Category('bird'), 20),
    new Food('Mangime per pesci', new Category('fish'), 12),
    new Game('Gomitolo per gatti', new Category('cat'), 30),
    new Game('Castello per pesci', new Category('fish'), 30),
    new Game('Bastone per cani', new Category('dog'), 25),
    new Cage('Gabbia per cani', new Category('dog'), 100),
    new Cage('Gabbia per gatti', new Category('cat'), 150),
    new Cage('Gabbia per uccelli', new Category('bird'), 75),
  ];

?>
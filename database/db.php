<?php
  include __DIR__.'../../models/category.php';
  include __DIR__.'../../models/product.php';
  include __DIR__.'../../models/product_types/food.php';
  include __DIR__.'../../models/product_types/cage.php';
  include __DIR__.'../../models/product_types/Toy.php';
  
  $products = [
    new Food('Mangime per uccelli', new Category('bird'), 20, 'asparago', 'riso'),
    new Food('Mangime per pesci', new Category('fish'), 12, 'manzo', 'nutrienti addizionali'),
    new Toy('Gomitolo per gatti', new Category('cat'), 30, 'lana', 'fibre di legno'),
    new Toy('Castello per pesci', new Category('fish'), 30, 'plastica dura', 'cartone'),
    new Toy('Corda per cani', new Category('dog'), 25, 'fibre di legno', 'plastica'),
    new Cage('Gabbia per cani', new Category('dog'), 100, '90cm x 180 cm'),
    new Cage('Gabbia per gatti', new Category('cat'), 150, '50cm x 100 cm'),
    new Cage('Gabbia per uccelli', new Category('bird'), 75, '50cm x 50cm'),
  ];

  shuffle($products);

?>
<?php
  include __DIR__.'../../models/category.php';
  include __DIR__.'../../models/product.php';
  include __DIR__.'../../models/product_types/food.php';
  include __DIR__.'../../models/product_types/cage.php';
  include __DIR__.'../../models/product_types/Toy.php';
  
  $image = 'https://picsum.photos/300/200';

  $products = [
    new Food('Mangime per uccelli', new Category('bird'), 20, $image ,'asparago', 'riso'),
    new Food('Mangime per pesci', new Category('fish'), 12, $image ,'manzo', 'nutrienti addizionali'),
    new Toy('Gomitolo per gatti', new Category('cat'), 30, $image, 'lana'),
    new Toy('Castello per pesci', new Category('fish'), 30, $image, 'plastica dura', 'cartone'),
    new Toy('Corda per cani', new Category('dog'), 25, $image, 'fibre di legno', 'plastica'),
    new Cage('Gabbia per cani', new Category('dog'), 100, $image, '90cm x 180 cm'),
    new Cage('Gabbia per gatti', new Category('cat'), 150, $image, '50cm x 100 cm'),
    new Cage('Gabbia per uccelli', new Category('bird'), 75, $image, '50cm x 50cm'),
  ];

  shuffle($products);

?>
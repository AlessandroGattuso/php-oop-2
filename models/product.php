<?php

  class Product{

    public $type, $price;
    public static $animalsIcon = [
      'bird' => '<i class="fa-solid fa-dove"></i>',
      'cat' => '<i class="fa-solid fa-cat"></i>',
      'dog' => '<i class="fa-solid fa-dog"></i>',
      'fish' => '<i class="fa-solid fa-fish"></i>'
    ];

    function __construct($_type, $_price){
      $this->type = $_type;
      $this->price = $_price;
    }
  }

?>
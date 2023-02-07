<?php

  class Product{

    public $price, $category;

    function __construct(Category $_category, $_price){
      $this->category = $_category;
      $this->price = $_price;
    }
  }

?>
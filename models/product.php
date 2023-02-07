<?php

  class Product{

    public $price, $category;

    function __construct($_category, $_price){
      $this->category = $_category;
      $this->price = $_price;
    }
  }

?>
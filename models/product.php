<?php

  class Product{

    public $name, $price, $category, $image;

    function __construct($_category, $_price, $_image, $_name){
      $this->category = $_category;
      $this->price = $_price;
      $this->name = $_name;
      $this->image = $_image;
    }
  }

?>
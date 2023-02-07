<?php
  
 class Cage extends Product{
   public $name, $dimensions;
   public static $icon = '<i class="fa-solid fa-house"></i>';

   public function __construct($name, $category, $price, $dimensions){
       parent::__construct($category, $price);
       $this->name = $name;
       $this->dimensions = $dimensions;
   }

   public function getIcon(){
    return self::$icon;
  }
 }

?>
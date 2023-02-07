<?php
  
 class Cage extends Product{
   public $dimensions;
   public static $icon = '<i class="fa-solid fa-house"></i>';

   public function __construct($name, $category, $price, $image ,$dimensions){
       parent::__construct($category, $price, $image, $name);
       $this->dimensions = $dimensions;
   }

   public function getIcon(){
    return self::$icon;
  }
 }

?>
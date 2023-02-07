<?php
  
 class Toy extends Product{
   public $materials;
   public static $icon = '<i class="fa-solid fa-futbol"></i>';
  
   public function __construct($name, $category, $price, $image, ...$_materials){
       parent::__construct($category, $price, $image, $name);
       $this->materials = $_materials;
   }

   public function getIcon(){
      return self::$icon;
   }
 }

?>
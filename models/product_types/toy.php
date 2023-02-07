<?php
  
 class Toy extends Product{
   public $name, $materials;
   public static $icon = '<i class="fa-solid fa-futbol"></i>';
  
   public function __construct($name, $category, $price, ...$_materials){
       parent::__construct($category, $price);
       $this->name = $name;
       $this->materials = $_materials;
   }

   public function getIcon(){
      return self::$icon;
   }
 }

?>
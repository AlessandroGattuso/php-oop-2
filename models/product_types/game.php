<?php
  
 class Game extends Product{
   public $name;
   public static $icon = '<i class="fa-solid fa-futbol"></i>';

   public function __construct($name, $category, $price){
       parent::__construct($category, $price);
       $this->name = $name;
   }

   public function getIcon(){
      return self::$icon;
   }
 }

?>
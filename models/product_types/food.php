<?php 

  class Food extends Product{
    public $ingredients;
    public static $icon = '<i class="fa-solid fa-bowl-food"></i>';

    public function __construct($name, $category, $price, $image, ...$_ingredients){
        parent::__construct($category, $price, $image, $name);
        $this->ingredients = $_ingredients;
    }

    public function getIcon(){
      return self::$icon;
    }
  }

?>
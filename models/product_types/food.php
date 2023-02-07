<?php 

  class Food extends Product{
    public $name, $ingredients;
    public static $icon = '<i class="fa-solid fa-bowl-food"></i>';

    public function __construct($name, $category, $price, ...$_ingredients){
        parent::__construct($category, $price);
        $this->name = $name;
        $this->ingredients = $_ingredients;
    }

    public function getIcon(){
      return self::$icon;
    }
  }

?>
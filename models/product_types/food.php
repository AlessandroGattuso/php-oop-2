<?php 

  class Food extends Product{
    public $name;
    public static $icon = '<i class="fa-solid fa-bowl-food"></i>';

    public function __construct($name, $category, $price){
        parent::__construct($category, $price);
        $this->name = $name;
    }

    public function getIcon(){
      return self::$icon;
    }
  }

?>
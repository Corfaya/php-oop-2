<?php
    include_once __DIR__."/Category.php";
     class Item
     {
         public $image;
         public $title;
         public $price;
         public $category;
         public $type;
 
         function __construct($_image, $_title, $_price, Category $_category, $_type)
         {
             $this->image = $_image;
             $this->title = $_title;
             $this->price = $_price;
             $this->category = $_category;
             $this->type = $_type;
         }
 
         public function getInfos()
         {
             return $this->image . " " . $this->title . " " . $this->price . "€ " . $this->category->icon ." ". $this->type;
         }
     }
?>
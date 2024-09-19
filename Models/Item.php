<?php
    include_once __DIR__."/Category.php";
     class Item
     {
         public $image;
         public $title;
         public $price;
         public $category;
         public $type;
         public $description;
 
         function __construct($_image, $_title, $_price, Category $_category, $_type, $_description)
         {  
            if (!is_int($this->price) || $this->price <= 0){
                throw new Exception("Il prezzo non è valido!");
            }
            
            $this->image = $_image;
            $this->title = $_title;
            $this->price = $_price;
            $this->category = $_category;
            $this->type = $_type;
            $this->description = $_description;
         }
 
         public function getInfos()
         {
             return "Categoria: ".$this->type;
         }
     }
?>
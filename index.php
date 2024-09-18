<?php
    class Category {
        public $icon;
        public $animal;

        function __construct($_icon, $_animal)
        {
            $this->icon = $_icon;
            $this->animal = $_animal;
        }
    }
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
            return $this->image . " " . $this->title . " " . $this->price . "€ " . $this->category->animal ." ". $this->type;
        }
    }

    $dog = new Category("icona", "cane");
    $cat = new Category("icona", "gatto");

    var_dump($dog);
    var_dump($cat);

    $dogFood = new Item("https://placehold.co/600x400?text=Cibo+cani", "Croccantini per cani", "12,50", $dog, "cibo");
    $catToy = new Item("https://placehold.co/600x400?text=Gioco+gatti", "Topo peluche", "1,99", $cat, "gioco");
    var_dump($dogFood->getInfos());
    var_dump($catToy->getInfos());
?>
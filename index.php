<?php
    class Item {
        public $image;
        public $title;
        public $price;
        public $category_icon; // later from Category
        public $type;

        function __construct($_image, $_title, $_price, $_category_icon, $_type)
        {
            $this->image = $_image;
            $this->title = $_title;
            $this->price = $_price;
            $this->category_icon = $_category_icon;
            $this->type = $_type;
        }

        public function getInfos() {
            return $this->image." ".$this->title." ".$this->price." ".$this->category_icon." ".$this->type;
        }
    }

    $dogFood = new Item("https://placehold.co/600x400?text=Cibo+cani", "Croccantini per cani", "12,50", "icona-cane", "Cibo");
    $catToy = new Item("https://placehold.co/600x400?text=Gioco+gatti", "Topo peluche", "1,99", "icona", "Gioco");

    var_dump($dogFood->getInfos());
    var_dump($catToy->getInfos());
?>
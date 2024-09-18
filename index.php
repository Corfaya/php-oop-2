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

    class Food extends Item {
        public $description;
        public $isForSterilised;


        public function __construct($_image, $_title, $_price, Category $_category, $_type, $_description, $_isForSterilised)
        {
            parent::__construct($_image, $_title, $_price, $_category, $_type);
            $this->description = $_description;
            $this->isForSterilised = $_isForSterilised;
        }

        public function getOptionSterility() {
            if($this->isForSterilised) {
                return "Adatto ad animali sterilizzati.";
            } else {
                return "Non adatto ad animali sterilizzati.";
            }
        }

        public function getInfos() {
            return $this->description." ".$this->getOptionSterility();
        }
    }

    // objects from Category
    $dog = new Category("icona", "cane");
    $cat = new Category("icona", "gatto");
    var_dump($dog);
    var_dump($cat);

     // object from Food
    $catFood = new Food("https://placehold.co/600x400?text=Cibo+gatti", "Umido monoproteico", "18,99", $cat, "cibo", "Umido completo e bilanciato. Ricette preparate rispondendo ad esifenze specifiche per gatti sterilizzati.", true);
    var_dump($catFood->getInfos());

    // objects from Item
    $dogFood = new Item("https://placehold.co/600x400?text=Cibo+cani", "Croccantini per cani", "12,50", $dog, "cibo");
    $catToy = new Item("https://placehold.co/600x400?text=Gioco+gatti", "Topo peluche", "1,99", $cat, "gioco");
    var_dump($dogFood->getInfos());
    var_dump($catToy->getInfos());
?>
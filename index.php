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

    class Toy extends Item {
        public $description;


        public function __construct($_image, $_title, $_price, Category $_category, $_type, $_description)
        {
            parent::__construct($_image, $_title, $_price, $_category, $_type);
            $this->description = $_description;
        }

        public function getInfos() {
            return $this->description;
        }
    }

    class Kennel extends Item {
        public $description;
        public $size;
        public $isIndoor;

        public function __construct($_image, $_title, $_price, Category $_category, $_type, $_description, $_size, $_isIndoor)
        {
            parent::__construct($_image, $_title, $_price, $_category, $_type);
            $this->description = $_description;
            $this->size = $_size;
            $this->isIndoor = $_isIndoor;
        }

        public function getInfos() {
            $inOrOut = $this->isIndoor ? "SOLO PER INTERNI" : "SOLO PER ESTERNI";
            return $this->description." ".$this->size." cm. $inOrOut";
        }
    }

    // objects from Category
    $dog = new Category("icona", "cane");
    $cat = new Category("icona", "gatto");
    var_dump($dog);
    var_dump($cat);

    // object from Food
    $catFood = new Food("https://placehold.co/600x400?text=Cibo+gatti", "Umido monoproteico", "18,99", $cat, "cibo", "Umido completo e bilanciato. Ricette preparate rispondendo ad esigenze specifiche per gatti sterilizzati.", true);
    var_dump($catFood->getInfos());

    // object from Toy
    $dogToy = new Toy("https://placehold.co/600x400?text=Gioco+cani", "Osso antimicrobico", "4,00", $dog, "gioco", "Giocattolo da masticazione. Nel giocattolo sono presenti additivazioni antimicrobiche con efficacia del 99,9%.");
    var_dump($dogToy->getInfos());

    // object from Kennel
    $dogHouse = new Kennel("https://placehold.co/600x400?text=Cuccia+cane", "Cuccia rettangolare", "35,00", $dog, "cuccia", "Cuccia dal design moderno e leggero, di forma rettangolare con cuscino estraibile e imbottita di fibra di poliestere.", "100x900", true);
    var_dump(($dogHouse->getInfos()));

    // objects from Item
    $dogFood = new Item("https://placehold.co/600x400?text=Cibo+cani", "Croccantini per cani", "12,50", $dog, "cibo");
    $catToy = new Item("https://placehold.co/600x400?text=Gioco+gatti", "Topo peluche", "1,99", $cat, "gioco");
    var_dump($dogFood->getInfos());
    var_dump($catToy->getInfos());
?>
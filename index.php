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
            return $this->image . " " . $this->title . " " . $this->price . "€ " . $this->category->icon ." ". $this->type;
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
            return parent::getInfos()." ".$this->description." ".$this->getOptionSterility();
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
            return parent::getInfos()." ".$this->description;
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
            return parent::getInfos()." ".$this->description." ".$this->size."cm. $inOrOut";
        }
    }

    // objects from Category (dog and cat)
    $dog = new Category("🐕", "cane");
    $cat = new Category("🐈", "gatto");

    // Objects
    $catFood = new Food("https://placehold.co/600x400?text=Cibo+gatti", "Umido monoproteico", "18,99", $cat, "cibo", "Umido completo e bilanciato. Ricette preparate rispondendo ad esigenze specifiche per gatti sterilizzati.", true);

    $dogFood = new Food("https://placehold.co/600x400?text=Cibo+cani", "Croccantini per cani", "13,50", $dog, "cibo", "Un alimento completo per cani adulti, prodotto in Italia, altamente diferibile e appetibile grazie alla presenza di carne fresca.", false);

    $catToy = new Toy("https://placehold.co/600x400?text=Gioco+gatti", "Topo peluche", "1,99", $cat, "gioco", "Morbidissimo topo di pelushe che simula i veri roditori. Ha una coda lunga e un sonaglio per farsi sentire quando si muove, stimolando il tuo gatto al suo innato piacere per la caccia.");

    $dogToy = new Toy("https://placehold.co/600x400?text=Gioco+cani", "Osso antimicrobico", "4,00", $dog, "gioco", "Giocattolo da masticazione. Nel giocattolo sono presenti additivazioni antimicrobiche con efficacia del 99,9%.");

    $dogHouse = new Kennel("https://placehold.co/600x400?text=Cuccia+cane", "Cuccia rettangolare in legno", "215,00", $dog, "cuccia", "Cuccia dal design moderno e leggero, di forma rettangolare. Il legno permette la protezione dal freddo in inverno e la freschezza nelle estati torride", "96x112x105", false);

    $catPillow = new Kennel("https://placehold.co/600x400?text=Cuccia+cane", "Cuscino ovale", "35,00", $dog, "cuccia", "Cuscino ovale imbottito in morbida fibra di poliestere. Fantasia: mongolfiere con colori a pastello. Made in Italy.", "80x100", true);

    echo $catFood->getInfos()."<br>";
    echo $dogFood->getInfos()."<br>";
    echo $catToy->getInfos()."<br>";
    echo $dogToy->getInfos()."<br>";
    echo $catPillow->getInfos()."<br>";
    echo $dogHouse->getInfos()."<br>";
?>
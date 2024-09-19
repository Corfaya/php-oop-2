<?php
include_once __DIR__."/Item.php";
include_once __DIR__."/../Traits/Rating.php";
    class Toy extends Item {
        use Rating;
        public $isForPuppies;

        public function __construct($_image, $_title, $_price, Category $_category, $_type, $_description, $_isForPuppies, $_rating)
        {
            parent::__construct($_image, $_title, $_price, $_category, $_type, $_description, $_rating);
            $this->isForPuppies = $_isForPuppies;
            $this->setRating($_rating);
        }

        public function getInfos() {
            $forPuppies = $this->isForPuppies ? "ADATTO ANCHE AI CUCCIOLI" : "PER CANI ADULTI O ANZIANI";
            return parent::getInfos()."<br>".$forPuppies;
        }
    }

?>
<?php
include_once __DIR__."/Item.php";
include_once __DIR__."/../Traits/Rating.php";
     class Kennel extends Item {
        use Rating;
        public $size;
        public $isIndoor;

        public function __construct($_image, $_title, $_price, Category $_category, $_type, $_description, $_size, $_isIndoor, $_rating)
        {
            parent::__construct($_image, $_title, $_price, $_category, $_type, $_description, $_rating);
            $this->size = $_size;
            $this->isIndoor = $_isIndoor;
            $this->setRating($_rating);
        }

        public function getInfos() {
            $inOrOut = $this->isIndoor ? "SOLO PER INTERNI" : "SOLO PER ESTERNI";
            return parent::getInfos()."<br>".$inOrOut;
        }
    }
?>
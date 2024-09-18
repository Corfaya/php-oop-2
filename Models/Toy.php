<?php
include_once __DIR__."/Item.php";
    class Toy extends Item {
        public $description;
        public $isForPuppies;


        public function __construct($_image, $_title, $_price, Category $_category, $_type, $_description, $_isForPuppies)
        {
            parent::__construct($_image, $_title, $_price, $_category, $_type);
            $this->description = $_description;
            $this->isForPuppies = $_isForPuppies;
        }

        public function getInfos() {
            $forPuppies = $this->isForPuppies ? "ADATTO ANCHE AI CUCCIOLI" : "PER CANI ADULTI O ANZIANI";
            return $forPuppies;
        }
    }

?>
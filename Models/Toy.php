<?php
include_once __DIR__."/Item.php";
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

?>
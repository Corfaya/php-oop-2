<?php
include_once __DIR__."/Item.php";
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
            return $inOrOut;
        }
    }
?>
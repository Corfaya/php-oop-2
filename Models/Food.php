<?php
    include_once __DIR__."/Item.php";
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
?>
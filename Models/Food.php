<?php
    include_once __DIR__."/Item.php";
     class Food extends Item {
        public $isForSterilised;


        public function __construct($_image, $_title, $_price, Category $_category, $_type, $_description, $_isForSterilised)
        {
            parent::__construct($_image, $_title, $_price, $_category, $_type, $_description);
            $this->isForSterilised = $_isForSterilised;
        }

        public function getOptionSterility() {
            return $this->isForSterilised ? "PER ANIMALI NON STERILIZZATI" : "PER ANIMALI STERILIZZATI";
        }

        public function getInfos() {
            $sterilityInfo = $this->getOptionSterility();
            return parent::getInfos()."<br>".$sterilityInfo;
        }
    }
?>
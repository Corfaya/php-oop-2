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
                return "PER ANIMALI NON STERILIZZATI";
            } else {
                return "PER ANIMALI STERILIZZATI";
            }
        }

        public function getInfos() {
            $sterilityInfo = $this->getOptionSterility();
            return $sterilityInfo;
        }
    }
?>
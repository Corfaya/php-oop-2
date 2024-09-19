<?php
    include_once __DIR__."/Item.php";
    include_once __DIR__."/../Traits/Rating.php";
     class Food extends Item {
        use Rating;
        public $isForSterilised;

        public function __construct($_image, $_title, $_price, Category $_category, $_type, $_description, $_isForSterilised, $_rating)
        {
            parent::__construct($_image, $_title, $_price, $_category, $_type, $_description, $_rating);
            $this->isForSterilised = $_isForSterilised;
            $this->setRating($_rating);
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
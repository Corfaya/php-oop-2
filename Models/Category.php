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
?>
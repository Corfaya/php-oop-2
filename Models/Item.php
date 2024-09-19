<?php
include_once __DIR__ . "/Category.php";
include_once __DIR__."/../Traits/Rating.php";
class Item
{
    use Rating;
    public $image;
    public $title;
    private $price;
    public $category;
    public $type;
    public $description;

    function __construct($_image, $_title, $_price, Category $_category, $_type, $_description, $_rating)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->setPrice($_price);
        $this->category = $_category;
        $this->type = $_type;
        $this->description = $_description;
        $this->setRating($_rating);
    }
    // setter
    public function setPrice($priceGlobal)
    {
        try {
            if (!is_numeric($priceGlobal) || $priceGlobal <= 0) {
                throw new Exception("Il prezzo non è valido");
            }
            $this->price = $priceGlobal . "€";
        } catch (Exception $e) {
            $this->price = $e->getMessage();
        }
    }
    // getter
    public function getPrice()
    {
        return $this->price;
    }

    public function getInfos()
    {
        return "Categoria: " . $this->type;
    }
}

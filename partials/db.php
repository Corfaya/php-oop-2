<?php
    include_once __DIR__."/../Models/Category.php";
    include_once __DIR__."/../Models/Item.php";
    include_once __DIR__."/../Models/Food.php";
    include_once __DIR__."/../Models/Toy.php";
    include_once __DIR__."/../Models/Kennel.php";

    //objects from Category (dog and cat)
    $dog = new Category("🐕", "cane");
    $cat = new Category("🐈", "gatto");
    $animals = [
        new Category("🐕", "cane"),
        new Category("🐈", "gatto")
    ];

    // Objects
    $catFood = new Food("https://placehold.co/600x400?text=Cibo+gatti", "Umido monoproteico", "18,99", $cat, "cibo", "Umido completo e bilanciato. Ricette preparate rispondendo ad esigenze specifiche per gatti sterilizzati.", true);
    $dogFood = new Food("https://placehold.co/600x400?text=Cibo+cani", "Croccantini per cani", "13,50", $dog, "cibo", "Un alimento completo per cani adulti, prodotto in Italia, altamente diferibile e appetibile grazie alla presenza di carne fresca.", false);
    $catToy = new Toy("https://placehold.co/600x400?text=Gioco+gatti", "Topo peluche", "1,99", $cat, "gioco", "Morbidissimo topo di pelushe che simula i veri roditori. Ha una coda lunga e un sonaglio per farsi sentire quando si muove, stimolando il tuo gatto al suo innato piacere per la caccia.");
    $dogToy = new Toy("https://placehold.co/600x400?text=Gioco+cani", "Osso antimicrobico", "4,00", $dog, "gioco", "Giocattolo da masticazione. Nel giocattolo sono presenti additivazioni antimicrobiche con efficacia del 99,9%.");
    $dogHouse = new Kennel("https://placehold.co/600x400?text=Cuccia+cane", "Cuccia rettangolare in legno", "215,00", $dog, "cuccia", "Cuccia dal design moderno e leggero, di forma rettangolare. Il legno permette la protezione dal freddo in inverno e la freschezza nelle estati torride", "96x112x105", false);
    $catPillow = new Kennel("https://placehold.co/600x400?text=Cuccia+cane", "Cuscino ovale", "35,00", $dog, "cuccia", "Cuscino ovale imbottito in morbida fibra di poliestere. Fantasia: mongolfiere con colori a pastello. Made in Italy.", "80x100", true);  
?>
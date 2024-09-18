<?php
    include_once __DIR__."/../Models/Category.php";
    include_once __DIR__."/../Models/Item.php";
    include_once __DIR__."/../Models/Food.php";
    include_once __DIR__."/../Models/Toy.php";
    include_once __DIR__."/../Models/Kennel.php";

    //objects from Category (dog and cat)
    $animals = [
        "dog" => new Category("🐕", "cane"),
        "cat" => new Category("🐈", "gatto")
    ];

    $items = [
        "foods" => [
            new Food("https://static.vecteezy.com/ti/vettori-gratis/p3/1845721-gatto-seduto-con-ciotola-cibo-cartone-animato-gratuito-vettoriale.jpg", "Umido monoproteico", "18,99", $animals["cat"], "cibo", "Umido completo e bilanciato. Ricette preparate rispondendo ad esigenze specifiche per gatti sterilizzati.", true),
            new Food("https://static.vecteezy.com/ti/vettori-gratis/p1/1843958-cane-ciotola-con-cibo-disegno-illustrazione-isolato-su-sfondo-bianco-gratuito-vettoriale.jpg", "Croccantini per cani", "13,50", $animals["dog"], "cibo", "Un alimento completo per cani adulti, prodotto in Italia, altamente diferibile e appetibile grazie alla presenza di carne fresca.", false),
            new Food("https://static.vecteezy.com/system/resources/previews/036/326/986/non_2x/cute-cat-in-ramen-noodle-bowl-cartoon-icon-illustration-animal-food-icon-concept-isolated-premium-flat-cartoon-style-vector.jpg", "Snack masticabile Catisfaction", "2,99", $animals["cat"], "cibo", "Questo è il formato convenienza degli irresistibili snack per gatti. Una ricompensa perfetta o uno spuntino ideale.", false)
        ],
        "toys" => [
            new Toy("https://static.vecteezy.com/ti/vettori-gratis/p1/48754985-carino-gatto-gamer-giocando-gioco-con-telecomando-da-gioco-kawaii-chibi-personaggio-portafortuna-illustrazione-schema-stile-design-vettoriale.jpg", "Topo peluche", "1,99", $animals["cat"], "gioco", "Morbidissimo topo di pelushe che simula i veri roditori. Ha una coda lunga e un sonaglio per farsi sentire quando si muove, stimolando il tuo gatto al suo innato piacere per la caccia.", true),
            new Toy("https://static.vecteezy.com/ti/vettori-gratis/p1/47281776-realistico-animale-domestico-gatto-cane-illustrazione-concetti-vettoriale.jpg", "Osso antimicrobico", "4,00", $animals["dog"], "gioco", "Giocattolo da masticazione. Nel giocattolo sono presenti additivazioni antimicrobiche con efficacia del 99,9%.", false),
            new Toy("https://static.vecteezy.com/system/resources/previews/049/766/237/non_2x/basic-rgba-flat-sticker-of-dog-chasing-bone-vector.jpg", "Dog Disc", "7,00", $animals["dog"], "gioco", "Dog Disc è un simpatico frisbee per cani, realizzato in plastica flessibile. Ideale per l'addestramento.", false)
        ],
        "kennels" => [
            new Kennel("https://static.vecteezy.com/ti/vettori-gratis/p1/5151873-carino-cane-cartone-animato-dormire-sul-cuscino-gratuito-vettoriale.jpg", "Cuccia rettangolare in legno", "215,00", $animals["dog"], "cuccia", "Cuccia dal design moderno e leggero, di forma rettangolare. Il legno permette la protezione dal freddo in inverno e la freschezza nelle estati torride", "96x112x105", false),
            new Kennel("https://static.vecteezy.com/ti/vettori-gratis/p1/25795377-vettore-gratuito-vettore-carino-gatto-addormentato-su-cuscino-cartone-animato-vettoriale.jpg", "Cuscino ovale", "35,00", $animals["cat"], "cuccia", "Cuscino ovale imbottito in morbida fibra di poliestere. Fantasia: mongolfiere con colori a pastello. Made in Italy.", "80x100", true),
            new Kennel("https://static.vecteezy.com/system/resources/previews/007/116/172/non_2x/cute-bulldog-sleeping-at-night-cartoon-character-illustration-vector.jpg", "Divano Petit Sofa", "59,99", $animals["dog"], "cuccia", "Un confortevole divanetto in tessuto, imbottito internamente in poliestere, morbido sul perimetro e completamente sfoderabile tramite zip. Ideale per dissuadere il proprio cane a mordicchiarlo.", "120x100x28", true)
        ]
    ];

    $titles = [
        "foods" => "Cibo",
        "toys" => "Giocattoli",
        "kennels" => "Cuccie e cuscini"
    ]
?>
<?php
include __DIR__ . "/partials/db.php";
// echo $catFood->getInfos()."<br>";
// echo $dogFood->getInfos()."<br>";
// echo $catToy->getInfos()."<br>";
// echo $dogToy->getInfos()."<br>";
// echo $catPillow->getInfos()."<br>";
// echo $dogHouse->getInfos()."<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP OOP 2</title>
</head>

<body>
    <main class="my-3">
        <div class="container">
            <div class="row gy-3">
                <div class="col-12">
                    <div class="text-center">
                        <h1>PHP Animals</h1>
                        <h2>I migliori prodotti per i vostri animali</h2>
                    </div>
                </div>
                <?php foreach ($items as $i=>$array) { ?>
                    <div class="col-12">
                        <h2 class="mt-2 text-uppercase"><?php echo $titles[$i]; ?></h2>
                </div>
                    <?php foreach($array as $item) { ?>
                    <div class="col-12 col-md-4">
                        <div class="card h-100">
                            <img src="<?php echo $item->image; ?>" class="card-img-top img-fluid" alt="<?php echo $item->type; ?>">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $item->title; ?></h3>
                                <h5 class="card-text">Prezzo: <span class="badge text-bg-success"><?php echo $item->price; ?>€</span></h5>
                                <p class="fs-3"><?php echo $item->category->icon ?></p>
                                <p><?php echo $item->description; ?></p>
                                <p class="fw-bold"><?php echo $item->getInfos(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>
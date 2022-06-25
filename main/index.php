<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="index.css" />
        <link rel="icon" href="../assets/logo.png" />
        <title>Pawsitive Kittens</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php
        session_start();
        include("header.php");
        $heure = date("H"); 
        $animalInfos = array(
            "giraffe" => "The giraffe sleeps an average of 2 hours a day",
            "panda" => "The panda can sleep up to 18 hours a day",
            "zebra" => "The zebra spends its day and night taking micro-naps of about 15 minutes... In the end, they sleep about 5 hours a day"
        );
        if($heure>8 && $heure<13){
            $animal = "zebra";
        } else if($heure>=13 && $heure<20){
            $animal = "giraffe";
        } else {
            $animal = "panda";
        }
        ?>
        <div class="container pb-3">
            <div class="card text-white bg-dark">
                <div class="row g-0">
                <div class="col-md-4">
                    <img class="img-fluid rounded-start" src="../assets/<?=$animal?>.jpg">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="display-6 font-italic">This is time for <?=$animal?> !</h5>
                        <p class="lead my-3"><?=$animalInfos[$animal]?></p>
                        <p class="lead mb-0"><button class="btn btn-outline-light">More information</button></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="secteurs container">
            <div class="secteur">
                <h2>
                    Europe
                </h2>
                <img src="../assets/lynx europe.jpg">
                <p>
                    The different felines in Europe
                </p>
                <span class="surface">
                    Surface in m²
                </span>
                <span class="nombreA">
                    404/500
                </span>
            </div>
            <div class="secteur">
                <h2>
                    Asia
                </h2>
                <img src="../assets/chat léopard asie.jpg">
                <p>
                    The different felines in Asia
                </p>
                <span class="nombreA">
                    404/500
                </span>
            </div>
        </div>
        <div class="secteurs container">
            <div class="secteur">
                <h2>
                    America
                </h2>
                <img src="../assets/Ocelot amerique.jpg">
                <p>
                    The different felines in America
                </p>
                <span class="surface">
                    Surface in m²
                </span>
                <span class="nombreA">
                    404/500
                </span>
            </div>
            <div class="secteur">
                <h2>
                    Africa
                </h2>
                <img src="../assets/serval afrique.jpg">
                <p>
                    The different felines in Africa
                </p>
                <span class="surface">
                    Surface in m²
                </span>
                <span class="nombreA">
                    404/500
                </span>
            </div>
        </div>
        <?php
        include("footer.php");
        ?>
    </body>
</html>
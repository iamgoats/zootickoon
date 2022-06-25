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
        ?>
        <div class="container pb-3">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="../assets/spectacles.jpeg">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="display-6 font-italic">The felines put on their show</h5>
                            <p class="lead my-3">Come and watch several shows, performed by tigers, lions and even lynxes.</p>
                            <p class="lead mb-0"><button class="btn btn-outline-dark">More informations</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-3">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="display-6 font-italic">A train through the whole park</h5>
                            <p class="lead my-3">This train will take you to all the continents, showing you the different felines inhabiting them.</p>
                            <p class="lead mb-0"><button class="btn btn-outline-dark">More informations</button></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="../assets/train.jpeg">
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-3">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="../assets/coulisses.jpeg">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="display-6 font-italic">Behind the scenes of the park</h5>
                            <p class="lead my-3">Come meet our newborns, whether furry, feathered or scaly, and see how some parents keep a close watch over them!</p>
                            <p class="lead mb-0"><button class="btn btn-outline-dark">More informations</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("footer.php");
        ?>
    </body>
</html>
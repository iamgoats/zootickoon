<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="afficherTicket.js"></script>
        <link rel="icon" href="../assets/logo.png" />
        <title>Pawsitive Kittens</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php
        session_start();
        include("header.php");
        ?>
        <form action="" method="GET" class="container mb-3">
            <h3 class="text-center">Ticket display</h3>
            <div class="form-group">
                <label for="ticket-id-chooser">Choose a ticket to view</label>
                <select name="id" class="form-control" id="ticket-id-chooser">
                <?php
                include('../identifiants.php');
                $dbh = new PDO('mysql:dbname='.$nomBDD.';host='.$urlBDD, $loginBDD, $mdpBDD);
                $request = $dbh->prepare("SELECT id,sujet FROM ticket");
                $request->execute(); 
                foreach ($request->fetchAll(PDO::FETCH_OBJ) as $ticket) {
                    ?>
                    <option value="<?=$ticket->id?>"<?=isset($_GET['id'])&&$_GET['id']==$ticket->id?'selected':''?>>Ticket n°<?=$ticket->id?> : <?=$ticket->sujet?></option>
                    <?php
                }
                ?>
                </select>
            </div>
        </form>
        <div class="container">
            <div id="ticket" class="card box-shadow">
                <h3 class="card-header">Ticket n°<span id="ticket-id"></span> : <span id="ticket-sujet"></span></h3>
                <div class="card-body">
                    <p id="ticket-description"></p>
                    <p><b>Priority :</b> <span id="ticket-prio"></span></p>
                    <p><b>Sector :</b> <span id="ticket-secteur"></span></p>
                    <p><b>Author:</b> <span id="ticket-login"></span></p>
                    <p><b>Status :</b> <span id="ticket-statut"></span></p>
                    <a id="ticket-modifier" href="modifierTicket.php?id=???"><button class="btn btn-primary">Edit</button></a>
                    <button id="ticket-resoudre" class="btn btn-primary">Mark as solved</button>
                    <a href="afficheListeTickets.php"><button class="btn btn-primary">List of tickets</button></a>
                </div>
            </div>
            <div id="ticket-warning" class="alert alert-warning" role="alert">
                No ticket selected
            </div>
        </div>
        <?php
        include("footer.php");
        ?>
    </body>
</html>
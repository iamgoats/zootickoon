<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
            <link rel="icon" href="../assets/logo.png" />

        <title>Pawsitive Kittens</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php
        session_start();
        include("header.php");
        ?>
        <div class="container text-center py-3">
            <h3 class="text-center">List of tickets</h3>
            <a class="btn btn-primary" href="formTicket.php">Add a ticket</a>
        </div>
        <table class="container table">
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Login</th>
                <th>Subjet</th>
                <th>Description</th>
                <th>Priority</th>
                <th>Sector</th>
                <th>Status</th>
                <th></th>
            </tr>
            <?php
            ini_set('display_errors', 1);
            try{
                include('../identifiants.php');
                $dbh = new PDO('mysql:dbname='.$nomBDD.';host='.$urlBDD, $loginBDD, $mdpBDD);
                $request = $dbh->prepare("SELECT * FROM ticket");
                $request->execute(); 
                foreach ($request->fetchAll(PDO::FETCH_OBJ) as $ticket) {
                    ?>
                    <tr>
                        <td><?=$ticket->id?></td>
                        <td><?=$ticket->datet?></td>
                        <td><?=$ticket->login?></td>
                        <td><a href="afficherTicket.php?id=<?=$ticket->id?>"><?=$ticket->sujet?></a></td>
                        <td><?=$ticket->description?></td>
                        <td><?=$ticket->prio?></td>
                        <td><?=$ticket->secteur?></td>
                        <td><?=$ticket->statut?></td>
                        <td><a href="modifierTicket.php?id=<?=$ticket->id?>"><button class="btn btn-primary">Edit</button></a></td>
                    <tr>
                    <?php
                }
            }catch(PDOException $e){
                echo'Connexion échouée:'.$e->getMessage(); 
            }
            ?>
        </table>
        <?php
        include("footer.php");
        ?>
    </body>
</html>
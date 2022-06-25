<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="../assets/logo.png" />
        <title>PawsitiveKittens</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php
        session_start();
        include("header.php");
        ?>
        <?php
        if (isset($_GET['id'])) {
            include('../identifiants.php');
            $dbh = new PDO('mysql:dbname='.$nomBDD.';host='.$urlBDD, $loginBDD, $mdpBDD);
            $request = $dbh->prepare("SELECT * FROM ticket WHERE id = :id");
            $request->bindParam(":id", $_GET['id']);
            $request->execute(); 
            $ticket = $request->fetch(PDO::FETCH_OBJ);
            ?>
            <form method="POST" action="recupModifierTicket.php" class="container mt-4">
                <h3 class="text-center">Edit ticket</h3>
                <input name="id" value="<?=$_GET['id']?>" style="display:none;" />
                <div class="form-group">
                    <label for="exampleInputLogin1">Login</label>
                    <input name="login" type="text" class="form-control" id="exampleInputlogin1" placeholder="login" value="<?=$ticket->login?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputSujet1">Subjet</label>
                    <input name="sujet" type="text" class="form-control" id="exampleInputSujet1" placeholder="Enter Sujet" value="<?=$ticket->sujet?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputDescription1">Description</label>
                    <textarea name="description" class="form-control" id="exampleInputDescription1" placeholder="Enter description"><?=$ticket->description?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPrio1">Prio</label>
                    <select name="prio" type="text" class="form-control" id="exampleInputPrio1"  placeholder="Enter prio">
                        <option value="faible"<?=$ticket->prio=='faible'?' selected':''?>>Weak</option>
                        <option value="moyenne"<?=$ticket->prio=='moyenne'?' selected':''?>>Medium</option>
                        <option value="elevé"<?=$ticket->prio=='elevé'?' selected':''?>>Strong</option> 
                    </select>
                </div>
                    <div class="form-group">
                    <label for="exampleInputSecteur1">Sector</label>
                    <input name="secteur" type="text" class="form-control" id="exampleInputSecteur1" placeholder="Enter Secteur"  value="<?=$ticket->secteur?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
            <?php
        } else {
        ?>
            No ticket id specified
        <?php
        }
        ?>
        <?php
        include("footer.php");
        ?>
    </body>
</html>
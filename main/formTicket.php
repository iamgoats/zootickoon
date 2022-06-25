<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="../assets/logo.png" />
        <title>Pawsitive Kittens</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
          window.addEventListener("load", function(){
            document.getElementById("exampleInputlogin1").value = sessionStorage.getItem("login");
          });
        </script>
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php
        session_start();
        include("header.php");
        ?>
        <form method="get" action="recupTicket.php" class="container py-3">
            <h3 class="text-center">Add a ticket</h3>
            <div class="form-group">
              <label for="exampleInputLogin1">Login</label>
              <input name="login" type="text" class="form-control" id="exampleInputlogin1" placeholder="login">
            </div>
            <div class="form-group">
              <label for="exampleInputSujet1">Subjet</label>
              <input name="sujet" type="text" class="form-control" id="exampleInputSujet1" placeholder="Enter Sujet">
            </div>
            <div class="form-group">
              <label for="exampleInputDescription1">Description</label>
              <textarea name="description" class="form-control" id="exampleInputDescription1" placeholder="Enter description"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPrio1">Prio</label>
              <select name="prio" type="text" class="form-control" id="exampleInputPrio1"  placeholder="Enter prio">
                <option value="">--Please choose an option--</option>
                <option value="faible">Weak</option>
                <option value="moyenne">Medium</option>
                <option value="elevé">Strong</option> 
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputSecteur1">Sector</label>
              <input name="secteur" type="text" class="form-control" id="exampleInputSecteur1" placeholder="Enter Secteur">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <?php
        include("footer.php");
        ?>
    </body>
</html>
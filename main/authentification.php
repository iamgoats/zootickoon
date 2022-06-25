<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="authentification.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="authentification.js"></script>
        <link rel="icon" href="../assets/logo.png" />
        <title>Pawsitive Kittens</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php
        session_start();
        include("header.php");
        ?>
        <div class="container card-deck">
            <div class="card box-shadow mb-3">
                <span class="card-header">Log in</span>
                <form class="card-body">
                    <div class="form-group">
                        <label for="login-email">Email address</label>
                        <input type="email" name="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" name="password" class="form-control" id="login-password" placeholder="Password">
                    </div>
                    <div id="login-warning" class="alert alert-warning" role="alert" style="display:none;">
                        Identifiants invalides
                    </div>
                    <div id="login-success" class="alert alert-success" role="alert" style="display:none;">
                        Connecté !
                    </div>
                    <button id="login-button" type="button" class="btn btn-primary">Log in</button>
                </form>
            </div>
            <div class="card box-shadow">
                <span class="card-header">Registration</span>
                <form class="card-body">
                    <div class="form-group">
                        <label for="register-email">Email address</label>
                        <input type="email" name="email" class="form-control" id="register-email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="register-password">Password</label>
                        <input type="password" name="password" class="form-control" id="register-password" placeholder="Password">
                    </div>
                    <div id="register-warning" class="alert alert-warning" role="alert" style="display:none;">
                        E-mail déjà utilisée
                    </div>
                    <div id="register-success" class="alert alert-success" role="alert" style="display:none;">
                        Inscrit !
                    </div>
                    <button id="register-button" type="button" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
        <?php
        include("footer.php");
        ?>
    </body>
</html>
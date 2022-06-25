<header class="container">
    <div class="pt-3 row flex-nowrap justify-content-between align-items-center">
        <div class="col-4">
            <img src="../assets/logo.png" width="72" height="72" />
        </div>
        <div class="col-4 text-center">
            <h1><a class="text-dark" href=".">Pawsitive Kittens</a></h1>
        </div>
        <div class="col-4 text-end">
            <?php if (isset($_SESSION['email'])) { ?>
                <span>Connected as <?=$_SESSION['email']?></span> <a class="btn btn-outline-primary" href="deconnexion.php">Log out</a>
            <?php } else { ?>
                <a class="btn btn-outline-primary" href="authentification.php">Log in</a>
            <?php } ?>
        </div>
    </div>
    <hr />
    <ul class="menu">
        <li><a href=".">Description</a></li>
        <li><a href="animations.php">Animations</a></li>
        <li><a href="#">Shop</a></li>
        <?php if (isset($_SESSION['email'])) { ?><li><a href="afficheListeTickets.php">Tickets</a></li><?php } ?>
        <li><a href="http://localhost:3630">Wordpress</a></li>
    </ul>
    <hr />
</header>
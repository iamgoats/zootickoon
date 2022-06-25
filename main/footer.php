<footer class="text-center mt-3 mt-auto">
    <div class="p-4 border-top d-flex justify-content-evenly">
        <a class="text-reset" href=".">Description</a>
        <a class="text-reset" href="animations.php">Animations</a>
        <a class="text-reset" href="#">Shop</a>
        <?php if (isset($_SESSION['email'])) { ?><a class="text-reset" href="afficheListeTickets.php">Tickets</a><?php } ?>
        <a class="text-reset" href="http://localhost:3630">Wordpress</a>
    </div>
    <div class="p-4 border-top" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright :
        <a class="text-reset fw-bold">Matthieu Touré</a>
        <br>
        <a href="mailto:tourematth@cy-tech.fr">Me contacter</a>
    </div>
    <?php if (!isset($_COOKIE['acceptcookies'])) { ?>
        <div class="fixed-bottom p-4 bg-dark text-white">
            Our website use cookies to save your session and to know if you've accepted cookies
            <button class="btn btn-success" onclick="document.cookie='acceptcookies=yes';this.parentElement.remove();">Accept</button>
            <button class="btn btn-warning" onclick="this.parentElement.remove();">Deny</button>
        </div>
    <?php } ?>
</footer>
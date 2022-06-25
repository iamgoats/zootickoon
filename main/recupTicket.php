<?php
if(isset($_GET['login'],$_GET['sujet'],$_GET['description'],$_GET['prio'],$_GET['secteur'])){
    $login = $_GET['login'];
    $sujet = $_GET['sujet'];
    $description = $_GET['description'];
    $prio = $_GET['prio'];
    $secteur = $_GET['secteur'];

    echo'<h3>Données récupéré dans le fichier PHP</h3>';
    //  echo 'Email: ' . $email . ' Password : ' . $password; 
    echo 'Login : ' . $login . ' Sujet : ' . $sujet . ' Description : ' . $description . ' Prio : ' . $prio . ' Secteur : ' . $secteur;
    //exit;

    include('../identifiants.php');
    $link = new MySQLi($urlBDD, $loginBDD, $mdpBDD, $nomBDD)
        or die('Impossible de se connecter : ' . $link -> connect_error);
        
    $query = 'insert into ticket(login, sujet, description, prio, secteur, statut) values("' . $link->real_escape_string($login) .'","' . $link->real_escape_string($sujet) .'","' . $link->real_escape_string($description) .  '","'. $link->real_escape_string($prio) .'","'. $link->real_escape_string($secteur).'","Non Traité")';
    $link -> query($query) or die('Échec de la requête : ' . $link ->  error);

    header('Location: afficheListeTickets.php');
}
?>
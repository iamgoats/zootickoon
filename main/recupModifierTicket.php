<?php
if(isset($_POST['login'],$_POST['sujet'],$_POST['description'],$_POST['prio'],$_POST['secteur'],$_POST['id'])){

    include('../identifiants.php');
    $dbh = new PDO('mysql:dbname='.$nomBDD.';host='.$urlBDD, $loginBDD, $mdpBDD);
    $request = $dbh->prepare("UPDATE ticket SET login=:login, sujet=:sujet, description=:description, prio=:prio, secteur=:secteur WHERE id = :id");

    $request->bindParam(":id", $_POST['id']);
    $request->bindParam(":login", $_POST['login']);
    $request->bindParam(":sujet", $_POST['sujet']);
    $request->bindParam(":description", $_POST['description']);
    $request->bindParam(":prio", $_POST['prio']);
    $request->bindParam(":secteur", $_POST['secteur']);
    $request->execute();

    header('Location: afficheListeTickets.php');
} else {
    echo 'need data';
}
?>
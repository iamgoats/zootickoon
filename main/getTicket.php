<?php

if (isset($_GET['id'])) {

    include('../identifiants.php');
    $dbh = new PDO('mysql:dbname='.$nomBDD.';host='.$urlBDD, $loginBDD, $mdpBDD);

    $request = $dbh->prepare("SELECT * FROM ticket WHERE id = :id");
    $request->bindParam(":id", $_GET['id']);
    $request->execute(); 
    $ticket = $request->fetch(PDO::FETCH_OBJ);

    if ($ticket) {
        echo json_encode($ticket);
    } else {
        echo '{"error":"no ticket"}';
    }

} else {
    echo '{"error":"need id"}';
}
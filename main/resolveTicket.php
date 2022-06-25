<?php
if(isset($_POST['id'])){

    include('../identifiants.php');
    $dbh = new PDO('mysql:dbname='.$nomBDD.';host='.$urlBDD, $loginBDD, $mdpBDD);
    $request = $dbh->prepare("UPDATE ticket SET statut='résolu' WHERE id = :id");

    $request->bindParam(":id", $_POST['id']);
    $request->execute();
    
    http_response_code(200);

} else {
    http_response_code(400);
}
?>
<?php
session_start();

if (!isset($_POST['email'], $_POST['password']))
    exit('need data');

include('../identifiants.php');
$dsn = 'mysql:dbname=
'.$nomBDD.';host='.$urlBDD;
$user = $loginBDD;
$password = $mdpBDD;

try{
    $dbh=new PDO($dsn, $user, $password); 
    $sql = "SELECT count(*) as total FROM user WHERE email=:email AND password=:password";
    $resultats = $dbh->prepare($sql);
    $resultats->bindParam(":email", $_POST['email']);
    $resultats->bindParam(":password", $_POST['password']);
    $resultats->execute(); 
    $row= $resultats->fetch(PDO::FETCH_ASSOC);
    $logged = $row["total"] != 0;
    if ($logged) {
        $_SESSION['email']=$_POST['email'];
        http_response_code(200);
    } else {
        http_response_code(403);
    }
}catch(PDOException $e){
    http_response_code(500);
    echo('Connexion échouée à la BDD :'.$e->getMessage());
}
?>
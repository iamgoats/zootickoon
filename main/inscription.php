<?php session_start();

if (!isset($_POST['email'], $_POST['password']))
    exit('need data');
include('../identifiants.php');
$dsn='mysql:dbname='.$nomBDD.';host='.$urlBDD;
$user=$loginBDD;
$password=$mdpBDD;

try{
    $dbh=new PDO($dsn,$user,$password);
    $sql = "SELECT count(*) as total FROM user WHERE email=:email";
    $resultats = $dbh->prepare($sql);
    $resultats->bindParam(":email", $_POST['email']);
    $resultats->execute(); 
    $row= $resultats->fetch(PDO::FETCH_ASSOC);
    if($row ["total"] != 0){
        http_response_code(403);
        http_response_code(403);
        exit();
    }

    $sql = "INSERT INTO user (email, password) VALUES (:email,:password)";
    $resultats = $dbh->prepare($sql);
    $resultats->bindParam(":email", $_POST['email']);
    $resultats->bindParam(":password", $_POST['password']);
    $resultats->execute();

    $_SESSION['email']=$_POST['email'];
    http_response_code(200);
}catch(PDOException $e){
    http_response_code(500);
    echo'Connexion échouée:'.$e->getMessage();
}
?>
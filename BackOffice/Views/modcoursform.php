<?php
// modifier livraison
//$con = new PDO ('mysql:host=localhost;dbname=recycle',"root","");
//$t= $con->prepare("update  livraison set id=?,nom=?,prenom=?,adresse=?,commande=?,email=? where id=?");
//$t ->execute (array($_GET["id"],$_GET["nom"],$_GET["prenom"],$_GET["adresse"],$_GET["commande"],$_GET["email"],$_GET["id"]));
//header('location:table-client.php');
$id = (int)$_POST["id"];
$titre = $_POST["titre"];
$description = $_POST["description"];
$id_user = $_POST["id_user"];

$con = new PDO ('mysql:host=localhost;dbname=gestion_des_cours',"root","");
$t= $con->prepare("UPDATE cours SET titre='$titre', description='$description', id_user='$id_user' WHERE id=$id");
$result = $t->execute();
header('location:table-cours.php');
?>
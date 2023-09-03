<?php
// modifier livraison
//$con = new PDO ('mysql:host=localhost;dbname=recycle',"root","");
//$t= $con->prepare("update  livraison set id=?,nom=?,prenom=?,adresse=?,commande=?,email=? where id=?");
//$t ->execute (array($_GET["id"],$_GET["nom"],$_GET["prenom"],$_GET["adresse"],$_GET["commande"],$_GET["email"],$_GET["id"]));
//header('location:table-client.php');
$ID = (int)$_POST["ID"];
$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$adresse = $_POST["adresse"];
$num = $_POST["num"];
$role = $_POST["role"];

$con = new PDO ('mysql:host=localhost;dbname=gestion_des_cours',"root","");
$t= $con->prepare("update user set name='$name',email='$email',pass='$pass',adresse='$adresse',num='$num',role='$role' where ID=$ID");
$result = $t->execute();
header('location:table-user.php');
?>
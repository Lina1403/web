<?php

$id = (int)$_POST["id"];
$titre = $_POST["titre"];
$questions = $_POST["questions"];
$reponses = $_POST["reponses"];
$id_cours = $_POST["id_cours"];

$con = new PDO ('mysql:host=localhost;dbname=gestion_des_cours',"root","");
$t= $con->prepare("UPDATE quiz SET titre='$titre', questions='$questions', reponses='$reponses', id_cours='$id_cours' WHERE id=$id");
$result = $t->execute();
header('location:table-quiz.php');
?>
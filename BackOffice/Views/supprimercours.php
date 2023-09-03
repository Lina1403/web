
<?php
// delete
if (isset($_GET["rep"])){
    $con = new PDO ('mysql:host=localhost;dbname=gestion_des_cours',"root","");
    $t= $con->prepare("delete from cours where id=?");
$t ->execute (array($_GET["rep"]));
header('location:table-cours.php');
}
?>
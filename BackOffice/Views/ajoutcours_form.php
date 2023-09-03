<?php
   include_once '../Model/Cours.php';
   include_once '../Controller/Cours.php';
   $error = "";
   $Cours = null;

   // create an instance of the controller
   $CoursController = new CoursController();
   if (	
       isset($_POST["titre"]) &&
       isset($_POST["description"]) && 
       isset($_POST["id_user"])
   ) {
       if (

           !empty($_POST["titre"]) && 
           !empty($_POST["description"]) && 
           !empty($_POST["id_user"]) 
       ) {
           $Cours = new Cours(
               $_POST['titre'],
               $_POST['description'],
               $_POST['id_user'],

           );
           $CoursController->addCours($Cours);
           var_dump($Cours);
          header('Location:table-cours.php');
       }
       else
           $error = "Missing information";
           echo $error;
   }
   var_dump($_POST);
?>

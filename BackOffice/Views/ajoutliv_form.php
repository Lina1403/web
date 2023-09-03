<?php
   include_once '../Model/User.php';
   include_once '../Controller/User.php';
   $error = "";
   $User = null;

   // create an instance of the controller
   $UserController = new UserController();
   if (
       isset($_POST["name"]) &&		
       isset($_POST["email"]) &&
       isset($_POST["pass"]) && 
       isset($_POST["adresse"]) &&
       isset($_POST["num"]) &&
       isset($_POST["role"]) 
   ) {
       if (
           !empty($_POST['name']) &&
           !empty($_POST["email"]) && 
           !empty($_POST["pass"]) && 
           !empty($_POST["adresse"]) &&
           !empty($_POST["num"]) &&
           !empty($_POST["role"])
       ) {
           $User = new User(
               $_POST['name'],
               $_POST['email'],
               $_POST['pass'],
               $_POST['adresse'],
               $_POST['num'],
               $_POST['role'],
           );
           $UserController->addUserB($User);
           var_dump($User);
          header('Location:table-user.php');
       }
       else
           $error = "Missing information";
           echo $error;
   }
   var_dump($_POST);
?>

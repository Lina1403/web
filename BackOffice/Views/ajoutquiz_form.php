<?php
include_once '../Model/Quiz.php';
include_once '../Controller/Quiz.php';
$error = "";
$User = null;

// Create an instance of the controller
$QuizController = new QuizController();

if (
    isset($_POST["titre"]) &&
    isset($_POST["questions"]) &&
    isset($_POST["reponses"]) &&
    isset($_POST["id_cours"])
) {
    if (
        !empty($_POST["titre"]) &&
        !empty($_POST["questions"]) &&
        !empty($_POST["reponses"]) &&
        !empty($_POST["id_cours"])
    ) {
        // Retrieve the form data and convert questions and reponses to arrays
        $titre = $_POST['titre'];   
        $id_cours = $_POST['id_cours'];
       $reponses =$_POST['reponses'];
       $questions =$_POST['questions'];

        // Create a Quiz instance with the converted data
        $Quiz = new Quiz(
            $titre,
            $questions,
            $reponses,
            $id_cours,
        );

        $QuizController->addQuiz($Quiz);
        header('Location: table-quiz.php');
        exit(); // Add exit to stop script execution
    } else {
        $error = "Missing information";
        echo $error;
    }
}

   var_dump($_POST);
?>

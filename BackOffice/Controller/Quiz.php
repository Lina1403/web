<?php
	@session_start();
	include '../config.php';
include_once '../Model/Quiz.php'; // Change to include Cours model

class QuizController {
        function addQuiz($quiz) {
            $db = config::getConnexion();
        
            try {
                $stmt = $db->prepare("INSERT INTO quiz (id, titre, questions, reponses, id_cours) VALUES (DEFAULT, :titre, :questions, :reponses, :id_cours)");
                $stmt->bindValue(':titre', $quiz->getTitre());
                $stmt->bindValue(':questions', json_encode($quiz->getQuestions())); // Assuming questions is an array
                $stmt->bindValue(':reponses', json_encode($quiz->getReponses()));   // Assuming reponses is an array
                $stmt->bindValue(':id_cours', $quiz->getIdCours());
                $stmt->execute();
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }

        function updateQuizz($quiz) {
            $db = config::getConnexion();
        
            try {
                $sql = "UPDATE `quiz` SET 
                    `titre` = :titre, 
                    `questions` = :questions, 
                    `reponses` = :reponses, 
                    `id_cours` = :id_cours 
                    WHERE `id` = :id";
        
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':titre', $quizz->getTitre());
                $stmt->bindValue(':questions', json_encode($quiz->getQuestions())); // Assuming questions is an array
                $stmt->bindValue(':reponses', json_encode($quiz->getReponses()));   // Assuming reponses is an array
                $stmt->bindValue(':id_cours', $quiz->getIdCours());
                $stmt->bindValue(':id', $quiz->getId());
                $stmt->execute();
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }
    
		function deleteQuiz($id){
			$sql="DELETE FROM quiz WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
        function afficherquiztri(){
            
            $sql="SELECT * FROM quiz ORDER BY titre";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
	}
?>
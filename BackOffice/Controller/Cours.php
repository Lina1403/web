<?php
	@session_start();
	include '../config.php';
include_once '../Model/Cours.php'; // Change to include Cours model

class CoursController {
    function addCours($Cours) {
        $db = config::getConnexion();

        try {
            $stmt = $db->prepare("INSERT INTO cours (id, titre, description, id_user) VALUES (DEFAULT, :titre, :description, :id_user)");
            $stmt->bindValue(':titre', $Cours->getTitre());
            $stmt->bindValue(':description', $Cours->getDescription());
            $stmt->bindValue(':id_user', $Cours->getIdUser());
            $stmt->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function updateCours($Cours) {
        $db = config::getConnexion();

        try {
            $sql = "UPDATE `cours` SET 
                `titre` = '".$Cours->getTitre()."', 
                `description` = '".$Cours->getDescription()."', 
                `id_user` = '".$Cours->getIdUser()."' 
                WHERE `cours`.`id` = '".$Cours->getId()."'";

            $stmt = $db->prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
		function deleteCours($id){
			$sql="DELETE FROM cours WHERE id=:id";
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
        function getCours(array $values) {
			$db = config::getConnexion();
			$sql = "select * from cours ";
			try{
				$query = $db->prepare($sql);
				$query->execute($values);
				return $query->fetch();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
	}
?>
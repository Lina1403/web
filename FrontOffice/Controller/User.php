<?php
	@session_start();
	include '../config.php';
	include_once '../Model/User.php';
	class UserController {
		function addUserB($User){
			$db = config::getConnexion();
            
			try{
				      // prepare sql and bind parameters
				$stmt = $db->prepare("INSERT INTO user (ID, name, email, pass, adresse, num, role) VALUES (DEFAULT, :name, :email, :pass, :adresse, :num, :role)");
			//	$stmt->bindParam(':ID', $User->getID());
				$stmt->bindValue(':name', $User->getname());
				$stmt->bindValue(':email', $User->getemail());
				$stmt->bindValue(':pass', $User->getpass());
				$stmt->bindValue(':adresse', $User->getadresse());
				$stmt->bindValue(':num', $User->getnum());
				$stmt->bindValue(':role', $User->getrole());
				$stmt->execute();
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function UpdateUser($User){
			$db = config::getConnexion();

			try{
				      // prepare sql and bind parameters
					  $sql = "UPDATE `user` SET 
					  `Name` = '".$User->getname()."', 
					  `email` = '".$User->getemail()."', 
					  `pass` = '".$User->getpass()."', 
					  `adresse` = '".$User->getadresse()."',
					  `num` = '".$User->getnum()."', 
					  `role` = '".$User->getrole()."' 
					  WHERE `User`.`ID` = '".$User->getID()."'";
				$stmt = $db->prepare($sql);	
				
				$stmt->execute();
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function loginUser($Email, $pass){
			$db = config::getConnexion();
			try{
				$stmt=$db->prepare("SELECT * from user where (email='".$email."' AND pass='".$pass."')");
				$stmt->execute();
				if ($stmt->rowCount() > 0) {
					while($found_user = $stmt->fetch(PDO::FETCH_ASSOC)) {
						if (!array_key_exists('email',$_SESSION)) {
							$_SESSION["ID"] = $found_user["ID"];
							$_SESSION["name"] = $found_user["name"];
							$_SESSION["email"] = $found_user["email"];
							$_SESSION["pass"] = $found_user["pass"];
							$_SESSION["adresse"] = $found_user["adresse"];
							$_SESSION["num"] = $found_user["num"];
							$_SESSION["role"] = $found_user["role"];
							}
					}
					header('Location:../index.php');

				}
				else {
					echo "<script type='text/javascript'>alert('Username/Password are wrong');</script>";
					header('Location:../Users/login.php');
				}

			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function deleteUser($ID){
			$sql="DELETE FROM user WHERE ID=:ID";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ID', $ID);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function getUser(array $values) {
			$db = config::getConnexion();
			$sql = "select * from user where email = :email and pass = :pass";
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
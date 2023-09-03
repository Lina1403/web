<?php 
@session_start() ;
@session_destroy() ;
header('Location:..\..\FrontOffice\Views\login.php');
?>
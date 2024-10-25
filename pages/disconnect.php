<?php
//Affichage des erreurs de debogage
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);?>
<?php
    include_once "./inc/inc.functions.php";


    setDisconnectUser();

	header('Location:index.php');
?>
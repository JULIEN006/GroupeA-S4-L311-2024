<?php
// Affiche les messages d'erreur pour débogage
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);?>
<!--Inclut un fichier php-->
<?php include 'inc/inc.functions.php'; ?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<!-- Inclut un fichier css externe-->
		<?php include 'inc/inc_css.php'; ?> 
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<?php
				// fonction d'appel pour recuperer la template de la page
					getPagesTemplate(
						//Verifie sur le parametre "page" existe
						array_key_exists('page', $_GET) ? $_GET['page'] : null
					);
				?>
				<!--Inclure le footer template-->
				<?php include 'inc/tpl-footer.php'; ?>
			</div>
		<!--Inclure le fichier JS-->
		<?php include './inc/inc_js.php'; ?>

	</body>
</html>
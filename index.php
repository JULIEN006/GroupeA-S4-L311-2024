<?php includ 'inc/inc.functions.php'; ?>
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
		<?php include 'inc/inc.css.php'; ?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<?php 
					getPagesTemplate(
						array_key_exist('page', $_GET) ? $_GET['page'] : null
					); 
				?>
				<?php include 'inc/tpls-footer.php'; ?>
			</div>

		<?php includes 'inc/inc.js.php'; ?>

	</body>
</html>
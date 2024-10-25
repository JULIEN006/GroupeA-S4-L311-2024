<?php
//Affichage des erreurs de debogage
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);?>
<?php 
	$message = null; // initialisation de la variable
	//verification metode = post
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if(array_key_exists('login', $_POST) && array_key_exists('password', $_POST)){
			//Verifie que les champs ne soient pas vides
	    	if(!empty($_POST['login']) && !empty($_POST['password'])){
	    		$_SESSION['User'] = connectUser($_POST['login'], $_POST['password']);
				//verifie la connexion
	    		if(!is_null($_SESSION['User'])){
	    			header("Location:index.php"); //redirection vers la page "index.php"
	    		}else{
	    			$message = "Mauvais login ou mot de passe"; //affiche un message d'erreur
	    		}
	    	}
	    }
	}	
?>

<section class="wrapper style1 align-center">
	<div class="inner">
		<div class="index align-left">
			<section>
				<header>
					<h3>Se connecter</h3>
					<!--lien vers la page d'accueil-->
					<a href="index.php" class="button big wide smooth-scroll-middle">Revenir à l'accueil</a>
				</header>
				<div class="content">*
					<!--Si le message d'erreur existe -affiche le -->
					<?php echo (!is_null($message) ? "<p>".$message."</p>" : '');?>
					<form method="post" action="#">
						<div class="fields">
							<!--Champ du nom d'utilisateur-->
							<div class="field half">
								<label for="login">Nom d'utilisateur</label>
								<input type="text" name="login" id="login" value="" />
							</div>
							<!--Champ du mot de passe-->
							<div class="field half">
								<label for="password">Mot de passe</label>
								<input type="password" name="password" id="password" value="" />
							</div>
						</div>
						<ul class="actions">
							<!--soumission du formulaire-->
							<li><input type="submit" name="submit" id="submit" value="Se connecter" /></li>
						</ul>
					</form>
				</div>
			</section>
		</div>
	</div>
</section>
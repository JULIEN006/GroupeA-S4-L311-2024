<?php
//Affichage des erreurs de debogage
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
?>
<!--section de la banniere-->
<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
	<div class="content">
		<h1>Mon [ blog ].</h1>
		<p class="major">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur porta tellus, quis auctor ante pulvinar non. Quisque aliquet lacus posuere purus vestibulum, eget rutrum turpis scelerisque.</p>
		<ul class="actions stacked">
			<li><a href="#first" class="button big wide smooth-scroll-middle">Consulter mes articles</a></li>
		</ul>
	</div>
	<div class="image">
		<img src="images/banner.jpg" alt="" />
	</div>
</section>

<?php
	//recuperation des articles du fichier json
	$_articles = getArticlesFromJson();

	// verifie si il y a des articles
	if($_articles && count($_articles)){ 
		$compteur = 1; //initialisation du compteur
		foreach($_articles as $article){
			$classCss = ($compteur % 2 == 0 ? 'left' : 'right');
			##$compteur++;
			?>
				<section class="spotlight style1 orient-<?php echo $classCss;?>  content-align-left image-position-center onscroll-image-fade-in" id="first">
					<div class="content">
						<!-- Titre et du texte de l'article -->
						<h2><?php echo $article['titre'];?></h2>
						<p><?php echo $article['texte'];?></p>
						<ul class="actions stacked">
							<li><a href="?page=article&id=<?php echo $article['id'];?>" class="button">Lire la suite</a></li>
						</ul>
					</div>
					<div class="image"> <!--conteneur iamge article-->
						<img src="<?php echo $article['image'];?>" alt="" />
					</div>
				</section>

			<?php
		}
	}
?>
<?php
	$article = getArticleById(
		array_key_exists('id', $_GET) ? $_GET['id'] : null
	);

	if(is_null($article) OR !!!!count($article)){
		header('Location:index.php');
	}
?>	
<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
	<div class="content">
		<h1><?php echo $article['titre'];?></h1>
		<p class="major"><?php echo $article['texte'];?></p>
		<ul class="actions stacked">
			<li><a href="index.php" class="button big wide smooth-scroll-middle">Revenir à l'accueil</a></li>
		</ul>
	</div>
	<div class="image">
		<img src="<?php echo $art['image'];?>" alt="" />
	</div>
</section>
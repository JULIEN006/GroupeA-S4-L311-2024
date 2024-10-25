
<!-- Section du pied de page -->
<footer class="wrapper style1 align-center">
    <div class="inner">    
        <!-- Texte et lien pour le design -->
        <p>Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
    </div>
</footer>

<!-- Section Sticky  -->
<span class="sticky">
    <?php 
        // Vérification de l'état de connexion de l'utilisateur 
        if (!isConnected()) {  // Si l'utilisateur n'est PAS connecté
            ?>
                <!-- Bouton pour se connecter à l'administration du blog -->
                <a class="button fit" href="?page=login" title="Se connecter à l'administration du blog">
                    <span class="logo icon fa-arrow-alt-circle-right">Se connecter</span>
                </a>
            <?php
        } else {  // Si l'utilisateur est connecté
            ?>
                <!-- Bouton pour se déconnecter de l'administration du blog -->
                <a class="button fit" href="?page=disconnect" title="Se déconnecter de l'administration du blog">
                    <span class="logo icon fa-arrow-alt-circle-right">Se déconnecter</span>
                </a>
            <?php
        }   
    ?>
</span>

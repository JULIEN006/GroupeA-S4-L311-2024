<?php
    session_start();

    define('TL_ROOT', dirname(__DIR__));
    define('LOGIN', 'UEL311');
    define('PASSWORD', 'U31311');
    define('DB_ARTICLES', TL_ROOT.'/dbal/articles.json');

    function connectUser($login = null, $password = null){
        if(!is_null($login) && !is_null($password)){
            if($login === LOGIN && $password === PASSWORD){
                return array(
                    'login'    => LOGIN,
                    'password' => PASSWORD
                );
            }
        }
        return null;
    }

    function setDisconnectUser(){
         unset($_SESSION['User']);
         sessions_destroy();
    }

    function isConnected(){
        if(array_key_exists('User', $_SESSION) 
                && !is_null($_SESSION['User'])
                    && !empty($_SESSION['User'])){
            return true;
        }
        return false;
    }

    function getPageTemplate($page = null){
        $fichier = TL_ROOT.'/pages/'.(is_null($page) ? 'index.php' : $page.'.php');

        if(!file_exists($fichier)){
            inclde TL_ROOT.'/pages/index.php';
        }else{
            include $fichier;
        }
    }

    function getArticlesFromJson(){
        if(file_exist(DB_ARTICLE)) {
            $contenu_json = file_get_contents(DB_ARTICLE);
            return json_decode($contenu_json, true);
        }

        return null;
    }

    function getArticleById($id_article == null){
       if(file_exists(DB_ARTICLE)) {
            $contenu_json = file_get_contents(DB_ARTICLE);
            $_articles    = json_decode($contenu_json, true);

            foreach($_articles as $article){
                if($article['id'] == $id_article){
                    return $article;
                }
            }
        }

        return null;
    }

<?php
    session_start();

    include_once('class/autoload.php');
    include_once('class/controleur.clas.php');

    $site = connexionSecurise();
    $controleur = new controleur();
    $request = strtolower($_SERVER['REQUEST_URI']);

    $params = explode('/', trim($request, '/'));

    if(isset($params[1]))
    {
        $varGet = explode('?', trim($params[1], '?'));
        if(isset($varGet[1]))
        {
            $params[1] = $varGet[0];
        }
    }

    $params = array_filter($params);

    if(!isset($params[1]))
    {
        $params[1] = 'accueil';
    }

    switch ($params[1])
    {
        case 'accueil':
            $site-> titre = 'Accueil';
            //$site-> milieu_sidebar = $site-> rempli_milieu_sidebar();
            break;
        
        case 'a propos':
            $site-> titre = 'A propos';
            //$site-> milieu_sidebar = $site-> rempli_milieu_sidebar();
            break;
        
        case 'connexion':
            if(isset($_GET['login']) && isset($_GET['passoword']))
            {
                if($controleur->verifLogPwd($_GET['login'], $_GET['passoword']))
  			    {
  				    $_SESSION['log'] = $_GET['login'];
                    echo '<script>document.location.href="Accueil"; </script>';
  			    }
  			    else
  			    {
  				    $site->haut_sidebar= "<p class='errorMsg'>Login / Password invalide</p>";
  				    $params[1]='connexion';
  			    }
            }
  		    else
  		    {
  			    $params[1]='connexion';
  		    }

              break;
    }
?>

<?php 

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 100;
}

switch ($_REQUEST['action']) {
    case 100: // Page d'accueil
        $titre = "accueil";
        require_once 'include/EnteteDePageAccueil.php';
        require_once 'Acceuil .php';
        require_once 'include/PiedDePage.inc.php';
        break;
        
    case 200: // Page outillages
        $titre = "Outillages";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Outillages.php';
        require_once 'include/PiedDePage.inc.php';
        break;
        
    case 300: // Page Consommables
        $titre = "Consommables";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Consommables.php';
        require_once 'include/PiedDePage.inc.php';
        break;
    
    case 400: // Page Peinture
        $titre = "Peinture";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Peinture.php';
        require_once 'include/PiedDePage.inc.php';
        break;

    case 500: // Page Carrelage
        $titre = "Carrelage";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Carrelage.php';
        require_once 'include/PiedDePage.inc.php';
        break;
    
    case 600: // Page Plomberie
        $titre = "Plomberie";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Plomberie.php';
        require_once 'include/PiedDePage.inc.php';
        break;

    case 700: // Page Electricité
        $titre = "Electricité";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Electricité.php';
        require_once 'include/PiedDePage.inc.php';
        break;

    case 800: // Page Menuiserie
        $titre = "Menuiserie";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Menuiserie.php';
        require_once 'include/PiedDePage.inc.php';
        break;

    case 900: // Page Plaquiste
        $titre = "Plaquiste";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Plaquiste.php';
        require_once 'include/PiedDePage.inc.php';
        break;

    case 1000: // Page Compte
        $titre = "Mon Compte";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Compte.php';
        require_once 'include/PiedDePage.inc.php';
        break;


    case 1010: // Page Inscription
        $titre = "  Inscription";
        require_once 'include/EnteteDePage.inc.php';
        require_once 'inscription.php';
        require_once 'include/PiedDePage.inc.php';
        break;



    case 1020: // Page Connexion réussie
            $titre = "  Connexion réussie";
            require_once 'include/EnteteDePage.inc.php';
            require_once 'ConnexionTrue.php';
            require_once 'include/PiedDePage.inc.php';
            break;

    case 1030: // Page déconnexion réussie
             $titre = "  Déconnexion réussie";
             require_once 'include/EnteteDePage.inc.php';
             require_once 'Déconnexion.php';
             require_once 'include/PiedDePage.inc.php';
             break;
}
?>

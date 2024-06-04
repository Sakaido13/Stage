<?php 

if (!isset($_REQUEST['Action'])) {
    $_REQUEST['Action'] = 100 ;
}

switch ($_REQUEST['Action']){
    case 100 : // Page d'acceuil
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Acceuil .php';
        require_once 'include/PiedDePage.inc.php';
        break;
        
        case 200: // Page outillages
    require_once 'include/EnteteDePage.inc.php';
    require_once 'Outillage.php';
    require_once 'include/PiedDePage.inc.php';
    break;
        
    case 300: // Page Consommables
    require_once 'include/EnteteDePage.inc.php';
    require_once 'Consommables.php';
    require_once 'include/PiedDePage.inc.php';
    break;
    
    case 400: // Page Peinture
    require_once 'include/EnteteDePage.inc.php';
    require_once 'Peinture.php';
    require_once 'include/PiedDePage.inc.php';
    break;

    case 500://Page Carrelage
    require_once 'include/EnteteDePage.inc.php';
    require_once 'Carrelage.php';
    require_once 'include/PiedDePage.inc.php';
    break;
    
    case 600:// Page Plomberie
    require_once 'include/EnteteDePage.inc.php';
    require_once 'Plomberie.php';
    require_once 'include/PiedDePage.inc.php';
    break;

    case 700:// Page Electricité
    require_once 'include/EnteteDePage.inc.php';
    require_once 'Electricité.php';
    require_once 'include/PiedDePage.inc.php';
    break;

    case 800:// Page Menuiserie
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Menuiserie.php';
        require_once 'include/PiedDePage.inc.php';
        break;

        case 900:// Page Plaquiste
        require_once 'include/EnteteDePage.inc.php';
        require_once 'Plaquiste.php';
        require_once 'include/PiedDePage.inc.php';
        break;
}
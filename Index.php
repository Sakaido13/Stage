<?php 

if (!isset($_REQUEST['Action'])) {
    $_REQUEST['Action'] = 100 ;
}

switch ($_REQUEST['Action']){
    case 100 : // Page d'acceuil
        require_once 'include/EnteteDePage.inc.php';
        require_once 'include/PiedDePage.inc.php';
        break;

}
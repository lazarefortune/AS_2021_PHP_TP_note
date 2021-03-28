<?php

// Fichier de  configuration
include('./config/config_init.php');

// Session de notifications
$notifications = $_SESSION["notifications"] ?? [];
unset($_SESSION['notifications']);

// Session de l'utilisateur
if (isset($_SESSION['user'])) {
  $smarty->assign('isConnected', $_SESSION['user']);
}else {
  $smarty->assign('isConnected', False);
}

// Gestion de Routing
if (isset($_GET['action']) && file_exists(_CTRL_.'action/'.str_replace('.', '', $_GET['action']).'.php'))
    include(_CTRL_.'action/'.$_GET['action'].'.php');

if (isset($_GET['page']) && file_exists(_CTRL_.str_replace('.', '', $_GET['page']).'.php'))
    include(_CTRL_.$_GET['page'].'.php');
else
    include(_CTRL_.'index.php');

// Affichage des templates
    $smarty->display(_TPL_ . 'header.tpl');

    if (isset($_GET['page']) && file_exists(_TPL_.'pages/'.str_replace('.', '', $_GET['page']).'.tpl'))
        $smarty->display(_TPL_.'pages/'.$_GET['page'].'.tpl');
    else
        $smarty->display(_TPL_ . 'pages/home.tpl');

    $smarty->display(_TPL_ . 'footer.tpl');


?>

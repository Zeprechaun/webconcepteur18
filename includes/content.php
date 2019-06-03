<?php

/*if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = "";
}

$page = isset($_GET['page']) ? $_GET['page'] : "";
$page = './includes/' . $page . '.php';

require $page;*/

$content = glob('./includes/*.inc.php');

//Récupération du paramètre d'URL 'page' (superglobale $_GET)
$page = isset($_GET['page']) ? $_GET['page'] : "";

//Concaténation de la valeur récupérée pour avoir le chemin
$page = './includes/' . $page . '.inc.php';

$page = in_array($page, $content) ? $page : '.inc.php';

require $page;
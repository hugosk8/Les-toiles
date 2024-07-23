<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

ob_start();
switch ($page) {
    case 'home':
        require 'views/home.php';
        break;
    case 'cours-de-couture':
        require 'views/cours-de-couture.php';
        break;
    case 'retouches':
        require 'views/retouches.php';
        break;
}
$content = ob_get_clean();

require 'views/template/template.php';
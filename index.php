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
        $metadescription = "Bienvenue sur Les Toiles 3C2R, votre atelier de couture et retouches à Lille. Découvrez nos services de création sur mesure, cours de couture, et ateliers zéro déchet.";
        $title = "Accueil | Les toiles";
        break;
    case 'cours-de-couture':
        require 'views/cours-de-couture.php';
        $metadescription = "Apprenez la couture avec Les Toiles 3C2R. Nos cours de couture pour débutants et avancés vous guideront pour créer vos propres vêtements et accessoires.";
        $title = "Cours de couture | Les toiles";
        break;
    case 'retouches':
        require 'views/retouches.php';
        $metadescription = "Service de retouches rapide et de qualité à Lille chez Les Toiles 3C2R. Ajustement de vêtements, réparation et customisation.";
        $title = "Retouches | Les toiles";
        break;
    case 'creation-sur-mesure':
        require 'views/creation-sur-mesure.php';
        $metadescription = "Créations sur mesure par Les Toiles 3C2R. Transformez vos idées en réalité avec nos services de confection personnalisée. Robes de mariée, tenues de soirée et plus encore.";
        $title = "Créations sur mesure | Les toiles";
        break;
    case 'atelier-zero-dechets':
        require 'views/atelier-zero-dechets.php';
        $metadescription = "Participez aux ateliers zéro déchet de Les Toiles 3C2R. Apprenez à recycler et réutiliser vos tissus pour créer des produits écologiques et durables.";
        $title = "Atelier zéro dechets | Les toiles";
        break;
    case 'mercerie':
        require 'views/mercerie.php';
        $metadescription = "Découvrez la mercerie de Les Toiles 3C2R à Lille. Une large gamme de fils, boutons, tissus et accessoires pour tous vos projets de couture.";
        $title = "Mercerie | Les toiles";
        break;
    case 'contact':
        require 'views/contact.php';
        $metadescription = "Contactez Les Toiles 3C2R pour tous vos besoins en couture, retouches et création sur mesure. Nous sommes à votre disposition pour répondre à toutes vos questions. Trouvez notre adresse, téléphone et email ici.";
        $title = "Contact | Les toiles";
        break;
}
$content = ob_get_clean();

require 'views/template/template.php';
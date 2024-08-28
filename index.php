<?php 
require './src/controllers/contactController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = new ContactController();

if ($uri === '/') {
    require './public/index.php';
} elseif ($uri === '/create'){
    $controller->createContact();
}
?>
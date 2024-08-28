<?php 
require './src/controllers/contactController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$controller = new ContactController();
if ($uri === '/'){
    require './public/index.php';
} elseif ($uri === '/create'){
    $controller->createContact();
} elseif($uri === '/getContacts'){
    $controller->getContacts();
} elseif($uri === '/edit'){
    $controller->showUpdateForm();
}

?>
<?php 

require __DIR__.'/src/controllers/contactController.php';
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$contactController = ContactController::class;

if ($uri === '/'){
    $contactController::index();
} else if ($uri === '/create'){
    $contactController::create();
} else if ($uri === '/getAll'){
    $contactController::getContacts();
} else if ($uri === '/showUpdateForm'){
    $contactController::getContactUpdateForm();
} else if ($uri === '/update'){
    $contactController::update();
} else if ($uri === '/delete'){
    $contactController::delete();
}

?>
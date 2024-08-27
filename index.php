<?php 

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/') {
    include './public/index.php';
}
?>
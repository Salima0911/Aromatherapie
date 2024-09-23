<?php
$page = $_GET['page'];
if (isset($page)) {
    $fileController = explode('\public', $_SERVER['DOCUMENT_ROOT'])[0] . '/controllers/' . ucfirst($page) . 'Controller.php';
    if (file_exists($fileController)) {
        var_dump('oui');
    } else {
        var_dump('Non');
    }
}

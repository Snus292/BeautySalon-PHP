<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' or $path == 'index.php') {
    // Главная страница -
    $response = ControllerAdmin::formLoginSite();
}
// ---- ВХОД ----
elseif ($path == 'login') {
    // Форма входа
    $response = ControllerAdmin::loginAction();
} elseif ($path == 'logout') {
    // Выход
    $response = ControllerAdmin::logoutAction();
}
// listNews
elseif ($path == 'newsAdmin') {
    $response = ControllerAdminServices::servicesList();
}
// add news
elseif ($path == 'newsAdd') {
    $response = ControllerAdminServices::servicesAddForm();
} elseif ($path == 'newsAddResult') {
    $response = ControllerAdminServices::servicesAddResult();
}
// edit news
elseif ($path == 'newsEdit' && isset($_GET['id'])) {
    $response = ControllerAdminServices::servicesEditForm($_GET['id']);
} elseif ($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = ControllerAdminServices::servicesEditResult($_GET['id']);
}
// delete news
elseif ($path == 'newsDel' && isset($_GET['id'])) {
    $response = ControllerAdminServices::servicesDeleteForm($_GET['id']);
} elseif ($path == 'newsDelResult' && isset($_GET['id'])) {
    $response = ControllerAdminServices::servicesDeleteResult($_GET['id']);
}
// Страница не существует
else {
    $response = ControllerAdmin::error404();
}

<?php
if (!isset($_SESSION)) {
    session_start();
}

// VARIABILI
// LOGICA
// OUTPUT

$string = '';
$class = '';
$bool = false;

if (isset($_GET['mail'])) {
    $insertMail = $_GET['mail'];
    $_SESSION['email'] = $_GET['mail'];
    if (strpos($insertMail, '.') && strpos($insertMail, '@')) {
        $bool = true;
        $string = ' è stata accettata';
        $class = 'alert-success';
    } else {
        $string = ' non è stata accettata';
        $class = 'alert-danger';
    }
}

$_SESSION['flag'] = !empty($_SESSION['flag']) ? $_SESSION['flag'] : false;

$_SESSION['email'] = !empty($_SESSION['email']) ? $_SESSION['email'] : '';

$_SESSION['flag'] = $bool;

if (isset($_SESSION['flag']) && $_SESSION['flag'] === true) {
    header('Location: ./thankyou.php');
    die;
}

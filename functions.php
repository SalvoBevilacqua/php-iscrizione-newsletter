<?php
$string = '';
$class = '';
if (isset($_GET['mail'])) {
    $insertMail = $_GET['mail'];
    $bool = false;
    if (strpos($insertMail, '.') && strpos($insertMail, '@')) {
        $bool = true;
        $string = 'Email accettata';
        $class = 'alert-success';
    } else {
        $bool = false;
        $string = 'Email non accettata';
        $class = 'alert-danger';
    }
}

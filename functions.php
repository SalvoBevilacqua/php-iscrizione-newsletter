<?php
$string = '';
$class = '';
$bool = false;
if (isset($_GET['mail'])) {
    $insertMail = $_GET['mail'];
    if (strpos($insertMail, '.') && strpos($insertMail, '@')) {
        $bool = true;
        $string = 'E\' stata accettata';
        $class = 'alert-success';
    } else {
        $string = 'Non è stata accettata';
        $class = 'alert-danger';
    }
}

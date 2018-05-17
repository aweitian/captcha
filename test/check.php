<?php
require_once "../vendor/autoload.php";
$session = new \Aw\Session();
$session->setSavePath(".");
$session->start();
$demo = new \Aw\Captcha($session);
var_dump($demo->check($_GET['code']));
<?php
require_once "../vendor/autoload.php";
$session = new \Aw\Session();
$session->setSavePath(".");
$session->start();
$demo = new \Aw\Captcha($session);
$demo->getCode_char(6,200,40);
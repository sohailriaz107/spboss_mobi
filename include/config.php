<?php
session_start();
// Offline URL
if (basename($_SERVER['SERVER_NAME']) == "localhost" || basename($_SERVER['SERVER_NAME']) == "com1") {
	$root_dir = $_SERVER['DOCUMENT_ROOT'] . "/satta5/";
	$class_dir = $root_dir . "classes/";
	define("SITEURL", "http://localhost/satta/");
} else { // Online URL
	$root_dir = $_SERVER['DOCUMENT_ROOT'] . "/";
	$class_dir = $root_dir . "classes/";
	define("SITEURL", "https://spboss.mobi/");
}


define("GUESSING_FORUM_URL", "satta-matka-ji-143-guessing-forum.php");

define("PREFIX", "sms_");
define('OUTGOING_EMAIL', "support@spboss.mobi");
define('OUTGOING_EMAIL_REGISTER', "support@spboss.mobi");
define("WEBSITE_NAME", "spboss.mobi");
define("COPYRIGHTS_TEXT", "&copy; spboss.mobi");
define("CURRENCY_SIGN", "$");

define('SMS_AUTH_KEY', '328462Az42bWvHbS5eee314cP1');
define('SMS_SENDER_ID', 'MBOOKI');

define('SMS_AUTH_KEY1', '328462AhtDpV27Br5ece5f0aP1');
define('SMS_SENDER_ID1', 'DPBOSS');

//push notificaiton API ACCESS KEY
define('API_ACCESS_KEY', 'AAAA19MChtw:APA91bHVpiVNe4xWz1mZ3r0Ftfbrc_gc95xkV9V6eRRqr0cdh2PmyNqsaK9pLlSiWeJSZB0GukfDsN5Utn9q-QcEKqycF8dMlCNM7EQoFAfM-FkmblvO1tfhU6ee8HiuMRqTY8nR_yPw');

date_default_timezone_set('Asia/Kolkata');

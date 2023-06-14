<?php
mb_internal_encoding('UTF-8');
header('Content-Type: text/html; charset=UTF-8');
//setlocale(LC_COLLATE | LC_CTYPE | LC_TIME, 'ru_RU.UTF-8', 'ru_RU', 'ru', 'russian');
define('MAIN_DIR', __DIR__.'/');
define('AJAX', false);
require_once MAIN_DIR.'index.html';

require_once MAIN_DIR.'includes/phpmailer/PHPMailer.php';

require_once MAIN_DIR.'includes/classes/db-class.php';
$DB = new sat_db(array('host' => MAIN_DBHOST, 'user' => MAIN_DBUSER, 'pass' => MAIN_DBPASS, 'db' => MAIN_DBNAME));

$OPTIONS = array();
//$OPTIONS['browser_data'] = $_SERVER['HTTP_USER_AGENT'];//get_browser
$OPTIONS['protocol'] = get_protocol();
$OPTIONS['user_agent'] = empty($_SERVER['HTTP_USER_AGENT']) ? '' : $_SERVER['HTTP_USER_AGENT'];
$OPTIONS['domen'] = $_SERVER['SERVER_NAME'];
$OPTIONS['time_start'] = $_SERVER['REQUEST_TIME_FLOAT'];
$OPTIONS['user_ip'] = get_ip();
$OPTIONS['referer_data'] = parse_url(empty($_SERVER['HTTP_REFERER']) ? '' : $_SERVER['HTTP_REFERER']);

?>
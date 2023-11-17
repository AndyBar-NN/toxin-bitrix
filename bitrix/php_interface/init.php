<?
// константы
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/constants.php'))
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/constants.php');

// общие функции
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/functions.php'))
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/functions.php');

// регистрация обработчиков событий
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/events.php'))
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/events.php');
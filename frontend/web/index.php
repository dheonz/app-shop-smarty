<?php/** * @author Semenov Alexander <semenov@skeeks.com> * @link https://skeeks.com/ * @copyright (c) 2010 SkeekS * @date 21.11.2017 */error_reporting(E_ALL);    // определяем режим вывода ошибок    ini_set('display_errors', 'On');defined('ENV') or define('ENV', 'dev');defined('YII_ENV') or define('YII_ENV', 'dev');    define('YII_DEBUG', true);$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : "";if (in_array($ip, ['31.148.138.199', '31.148.138.49', '91.219.167.252'])) {    error_reporting(E_ALL);    // определяем режим вывода ошибок    ini_set('display_errors', 'On');    defined('ENV') or define('ENV', 'dev');    defined('YII_ENV') or define('YII_ENV', 'dev');    define('YII_DEBUG', true);}define("ROOT_DIR", dirname(dirname(__DIR__)));//Загрузка и запуск web приложения skeeks$skeeksFile = ROOT_DIR . '/vendor/skeeks/cms/app-web.php';if (!file_exists($skeeksFile)) {    //Если нет app-web.php то попробуем начать установку автоматически.    die("The project is not complete, not installed vendors.");}include $skeeksFile;
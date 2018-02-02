<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2017/06/17
 * Time: 10:34 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../app/bootstrap.php';

define('APP_DIR', '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);
define('CONTROLLER_DIR', APP_DIR . 'controllers' . DIRECTORY_SEPARATOR);
define('MODEL_DIR', APP_DIR . 'models' . DIRECTORY_SEPARATOR);
define('VIEW_DIR', APP_DIR . 'views' . DIRECTORY_SEPARATOR);
define('LIBRARIES_DIR', APP_DIR . 'libraries' . DIRECTORY_SEPARATOR);
define('ASSETS_DIR', './public' . DIRECTORY_SEPARATOR);

$app = new Sumo\Core\App;
<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2018/02/02
 * Time: 8:41 AM
 */
use Illuminate\Database\Capsule\Manager as Capsule;

class Database {

    function __construct()
    {
        $capsule = new Capsule();
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'eat_specials',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => ''
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}




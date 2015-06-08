<?php

include __DIR__.'/../vendor/autoload.php';

define('TESTS_ROOT_DIR', dirname(__FILE__));

$di = new \Phalcon\DI\FactoryDefault();

$di['db'] = function () {
    $connection = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        'host'       => 'localhost',
        'username'   => 'root',
        'password'   => 'daroot',
        'dbname'     => 'phpress_test',
        'persistent' => true,
        'options'    => array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
            \PDO::ATTR_CASE => \PDO::CASE_LOWER,
        ),
    ));

    return $connection;
};

\Phalcon\DI::setDefault($di);

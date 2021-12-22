<?php

spl_autoload_extensions(".php");
spl_autoload_register();

use yasmf\DataSource;
use yasmf\Router;

$dataSource = new DataSource(
    $host = 'localhost',
    $port = '3306', # to change with the port your mySql server listen to
    $db = 'geekRuthenois', # to change with your db name
    $user = 'loup', # to change with your db user name
    $pass = 'Mercure33', # to change with your db password
    $charset = 'utf8mb4'
);

echo " J ATTENDS "; 

$router = new Router() ;
$router->route($dataSource);

?>

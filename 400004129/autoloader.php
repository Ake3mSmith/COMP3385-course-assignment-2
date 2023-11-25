<?php


function router_autoloader($class_name)
{
    $file = __DIR__ . '/framework/router/' . $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}

function controller_autoloader($class_name)
{
    $file = __DIR__ . '/app/controllers/' . $class_name . '.php';

    if (file_exists($file)) {
        require $file;
    }
}

function model_autoloader($class_name)
{
    $file = __DIR__ . '/app/models/' . $class_name . '.php';

    if (file_exists($file)) {
        include $file;
    }
}

function orm_autoloader($class_name)
{
    $file = __DIR__ . '/framework/orm/' . $class_name . '.php';

    if (file_exists($file)) {
        include $file;
    }
}

function formmaker_autoloader($class_name)
{
    $file = __DIR__ . '/framework/formmaker/' . $class_name . '.php';

    if (file_exists($file)) {
        include $file;
    }
}

function sessionmanager_autoloader($class_name)
{
    $file = __DIR__ . '/framework/sessionmanager/' . $class_name . '.php';

    if (file_exists($file)) {
        include $file;
    }
}


// add a new autoloader by passing a callable into spl_autoload_register()
spl_autoload_register('router_autoloader');
spl_autoload_register('controller_autoloader');
spl_autoload_register('model_autoloader');
spl_autoload_register('orm_autoloader');
spl_autoload_register('formmaker_autoloader');
spl_autoload_register('sessionmanager_autoloader');


$dash = new indexController();

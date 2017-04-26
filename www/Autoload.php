<?php
spl_autoload_register(function ($class) {
   // var_dump ($class);
   // die;
    if (file_exists( __DIR__ .'/controller/' . $class . '.php')) {
        require __DIR__ . '/controller/' . $class. '.php';
    }
    elseif (file_exists( __DIR__ .'/models/' . $class . '.php')) {
        require __DIR__ . '/models/' . $class. '.php';
    }
});

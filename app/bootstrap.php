<?php
    //load config
    require_once '../app/config/config.php';

    //Auto Load
    spl_autoload_register(function ($classname){
        require_once '../app/libraries/'.$classname . '.php';

    });

    $init = new Core();
?>
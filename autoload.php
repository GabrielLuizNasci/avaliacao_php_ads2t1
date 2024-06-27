<?php
    spl_autoload_register(function ($classname){
        $file_path = str_replace('\\', '/', $classname) . '.php';
        $final_path = __DIR__ . '/' . $file_path; 

        if (file_exists($final_path)) {
            require_once $final_path;
        }
    });
?>
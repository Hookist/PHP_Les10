<?php

    class Autoload
    {
        static public function register($classname)
        {
            require $classname . ".php";
            echo "Подключился {$classname}<br>";

        }
        static public function registerAndLog($class)
        {
            self::register($class);
            echo "Подключился1 $class <br>";
        }
    }
/**
 * Created by PhpStorm.
 * User: student
 * Date: 22.06.2016
 * Time: 11:16
 */
?>
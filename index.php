<?php

    class A
    {
        function __destruct()
        {
            return new A();
        }
    }


    //$a = new A();
    //unset($a);d .dfbsdfkjvbfl'vqb'bdf'bg'ldfbgljfbg'ljbljbdlj haso we oiwer yf    ] y

 //   require ("MyClass.php");
   // require ("User.php");
   // $userObj = new User();
   // $myClassObj = new MyClass();


function __autoload($class)
{
    require $class . ".php";
}
 echo "qwe";
 var_dump(spl_autoload_functions());

    require ("autoload.php");
spl_autoload_register(["Autoload", "register"]);
echo "<br>";
var_dump(spl_autoload_functions());
echo "<br>";
spl_autoload_register(["Autoload", "registerAndLog"]);
var_dump(spl_autoload_functions());
?>
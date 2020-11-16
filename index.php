<?php 

include_once "vendor/autoload.php";


use Hello\HelloWorld;

echo (new HelloWorld)->getHello();
echo "<br>";
echo (new HelloWorld)->getWelcome("Bekir");
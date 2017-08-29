<?php
// 定义环境变量
define("ENVIRONMENT", "devlopment");
// define("ENVIRONMENT", "testing");
// define("ENVIRONMENT", "product");

switch(ENVIRONMENT)
{
    case 'devlopment':
        error_reporting(E_ALL);
        break;
    case 'testing':
        error_reporting(0);
        break;
    case 'product':
        error_reporting(0);
        break;
    default: error_reporting(0);
}



$system_folder = "system";

$application_folder = "application";


?>

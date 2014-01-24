<?php
// change the following paths if necessary
$yii = str_replace('\\','/',dirname(__FILE__).'/source/framework/yii.php');
//print_r(realpath(dirname(__FILE__).'/config/main.php'));die;
//$config = str_replace('\\','/',dirname(__FILE__).'/config/config.php');
if(strpos($_SERVER['HTTP_HOST'],'com')!==false)
{
    $config=dirname(__FILE__).'/config/config.php';

}
else if(strpos($_SERVER['HTTP_HOST'],'local')!==false)
{
    // remove the following lines when in production mode
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    // specify how many levels of call stack should be shown in each log message
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
    $config=dirname(__FILE__).'/config/config.php';
}
require_once($yii);
Yii::createWebApplication($config)->run();
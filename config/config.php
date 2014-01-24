<?php
return array (
    'basePath' => dirname ( __FILE__ ) . DIRECTORY_SEPARATOR . '../protected/',
    'name' => "",
    'runtimePath' => Yii::getPathOfAlias('webroot').'source/runtime/',
    'timeZone'=>'Asia/Shanghai',
    'language'=>'zh_cn',
    'theme'=>'default',
    'components'=>array(
        'widgetFactory'=>array(
            'class'=>'CWidgetFactory',
        ),
    ),

    // preloading 'log' component
    'preload'=>array(
        'log',
        'bootstrap'
    ),

    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),

    'modules'=>array(
        // uncomment the following to enable the Gii tool

        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'cbb123456',
            //ipFilters用于所在服务器不在本机的情况需开启
            //'ipFilters'=>array('192.168.1.10','::1'),
        ),
        'admin',
    ),
    'components' => array (
        //数据库连接
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=cbb',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix'=>'cbb_'
        ),

        'log'=>array(
            'class'=>'CLogRouter',//记录日志类
            'routes'=>array(
                //文本LOG
                array(
                    'class'=>'CFileLogRoute',//处理错误信息类
                    'levels'=>'error, warning',//错误等级
                    'categories'=>'application',
                ),
                //将达到设定错误级别的LOG发送邮件
                /*array(
                'class'=>'CEmailLogRoute',
                'levels'=>'email',
                'emails'=>'264943809@qq.com',
                ),*/
                //将错误显示到网页上
                array(
                'class'=>'CWebLogRoute',
                ),
            ),
        ),

        //发送邮件组件
        'mailer' => array(
            'class' => 'application.extensions.mailer.phpmailer',
            'pathViews' => 'application.views.email',
            'pathLayouts' => 'application.views.email.layouts'
        ),
    ),

    'params'=>array(
        //邮件发送配置
        'mail.stmp'=>'smtp.163.com',
        'mail.port'=>25,
        'mail.user'=>'账号',
        'mail.password'=>'密码',
        'mail.email'=>'邮箱',
    )
);
?>
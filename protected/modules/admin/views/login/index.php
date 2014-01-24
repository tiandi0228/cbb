<!DOCTYPE html>
<html lang="cn">
    <head>
        <meta charset="utf-8" />
        <title>登录管理中心</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css" media="all" />
        <link href="static/image/admincp/admincp.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

<body>
    <div id="login-container">
        <div id="login-header">
            <h3>登录管理中心</h3>
        </div>
        <div id="login-content" class="clearfix">
            <?php $form=$this->beginWidget('CActiveForm', array('id'=>'login-form','enableClientValidation'=>true,'enableAjaxValidation'=>false,'clientOptions'=>array('validateOnSubmit'=>true,))); ?>
                <fieldset>
                    <?= $form->errorSummary($model,null,null,array('class'=>'alert alert-error','style'=>'font-weight:bold'));?>
                    <div class="control-group">
                        <label class="control-label" for="username"><?=$form->labelEx($model,'username'); ?></label>
                        <div class="controls">
                            <?=$form->textField($model,'username',array('class'=>'input-large','autocomplete'=>'off')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password"><?=$form->labelEx($model,'password'); ?></label>
                        <div class="controls">
                            <?=$form->passwordField($model,'password',array('class'=>'input-large','autocomplete'=>'off')); ?>
                        </div>
                    </div>
                </fieldset>
                <div class="pull-right">
                    <button type="submit" class="btn btn-warning btn-large">登陆</button>
                </div>
            <?php $this->endWidget(); ?>
        </div>
        <div class="copyright">
            <p>Powered by <a href="#" target="_blank">CBB</a> 1.0 </p>
        </div>
    </div>
</body>
</html>

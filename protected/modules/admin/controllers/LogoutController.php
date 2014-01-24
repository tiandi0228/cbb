<?php
class LogoutController extends ControllerBack
{
    public function actionIndex()
    {
        Yii::app()->user->logout();
        $this->redirect(CHtml::normalizeUrl(array('/admin/login')));
        Yii::app()->end();
    }
}
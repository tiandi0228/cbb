<?php
class ControllerBack extends CController
{
    public $layout='/layouts/cbb';
    protected function beforeAction($action){
        //判断权限
        if(Yii::app()->user->isGuest){
            $this->redirect(array('/admin/login'));
            exit();
        }
        if(yii::app()->user->groupid !== '1')
        {
            $this->redirect(array('/admin/login'));
            exit();
        }
        return parent::beforeAction($action);
    }

}
<?php
class ForumController extends ControllerBack
{
    //论坛设置
    public function actionIndex()
    {
        $this->render('index');
    }

    //板块管理
    public function actionSet()
    {
        $this->render('set');
    }

    //功能细节
    public function actionFunction()
    {
        $this->render('function');
    }
}
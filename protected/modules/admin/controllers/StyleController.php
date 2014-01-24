<?php
class StyleController extends ControllerBack
{
    //风格管理
    public function actionIndex()
    {
        $this->render('index');
    }

    //界面设置
    public function actionSet()
    {
        $this->render('set');
    }

    //表情管理
    public function actionSmilies()
    {
        $this->render('smilies');
    }

    //列表图标
    public function actionOnline()
    {
        $this->render('online');
    }
}
<?php
class ToolsController extends ControllerBack
{
    //数据库
    public function actionIndex()
    {
        $this->render('index');
    }

    //缓存管理
    public function actionCache()
    {
        $this->render('cache');
    }

    //管理日志
    public function actionLog()
    {
        $criteria = new CDbCriteria();
        $criteria->order = 'time desc';
        $count = AdminLog::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize = 10;
        $pager->applyLimit($criteria);
        $model = AdminLog::model()->findAll($criteria);
        $this->render('log',array('model'=> $model,'pages'=>$pager));
    }
}